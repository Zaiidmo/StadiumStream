<?php 
namespace config;
USE PDO;
USE PDOException;

class Connection
{
    private $dsn;
    private $conn;

    public function __construct($host, $username, $password, $db)
    {
        $this->dsn = "mysql:host=$host;dbname=$db";

        try {
            $this->conn = new PDO($this->dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // if ($this->conn) {
            //     echo "Connected to the $db database successfully!";
            // }
        } catch (PDOException $e) {
            echo "Error Connection: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}