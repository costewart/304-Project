<?php

require_once 'Connection.php';
class Unit extends Connection
{
    // protected $conn;
    // protected $connection;

    // public function __construct() {
    //     $conn = new Connection();
    //     $this->connection = $conn->openConnection();
    // }

    // get all data from the database
    public function getAllUnits() {
        $sql = "SELECT * FROM Units";
        $results = $this->openConnection()->query($sql);

        $numRows = $results->num_rows;
        if ($numRows > 0) {
            while ($row = $results->fetch_assoc()) {
                $data[] = $row;
            }
            //return $data;
        }
        return $results;
    }

    // show all data
    public function showAllUnits() {
        $datas = $this->getAllUnits();
        
        $numberRows = mysqli_num_rows($datas);
        
        if($numberRows > 0) {
            echo '<table>';
                echo '<tr>';
                echo '  <th> UnitID </th>';
                echo '  <th> Bedrooms </th>';
                echo '  <th> Bathrooms </th>';
                echo '</tr>';  

        while ($Row = mysqli_fetch_assoc($datas)) {

        echo '<tr><td>' . $Row['UnitID'] . '</td><td>' . $Row['Bedrooms'] . '</td><td>' . $Row['Bathrooms'] . '</td></tr>';
        }
        echo '</table>';
    }
}

    public function getUnitsStmt($bed) {
        $sql = "SELECT * FROM Units WHERE UnitSize = ?";
        $stmt = mysqli_stmt_init($this->openConnection());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
        } else {
            // bind parameters to the placeholders
            mysqli_stmt_bind_param($stmt, "s", $bed);
            // run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['UnitID']."<br>";
                echo $row['UnitSize']."<br>";
                echo $row['Bathrooms']."<br>";
            }
        }

    }

    public function getAllUnitsWithAddresses() {
        // $sql = "SELECT * FROM Units u, BuildingAddresses ba WHERE u.BuildingID = ba.BuildingID";
        // $results = $this->query($sql);
        // return $results;
    }

}