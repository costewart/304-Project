<?php
class UnitController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Unit");
    }

    public function index() {
        $units = $this->model->getAllUnitsWithAddresses();
//
        $this->view('unit/index', [
           "units" => $units
        ]);
    }


   
}