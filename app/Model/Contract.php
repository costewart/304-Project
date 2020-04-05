<?php

require_once 'Connection.php';
class Contract
{
    protected $conn;
    protected $connection;

    public function __construct() {
        $conn = new Connection();
        $this->connection = $conn->openConnection();
    }

    public function contractProjection($args) {
        $cols = "";
        foreach($args as $arg) {
            if (!empty($arg)) {
                $cols .= "$arg, ";
            }
        }
        $cols = rtrim($cols, ', ');
        $sql = "SELECT $cols
        FROM Contracts c, Units u, BuildingAddresses ba, ContractDuration cd, PostalCodes pc, Owners o, Tenants t
        WHERE c.UnitID = u.unitID
            AND t.TenantID = c.TenantID
            AND o.OwnerID = u.OwnerID
            AND u.BuildingID = ba.BuildingID
            AND c.Duration = cd.Duration
            AND c.StartDate = cd.StartDate
            AND ba.PostalCode = pc.PostalCode
        ORDER BY ba.BuildingID, u.UnitID";
        $results = $this->connection->query($sql);
        return $results;
    }

    public function countAvailableUnits() {
        $sql = "SELECT COUNT(*) AS AvailableUnits
                FROM Units u LEFT JOIN Contracts c ON c.UnitID = u.UnitID
                WHERE c.ContractID IS NULL";
        $results = $this->connection->query($sql);
        return $results;
    }

    public function avgRentPerCity() {
        $sql = "SELECT pc.City, AVG(c.RentPrice) AS AvgRent
                FROM Contracts c, PostalCodes pc, BuildingAddresses ba, Units u
                WHERE c.UnitID = u.UnitID
                    AND ba.BuildingID = u.BuildingID
                    AND pc.PostalCode = ba.PostalCode
                GROUP BY pc.City";
        $results = $this->connection->query($sql);
        return $results;
    }

    // More complication query -- apparently not needed anymore?
    public function getAvgIncomePerOwner() {
        $sql = "SELECT AVG(totalRentFromBdg) AS AvgIncome, t.OwnerID, t.Name
                FROM (
                    SELECT o.OwnerID, o.Name, ba.BuildingID, SUM(c.RentPrice) AS totalRentFromBdg
                    FROM Contracts c, Units u, BuildingAddresses ba, Owners o
                    WHERE c.UnitID = u.UnitID
                        AND u.OwnerID = o.OwnerID
                        AND u.BuildingID = ba.BuildingID
                    GROUP BY o.OwnerID, ba.BuildingID) as t
                GROUP BY t.OwnerID";
        $results = $this->connection->query($sql);
        return $results;
    }


}