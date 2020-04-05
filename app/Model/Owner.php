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

    public function getOwnersByUnitTypes($require_all_unit_types) {
        $flagClause = $require_all_unit_types == "true" ? "Not" : "";
        $sql = "Select * 
                From Owners O
                Where $flagClause Exists
	                (Select UnitType
	                From Units u1 WHERE u1.UnitType
	                NOT IN 
	                (Select UnitType
	                From Units u2 WHERE u2.OwnerID = O.OwnerID));";
        $results = $this->connection->query($sql);
        return $results;
    }

}