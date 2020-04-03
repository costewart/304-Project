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

}