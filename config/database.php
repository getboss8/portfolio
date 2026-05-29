<?php
/**
 * Database Connection Class
 * Handles all database connections and queries
 */

class Database {
    private $host = DB_HOST;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
    private $db_name = DB_NAME;
    private $conn;
    private $stmt;

    /**
     * Connect to database
     */
    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->db_user,
            $this->db_pass,
            $this->db_name
        );

        // Check connection
        if ($this->conn->connect_error) {
            die('Connection Error: ' . $this->conn->connect_error);
        }

        // Set charset to utf8
        $this->conn->set_charset('utf8mb4');

        return $this->conn;
    }

    /**
     * Prepare statement
     */
    public function prepare($query) {
        $this->stmt = $this->conn->prepare($query);
        if (!$this->stmt) {
            die('Prepare Error: ' . $this->conn->error);
        }
        return $this;
    }

    /**
     * Bind values
     */
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = 'i';
                    break;
                case is_float($value):
                    $type = 'd';
                    break;
                case is_bool($value):
                    $type = 'i';
                    $value = (int)$value;
                    break;
                default:
                    $type = 's';
            }
        }

        $this->stmt->bind_param($type, $value);
        return $this;
    }

    /**
     * Execute statement
     */
    public function execute() {
        if (!$this->stmt->execute()) {
            die('Execute Error: ' . $this->stmt->error);
        }
        return $this;
    }

    /**
     * Get result
     */
    public function getResult() {
        return $this->stmt->get_result();
    }

    /**
     * Fetch single row
     */
    public function fetch() {
        return $this->getResult()->fetch_assoc();
    }

    /**
     * Fetch all rows
     */
    public function fetchAll() {
        return $this->getResult()->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Fetch multiple rows (paginated)
     */
    public function fetchMultiple($limit = 10, $offset = 0) {
        return $this->getResult()->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get row count
     */
    public function rowCount() {
        return $this->stmt->affected_rows;
    }

    /**
     * Get insert ID
     */
    public function lastID() {
        return $this->conn->insert_id;
    }

    /**
     * Close connection
     */
    public function close() {
        if ($this->stmt) {
            $this->stmt->close();
        }
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
