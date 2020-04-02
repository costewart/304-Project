
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 4;
        include('../app/View/header.php');  ?>
        <h2>All Contracts:</h2>
        <table class="units-table">
            <thead>
                <tr>
                    <th>Address</th>
                    <th>City</th>
                    <th>Unit Number</th>
                    <th>Unit Type</th>
                    <th>Owner</th>
                    <th>Lease Start</th>
                    <th>Lease End</th>
                    <th>Monthly Rent</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["contracts"] as $key => $contract):?>
                <tr>
                    <td><?= $contract["Streetint"] ?> <?= $contract["StreetName"] ?></td>
                    <td><?= $contract["City"] ?></td>
                    <td><?= $contract["UnitNum"] ?></td>
                    <td><?= $contract["UnitType"] ?></td>
                    <td><?= $contract["OwnerName"] ?></td>
                    <td><?= $contract["StartDate"] ?></td>
                    <td><?= $contract["EndDate"] ?></td>
                    <td><?= $contract["RentPrice"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <br>
        <h2>Average Rent Per Building:</h2>
        <table class="units-table">
            <thead>
                <tr>
                    <th>Address</th>
                    <th>City</th>
                    <th>Average Rent</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["avgPerBuilding"] as $key => $contract):?>
                <tr>
                    <td><?= $contract["Streetint"] ?> <?= $contract["StreetName"] ?></td>
                    <td><?= $contract["City"] ?></td>
                    <td><?= $contract["AvgRent"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <br>
        <h2>Average Monthly Income Per Building For Each Owner:</h2>
        <table class="units-table">
            <thead>
                <tr>
                    <th>Owner ID</th>
                    <th>Owner Name</th>
                    <th>Average Income Per Building</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["incomePerOwner"] as $key => $contract):?>
                <tr>
                    <td><?= $contract["OwnerID"] ?></td>
                    <td><?= $contract["Name"] ?></td>
                    <td><?= $contract["AvgIncome"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>
