<?php

require_once 'Connection.php';
class Tenant
{

    protected $conn;
    protected $connection;

    public function __construct() {
        $conn = new Connection();
        $this->connection = $conn->openConnection();
    }

    public function getAllTenants() {
        $conn = new Connection();
        $connection = $conn->openConnection();
        $sql = "SELECT * FROM Tenants";
        $results = $connection->query($sql);
        return $results;
    }


    public function insertTenant($table_name, $data) {
        $string = "INSERT INTO ".$table_name." (";
        $string .= implode(",", array_keys($data)) . ') VALUES (';
        $string .= "'" . implode("','", array_values($data)) . "')";

        return $string;


    }

//    public function updateTenant() {
//        $conn = new Connection();
//        $connection = $conn->openConnection();
       
//        // UPDATE
//        $sql = "UPDATE Tenants SET Tenants.Name='$_POST[pname]', Tenants.PhoneNum='$_POST[phonenum]' WHERE Tenants.TenantID='$_POST[id]'";

//         // Excecut query
//         if (mysqli_query($connection, $sql))
//             header("refresh:1; url=../View/tenant/index.php");
//         else
//             echo "not updated";
//    }

}