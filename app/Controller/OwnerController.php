<?php

class OwnerController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Owner");
    }

    public function index() {
        $owners = $this->model->getAllOwners();
        $this->view('owner/index', [
            "owners" =>$owners
        ]);
    }

    public function OwnersAll(){
        if(isset($_POST['all_unit_types'])){
            $owners = $this->model->getOwnersByUnitTypes($_POST['all_unit_types']);
            $this->view('owner/index',["owners" => $owners]);
        } else{
            $owners = $this->model->getAllOwners();
            $this->view('owner/index',["owners" => $owners]);
        }
    }

}