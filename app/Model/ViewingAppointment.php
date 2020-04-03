
<?php

require_once 'Connection.php';

class ViewingAppointment
{
    public function getAllAppointments() {
        return $this->getAppointmentsByConditions("","","");;
    }

//    public function deleteAnAppointments() {
//        $conn = new Connection();
//        $connection = $conn->openConnection();
//        $sql = "SELECT * FROM ViewingAppointments";
//        $results = $connection->query($sql);
//        return $results;
//    }

    public function getAppointmentsByConditions($pm_name, $start_time, $end_time) {
        $name_clause = "";
        if (!empty($pm_name)) $name_clause = $name_clause . " AND p.Name like '%$pm_name%'";

        $time_clause = "";
        if (!empty($start_time)) $time_clause = $time_clause . " AND v.Time >= '$start_time'";
        if (!empty($end_time)) $time_clause = $time_clause . " AND v.Time <= '$end_time'";

        $conn = new Connection();
        $connection = $conn->openConnection();
        $sql = "SELECT * from 
                ViewingAppointments v, Units u, BuildingAddresses b, 
                PropertyManagers p, PostalCodes pc 
                where v.UnitID = u.UnitID AND u.BuildingID = b.BuildingID 
                AND p.PropertyManagerID = v.PropertyManagerID AND pc.PostalCode = b.PostalCode
                $name_clause
                $time_clause"
               ;
        $results = $connection->query($sql);
//        print_r($results);
//        die;
        return $results;

    }

}