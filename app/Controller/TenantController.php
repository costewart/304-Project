<?php
class TenantController extends Controller
{

    protected $model;

    public function __construct() {
        $this->model = $this->model("Tenant");
    }

    public function index() {
        $tenants = $this->model->getAllTenants();
//
        $this->view('tenant/index', [
           "tenants" => $tenants
        ]);
    }

    public function action() {
        $tenants = $this->model->insertTenant($table_name, $data);
        $this->view('tenant/index', [
            "tenants" => $tenants
         ]);
    }
}