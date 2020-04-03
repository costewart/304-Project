<?php
class ViewingAppointmentController extends Controller
{

    protected $model;

    public function __construct() {
        $this->model = $this->model("ViewingAppointment");
    }

    public function index() {
        $appointments = $this->model->getAllAppointments();
//
        $this->view('viewappointment/index', [
           "appointments" => $appointments
        ]);
    }

    public function action() {
        $name = isset($_POST['property_manager_name']) ? $_POST['property_manager_name'] : "";
        if (isset($_POST['start_time'])) {
            $start_time = date('d-m-Y h:i', strtotime($_POST['start_time']));
        } else {
            $start_time = "";
        }
        if (isset($_POST['end_time'])) {
            $end_time = date('d-m-Y h:i', strtotime($_POST['end_time']));
        } else {
            $end_time = "";
        }

        $appointments = $this->model->getAppointmentsByConditions($name, $start_time, $end_time);
        $this->view('viewappointment/index', [
            "appointments" => $appointments
        ]);
    }
}