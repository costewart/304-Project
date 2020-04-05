<?php
class AvailableUnitsController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Contract");
    }

    public function index() {
        $this->view('availableUnits/index', [
            "contracts" => NULL
        ]);
    }

    public function countAvailableUnits() {        
        $contracts = $this->model->countAvailableUnits();
        $this->view('availableUnits/index', [
           "contracts" => $contracts
        ]);
    }
}