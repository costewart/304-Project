<?php
class StatsController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Stats");
    }

    public function index() {
        $contracts = $this->model->getAllContractDetails();
        $avgPerBuilding = $this->model->getAvgRentPerBuilding();
        $incomePerOwner = $this->model->getAvgIncomePerOwner();
//
        $this->view('stats/index', [
           "contracts" => $contracts,
           "avgPerBuilding" => $avgPerBuilding,
           "incomePerOwner" => $incomePerOwner
        ]);
    }
}