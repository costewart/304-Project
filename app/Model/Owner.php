<?php

require_once 'Connection.php';
class Owner
{
    protected $conn;
    protected $connection;
    public function __construct() {
        $conn = new Connection();
        $this->connection = $conn->openConnection();
    }

    public function getAllOwners() {
        $sql = "SELECT * FROM Owners";
        $results = $this->connection->query($sql);
        return $results;
    }


}