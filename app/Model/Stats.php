<?php

require_once 'Connection.php';
class Stats
{
    protected $conn;
    protected $connection;

    public function __construct() {
        $conn = new Connection();
        $this->connection = $conn->openConnection();
    }

    public function getAllContractDetails() {
        $sql = "SELECT o.Name AS OwnerName, c.StartDate, cd.EndDate, ba.Streetint, ba.StreetName,
                        ba.PostalCode, u.UnitNum, u.UnitType, c.RentPrice, pc.City
                FROM Contracts c, Units u, BuildingAddresses ba, ContractDuration cd, PostalCodes pc, Owners o
                WHERE c.UnitID = u.unitID
                    AND o.OwnerID = u.OwnerID
                    AND u.BuildingID = ba.BuildingID
                    AND c.Duration = cd.Duration
                    AND c.StartDate = cd.StartDate
                    AND ba.PostalCode = pc.PostalCode
                ORDER BY ba.BuildingID, u.UnitID";
        $results = $this->connection->query($sql);
        return $results;
    }

    public function getAvgRentPerBuilding() {
        $sql = "SELECT ba.Streetint, ba.StreetName, ba.PostalCode, pc.City,
                        AVG(c.RentPrice) AS AvgRent
                FROM Contracts c, Units u, BuildingAddresses ba, ContractDuration cd, PostalCodes pc
                WHERE c.UnitID = u.unitID
                    AND u.BuildingID = ba.BuildingID
                    AND c.Duration = cd.Duration
                    AND c.StartDate = cd.StartDate
                    AND ba.PostalCode = pc.PostalCode
                GROUP BY ba.BuildingID";
        $results = $this->connection->query($sql);
        return $results;
    }

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