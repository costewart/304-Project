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
}