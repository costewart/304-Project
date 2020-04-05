<?php
class CityStatsController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Contract");
    }

    public function index() {
        $this->view('cityStats/index', [
            "contracts" => NULL
        ]);
    }

    public function avgRentPerCity() {        
        $contracts = $this->model->avgRentPerCity();
        $this->view('cityStats/index', [
           "contracts" => $contracts
        ]);
    }
}