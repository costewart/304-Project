<?php
class ContractController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = $this->model("Contract");
    }

    public function index() {
        $this->view('contract/index', [
            "contracts" => NULL
        ]);
    }

    public function contractProjection() {        
        $ownerName = isset($_POST['OwnerName']) ? "o.Name AS OwnerName" : "";
        $tenantName = isset($_POST['TenantName']) ? "t.Name AS TenantName" : "";
        $startDate = isset($_POST['StartDate']) ? "c.StartDate" : "";
        $endDate = isset($_POST['EndDate']) ? "cd.EndDate" : "";
        $streetNumber = isset($_POST['StreetNumber']) ? "ba.Streetint AS StreetNumber" : "";
        $streetName = isset($_POST['StreetName']) ? "ba.StreetName" : "";
        $postalCode = isset($_POST['PostalCode']) ? "ba.PostalCode" : "";
        $city = isset($_POST['City']) ? "pc.City" : "";
        $unitNumber = isset($_POST['UnitNumber']) ? "u.UnitNum AS UnitNumber" : "";
        $unitType = isset($_POST['UnitType']) ? "u.UnitType" : "";
        $rentPrice = isset($_POST['RentPrice']) ? "c.RentPrice" : "";
        $projectionArgs = array(
            $ownerName,
            $tenantName,
            $startDate,
            $endDate,
            $streetNumber,
            $streetName,
            $postalCode,
            $city,
            $unitNumber,
            $unitType,
            $rentPrice);

        $contracts = $this->model->contractProjection($projectionArgs);
        $this->view('contract/index', [
           "contracts" => $contracts
        ]);
    }
}