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
        if(isset($_POST['unit_type'])){
            $owners = $this->model->getOwnersWithUnitType($_POST['unit_type']);
            $this->view('owner/index',["owners" => $owners]);
        } else{
            $owners = $this->model->getAllOwners();
            $this->view('owner/index',["owners" => $owners]);
        }
    }

}