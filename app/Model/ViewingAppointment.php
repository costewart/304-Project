
<?php

require_once 'Connection.php';

class ViewingAppointment
{
    public function getAllAppointments() {
        return $this->getAppointmentsByConditions(array(), "","","");;
    }

    public function getAppointmentsByConditions($tablesToJoin, $start_time, $end_time) {
        $join_clause = "";
        $select_clause = "v.ApptID, v.Time, ";
        foreach($tablesToJoin as $table) {
            $join_clause .= "JOIN $table[0] ON $table[2]";
            $select_clause .= "$table[1]";
        }
        $select_clause = rtrim($select_clause, ', ');

        //$name_clause = "";
        //if (!empty($pm_name)) $name_clause = $name_clause . " AND p.Name like '%$pm_name%'";
        $time_clause = "";
        if (!empty($start_time)) $time_clause = $time_clause . " AND v.Time >= '$start_time'";
        if (!empty($end_time)) $time_clause = $time_clause . " AND v.Time <= '$end_time'";

        $conn = new Connection();
        $connection = $conn->openConnection();
        $sql = "SELECT $select_clause from 
                ViewingAppointments v $join_clause
                WHERE 1=1
                $time_clause";

        $results = $connection->query($sql);
        return $results;
    }

}