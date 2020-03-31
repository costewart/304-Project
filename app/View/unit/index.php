<?php
    include_once '../app/Model/Connection.php';
    include_once '../app/Model/Unit.php';
?>

<html>
    <head>
        <script type="text/javascript" src="/js/units.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php
            $users = new Unit();
            $bath = 3400;
            $users->showAllUnits();
        ?>
        <form action="index.php" method="post">
            <input type="text" name="search" placeholder="Search for units..."/>
            <input type="submit" value=">>" />
        </form>

    </body>
</html>
        
        <!-- <h1>Unit Listing</h1>
        <h2> All Units: </h2>

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
</html> -->
