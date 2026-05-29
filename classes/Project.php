<?php
/**
 * Project Class
 * Handles project CRUD operations
 */

class Project {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    /**
     * Get all projects
     */
    public function getAllProjects($limit = null, $offset = 0) {
        $query = 'SELECT * FROM projects ORDER BY created_at DESC';
        
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
     * Get project by ID
     */
    public function getProjectById($id) {
        $this->db->prepare('SELECT * FROM projects WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->fetch();
    }
    
    /**
     * Get projects by category
     */
    public function getProjectsByCategory($category) {
        $this->db->prepare('SELECT * FROM projects WHERE category = ? ORDER BY created_at DESC');
        $this->db->bind(1, $category);
        $this->db->execute();
        
        return $this->db->fetchAll();
    }
    
    /**
     * Create new project
     */
    public function createProject($title, $description, $category, $image, $technologies, $live_link, $github_link, $featured = false) {
        $this->db->prepare('INSERT INTO projects (title, description, category, image, technologies, live_link, github_link, featured) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $this->db->bind(1, $title);
        $this->db->bind(2, $description);
        $this->db->bind(3, $category);
        $this->db->bind(4, $image);
        $this->db->bind(5, $technologies);
        $this->db->bind(6, $live_link);
        $this->db->bind(7, $github_link);
        $this->db->bind(8, $featured);
        $this->db->execute();
        
        return $this->db->lastID();
    }
    
    /**
     * Update project
     */
    public function updateProject($id, $title, $description, $category, $image, $technologies, $live_link, $github_link, $featured = false) {
        $this->db->prepare('UPDATE projects SET title = ?, description = ?, category = ?, image = ?, technologies = ?, live_link = ?, github_link = ?, featured = ? WHERE id = ?');
        $this->db->bind(1, $title);
        $this->db->bind(2, $description);
        $this->db->bind(3, $category);
        $this->db->bind(4, $image);
        $this->db->bind(5, $technologies);
        $this->db->bind(6, $live_link);
        $this->db->bind(7, $github_link);
        $this->db->bind(8, $featured);
        $this->db->bind(9, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Delete project
     */
    public function deleteProject($id) {
        $this->db->prepare('DELETE FROM projects WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
}
