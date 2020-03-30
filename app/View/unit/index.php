
<html>
    <head>
        <script type="text/javascript" src="/js/units.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 0;
        include('../app/View/header.php');  ?>
        <input type="text" id= "mySearch" onkeyup="searchAddress()" placeholder="Search for units...">
        <h1>Unit Listing</h1>
        <table id="unitTable">
            <thead>
                <tr>
                    <th style="width:30%;">Address</th>
                    <th style="width:15%;">Postal Code</th>
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
