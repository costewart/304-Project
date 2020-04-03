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

    public function getOwnersWithUnitType($unit_type) {
        $sql = "Select * 
                From Owners O
                Where Not Exists
	                (Select UnitID
	                From Units u1 WHERE u1.OwnerID = O.OwnerID
	                NOT IN 
	                (Select UnitID
	                From Units u2 WHERE u2.OwnerID = O.OwnerID
	                AND u2.UnitType = '$unit_type'));";
        $results = $this->connection->query($sql);
        return $results;



    }



}