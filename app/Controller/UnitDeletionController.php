<?php
class UnitDeletionController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Unit");
    }

    public function index() {
        $units = $this->model->getAllUnits();
        $this->view('unitDeletion/index', [
            "units" => $units
        ]);
    }

    public function deleteUnits() {    
        $field = $_POST["field"];
        $val = $_POST["val"];
        $units = $this->model->deleteUnits($field, $val);
        $this->view('unitDeletion/index', [
           "units" => $units
        ]);
    }
}