
<?php

require_once 'Connection.php';
class ViewingAppointment
{
    public function getAllAppointments() {
        $conn = new Connection();
        $connection = $conn->openConnection();
        $sql = "SELECT * FROM ViewingAppointments";
        $results = $connection->query($sql);
        return $results;
    }

//    public function deleteAnAppointments() {
//        $conn = new Connection();
//        $connection = $conn->openConnection();
//        $sql = "SELECT * FROM ViewingAppointments";
//        $results = $connection->query($sql);
//        return $results;
//    }

}