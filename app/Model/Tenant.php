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
    
        $sql = "SELECT * FROM Tenants";
        $results = $this->connection->query($sql);
        return $results;
    }


    public function insertTenant($id, $pname, $phonenum) {
        $int = (int)$id;
        $sql = "INSERT INTO Tenants (TenantID, PhoneNum, Name) VALUES ('$int', '$phonenum', '$pname')";
        if ($this->connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
        }

        $results = $this->getAllTenants();
        return $results;



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