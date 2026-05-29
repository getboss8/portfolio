<?php
/**
 * Message Class
 * Handles contact messages
 */

class Message {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    /**
     * Get all messages
     */
    public function getAllMessages($limit = null, $offset = 0) {
        $query = 'SELECT * FROM messages ORDER BY created_at DESC';
        
        if ($limit) {
            $query .= ' LIMIT ? OFFSET ?';
            $this->db->prepare($query);
            $this->db->bind(1, $limit);
            $this->db->bind(2, $offset);
        } else {
            $this->db->prepare($query);
        }
        
        $this->db->execute();
        return $this->db->fetchAll();
    }
    
    /**
     * Get message by ID
     */
    public function getMessageById($id) {
        $this->db->prepare('SELECT * FROM messages WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->fetch();
    }
    
    /**
     * Create new message
     */
    public function createMessage($name, $email, $phone, $subject, $message) {
        $this->db->prepare('INSERT INTO messages (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)');
        $this->db->bind(1, $name);
        $this->db->bind(2, $email);
        $this->db->bind(3, $phone);
        $this->db->bind(4, $subject);
        $this->db->bind(5, $message);
        $this->db->execute();
        
        return $this->db->lastID();
    }
    
    /**
     * Mark message as read
     */
    public function markAsRead($id) {
        $this->db->prepare('UPDATE messages SET is_read = 1 WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Delete message
     */
    public function deleteMessage($id) {
        $this->db->prepare('DELETE FROM messages WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Get unread messages count
     */
    public function getUnreadCount() {
        $this->db->prepare('SELECT COUNT(*) as count FROM messages WHERE is_read = 0');
        $this->db->execute();
        $result = $this->db->fetch();
        
        return $result['count'];
    }
}
