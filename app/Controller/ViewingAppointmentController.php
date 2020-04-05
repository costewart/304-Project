<?php
class ViewingAppointmentController extends Controller
{

    protected $model;

    public function __construct() {
        $this->model = $this->model("ViewingAppointment");
    }

    public function index() {
        $appointments = $this->model->getAllAppointments();
        $this->view('viewappointment/index', [
           "appointments" => $appointments
        ]);
    }

    public function action() {
        $tables = array();

        if (isset($_POST['PropertyManagers'])) {
            array_push($tables, array("PropertyManagers pm",
                "pm.Name AS PropMgrName, pm.PhoneNum AS PropMgrPhoneNum, ",
                "pm.PropertyManagerID = v.PropertyManagerID "));
        }
        if (isset($_POST['Tenants'])) {
            array_push($tables, array("Tenants t",
            "t.Name AS TenantName, t.PhoneNum AS TenantPhoneNum, ",
            "t.TenantID = v.TenantID "));
        }
        if (isset($_POST['UnitAddress'])) {
            array_push($tables, array("Units u",
            "u.UnitNum, ",
            "u.UnitID = v.UnitID "),
            array("BuildingAddresses ba",
            "ba.Streetint, ba.StreetName, ba.PostalCode, ",
            "u.BuildingID = ba.BuildingID "));
        }
        if (!empty($_POST['start_time'])) {
            $start_time = date('Y-m-d h:i', strtotime($_POST['start_time']));
        } else {
            $start_time = "";
        }
        if (!empty($_POST['end_time'])) {
            $end_time = date('Y-m-d h:i', strtotime($_POST['end_time']));
        } else {
            $end_time = "";
        }

        $appointments = $this->model->getAppointmentsByConditions($tables, $start_time, $end_time);
        $this->view('viewappointment/index', [
            "appointments" => $appointments
        ]);
    }
}