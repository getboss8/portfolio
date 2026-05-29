<?php
/**
 * Booking Class
 * Handles booking CRUD operations
 */

class Booking {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    /**
     * Get all bookings
     */
    public function getAllBookings($limit = null, $offset = 0) {
        $query = 'SELECT b.*, s.title as service_title FROM bookings b LEFT JOIN services s ON b.service_id = s.id ORDER BY b.booking_date DESC';
        
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
     * Get booking by ID
     */
    public function getBookingById($id) {
        $this->db->prepare('SELECT b.*, s.title as service_title FROM bookings b LEFT JOIN services s ON b.service_id = s.id WHERE b.id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->fetch();
    }
    
    /**
     * Create new booking
     */
    public function createBooking($full_name, $email, $phone, $service_id, $booking_date, $booking_time, $message = null) {
        // Check if time is already booked
        if ($this->isTimeBooked($booking_date, $booking_time)) {
            return false;
        }
        
        $this->db->prepare('INSERT INTO bookings (full_name, email, phone, service_id, booking_date, booking_time, message, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $this->db->bind(1, $full_name);
        $this->db->bind(2, $email);
        $this->db->bind(3, $phone);
        $this->db->bind(4, $service_id);
        $this->db->bind(5, $booking_date);
        $this->db->bind(6, $booking_time);
        $this->db->bind(7, $message);
        $this->db->bind(8, 'pending');
        $this->db->execute();
        
        return $this->db->lastID();
    }
    
    /**
     * Check if time is already booked
     */
    public function isTimeBooked($booking_date, $booking_time) {
        $this->db->prepare('SELECT id FROM bookings WHERE booking_date = ? AND booking_time = ? AND status IN ("pending", "approved", "completed")');
        $this->db->bind(1, $booking_date);
        $this->db->bind(2, $booking_time);
        $this->db->execute();
        
        return $this->db->fetch() ? true : false;
    }
    
    /**
     * Update booking status
     */
    public function updateBookingStatus($id, $status) {
        $this->db->prepare('UPDATE bookings SET status = ? WHERE id = ?');
        $this->db->bind(1, $status);
        $this->db->bind(2, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
    
    /**
     * Delete booking
     */
    public function deleteBooking($id) {
        $this->db->prepare('DELETE FROM bookings WHERE id = ?');
        $this->db->bind(1, $id);
        $this->db->execute();
        
        return $this->db->rowCount() > 0;
    }
}
