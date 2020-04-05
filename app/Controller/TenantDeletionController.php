<?php
class TenantDeletionController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Tenant");
    }

    public function index() {
        $tenants = $this->model->getAllTenants();
        $this->view('tenantDeletion/index', [
            "tenants" => $tenants
        ]);
    }

    public function deleteTenant() {        
        $field = $_POST["field"];
        $val = $_POST["val"];
        $tenants = $this->model->deleteTenant($field, $val);
        $this->view('tenantDeletion/index', [
           "tenants" => $tenants
        ]);
    }
}