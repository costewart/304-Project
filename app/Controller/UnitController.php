  
<?php
class UnitController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Unit");
    }

    public function index() {
        $units = $this->model->getAllUnits();
//
        $this->view('unit/index', [
           "units" => $units
        ]);
    }

    public function action() {
        $apt = isset($_POST['type-apt']) ? $_POST['type-apt'] : "";
        $house = isset($_POST['type-house']) ? $_POST['type-house'] : "";
        $units = $this->model->filterUnits($apt, $house, $_POST["size"],
                                            $_POST["bed"], $_POST["bath"], $_POST["availability"]);
        $this->view('unit/index', [
            "units" => $units
         ]);
    }
}