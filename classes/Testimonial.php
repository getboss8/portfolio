<?php
/**
 * Testimonial Class
 * Handles testimonial CRUD operations
 */

class Testimonial {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    /**
     * Get all testimonials
     */
    public function getAllTestimonials($limit = null, $offset = 0) {
        $query = 'SELECT * FROM testimonials ORDER BY created_at DESC';
        
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
     * Get testimonial by ID
     */
    public function getTestimonialById($id) {
        $this->db->prepare('SELECT * FROM testimonials WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->fetch();
    }
    
    /**
     * Create new testimonial
     */
    public function createTestimonial($client_name, $client_title, $client_image, $message, $rating) {
        $this->db->prepare('INSERT INTO testimonials (client_name, client_title, client_image, message, rating) VALUES (?, ?, ?, ?, ?)');
        $this->db->bind(1, $client_name);
        $this->db->bind(2, $client_title);
        $this->db->bind(3, $client_image);
        $this->db->bind(4, $message);
        $this->db->bind(5, $rating);
        $this->db->execute();
        
        return $this->db->lastID();
    }
    
    /**
     * Update testimonial
     */
    public function updateTestimonial($id, $client_name, $client_title, $client_image, $message, $rating) {
        $this->db->prepare('UPDATE testimonials SET client_name = ?, client_title = ?, client_image = ?, message = ?, rating = ? WHERE id = ?');
        $this->db->bind(1, $client_name);
        $this->db->bind(2, $client_title);
        $this->db->bind(3, $client_image);
        $this->db->bind(4, $message);
        $this->db->bind(5, $rating);
        $this->db->bind(6, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Delete testimonial
     */
    public function deleteTestimonial($id) {
        $this->db->prepare('DELETE FROM testimonials WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
}
