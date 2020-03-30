
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 0;
        include('../app/View/header.php');  ?>
        <h1>Unit Listing</h1>
        <table>
            <thead>
                <tr>
                    <th>Address</th>
                    <th>Postal Code</th>
                    <th>Unit Type</th>
                    <th>Square Feet</th>
                    <th>Floor Number</th>
                    <th>Unit Number</th>
                    <th>Bedrooms</th>
                    <th>Bathrooms</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["units"] as $key => $unit):?>
                <tr>
                    <td><?= $unit["Streetint"] ?> <?= $unit["StreetName"] ?></td>
                    <td><?= $unit["PostalCode"] ?></td>
                    <td><?= $unit["UnitType"] ?></td>
                    <td><?= $unit["UnitSize"] ?></td>
                    <td><?= $unit["FloorNum"] ?></td>
                    <td><?= $unit["UnitNum"] ?></td>
                    <td><?= $unit["Bedrooms"] ?></td>
                    <td><?= $unit["Bathrooms"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </body>
</html>
