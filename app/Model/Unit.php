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

    public function deleteUnits($field, $val) {
        $sql = "DELETE FROM Units WHERE $field='$val'";
        if ($this->connection->query($sql) === TRUE) {
         echo "Unit deleted successfully";
         }
         
         $results = $this->getAllUnits();
         return $results;
    }

    public function filterUnits($type_apt, $type_house, $size, $bed, $bath, $availability) {
        $apt_clause = empty($type_apt) ? " AND u.UnitType != \"apartment\"" : "";
        $house_clause = empty($type_house) ? " AND u.UnitType != \"house\"" : "";

        $size_clause = "";
        if (!empty($size[0])) $size_clause = $size_clause . " AND u.UnitSize >= $size[0]";
        if (!empty($size[1])) $size_clause = $size_clause . " AND u.UnitSize <= $size[1]";

        $bed_clause = "";
        if (!empty($bed[0])) $bed_clause = $bed_clause . " AND u.Bedrooms >= $bed[0]";
        if (!empty($bed[1])) $bed_clause = $bed_clause . " AND u.Bedrooms <= $bed[1]";

        $bath_clause = "";
        if (!empty($bath[0])) $bath_clause = $bath_clause . " AND u.Bathrooms >= $bath[0]";
        if (!empty($bath[1])) $bath_clause = $bath_clause . " AND u.Bathrooms <= $bath[1]";

        // TODO: Make this filter for only contracts started before today and ending after today...
        // (Right now it filters out any unit that has a Contract associated with it)
        $avail_join = "";
        if ($availability == "avail") $avail_join = " LEFT JOIN Contracts c ON c.UnitID = u.UnitID";
        $avail_clause = "";
        if ($availability == "avail") $avail_clause = " AND c.UnitID IS NULL";

        $sql = "SELECT ba.Streetint AS StreetNumber, ba.StreetName, ba.PostalCode, u.UnitType, u.UnitSize, u.FloorNum, u.UnitNum, u.Bedrooms, u.Bathrooms
                FROM BuildingAddresses ba, Units u
                $avail_join
                WHERE u.BuildingID = ba.BuildingID
                $apt_clause
                $house_clause
                $size_clause
                $bed_clause
                $bath_clause
                $avail_clause";

        $results = $this->connection->query($sql);
        return $results;
    }
}