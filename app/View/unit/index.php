
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 0;
        include('../app/View/header.php');  ?>
        <h1>Unit Listing</h1>
        <form class="filter-table" action='/action.php' method="post">
            <div class="filter-option">
                <div class="filter-label">Type</div>
                <input type="checkbox" id="type-apt" name="type-apt" value="Apartment" checked>
                <label for="type-apt">Apartment</label> <br>
                <input type="checkbox" id="type-house" name="type-house" value="House" checked>
                <label for="type-house">House</label>
            </div>
            <div class="filter-option">
                <div class="filter-label">Size (Sq. Feet)</div>
                <input type="number" id="size-min" name="size-min" value="MinSize" placeholder="Min" size=5> <br>
                <input type="number" id="size-max" name="size-max" value="MaxSize" placeholder="Max" size=5>
            </div>
            <div class="filter-option">
                <div class="filter-label">Bedrooms</div>
                <input type="number" id="bed-min" name="bed-min" value="MinBeds" placeholder="Min" size=5> <br>
                <input type="number" id="bed-max" name="bed-max" value="MaxBeds" placeholder="Max" size=5>
            </div>
            <div class="filter-option">
                <div class="filter-label">Bathrooms</div>
                <input type="number" id="bath-min" name="bath-min" value="MinBaths" placeholder="Min" size=5> <br>
                <input type="number" id="bath-max" name="bath-max" value="MaxBaths" placeholder="Max" size=5>
            </div>
            <div class="filter-option">
                <div class="filter-label">Availability</div>
                <input type="radio" id="all" name="availability" value="all" checked>
                <label for="all">Show all</label><br>
                <input type="radio" id="avail" name="availability" value="avail">
                <label for="avail">Available only</label><br>
            </div>
            <div class="button-wrapper">
                <input type="submit" value="Apply">
            </div>
        </form>
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
