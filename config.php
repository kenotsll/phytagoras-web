<?php
class Database {
    private $host = "localhost";
    private $username = "root"; // Adjust to your database username
    private $password = ""; // Adjust to your database password
    private $database = "user_db"; // Replace with your database name
    public $conn;

    public function __construct() {
        $this->conn = $this->connectDB();
    }

    private function connectDB() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    // Optional: function to close connection
    public function closeConnection() {
        $this->conn->close();
    }
}
?>
