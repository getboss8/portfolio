<?php
/**
 * User Class
 * Handles user authentication and management
 */

class User {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    /**
     * Register new user
     */
    public function register($name, $email, $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        
        $this->db->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
        $this->db->bind(1, $name);
        $this->db->bind(2, $email);
        $this->db->bind(3, $hashed_password);
        $this->db->execute();
        
        return $this->db->lastID();
    }
    
    /**
     * Login user
     */
    public function login($email, $password) {
        $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $this->db->bind(1, $email);
        $this->db->execute();
        
        $user = $this->db->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];
            return true;
        }
        
        return false;
    }
    
    /**
     * Get user by ID
     */
    public function getUserById($id) {
        $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->fetch();
    }
    
    /**
     * Update user
     */
    public function updateUser($id, $name, $email, $phone = null, $bio = null) {
        $this->db->prepare('UPDATE users SET name = ?, email = ?, phone = ?, bio = ? WHERE id = ?');
        $this->db->bind(1, $name);
        $this->db->bind(2, $email);
        $this->db->bind(3, $phone);
        $this->db->bind(4, $bio);
        $this->db->bind(5, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Change password
     */
    public function changePassword($id, $new_password) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
        
        $this->db->prepare('UPDATE users SET password = ? WHERE id = ?');
        $this->db->bind(1, $hashed_password);
        $this->db->bind(2, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Logout user
     */
    public function logout() {
        session_destroy();
        return true;
    }
}
