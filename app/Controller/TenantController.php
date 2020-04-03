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

        $id = $_POST["id"];
        $pname = $_POST["pname"];
        $phonenum = $_POST["phonenum"];
        $tenants = $this->model->insertTenant($id, $pname, $phonenum);
        $this->view('tenant/index', [
            "tenants" => $tenants
         ]);
    }

    public function actionTwo() {
        $tenants = $this->model->updateTenant();
        $this->view('tenant/index', [
            "tenants" => $tenants
         ]);
    }

    public function actionThree() {
        $tenants = $this->model->deleteTenant();
        $this->view('tenant/index', [
            "tenants" => $tenants
         ]);
    }

    public function chooseButton() {
    
         if($_POST['update']) {
            $tenants = $this->model->updateTenant();
          } else {
          if($_POST['delete']) {
            $tenants = $this->model->deleteTenant();
          }
        }

          $this->view('tenant/index', [
            "tenants" => $tenants
         ]);
    }
}