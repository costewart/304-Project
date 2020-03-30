<?php

require_once 'Connection.php';
class Unit
{
    protected $conn;
    protected $connection;

    public function __construct() {
        $conn = new Connection();
        $this->connection = $conn->openConnection();
    }

    public function getAllUnits() {
        $sql = "SELECT * FROM Units";
        $results = $this->connection->query($sql);
        return $results;
    }

    public function getAllUnitsWithAddresses() {
        $sql = "SELECT * FROM Units u, BuildingAddresses ba WHERE u.BuildingID = ba.BuildingID";
        $results = $this->connection->query($sql);
        return $results;
    }

}