
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 0;
        include('../app/View/header.php');  ?>
        <h1>Unit Listing</h1>
        <form class="filter-table" action='/Unit/action' method="post">
            <!-- ACKNOWLEDGEMENT: code snippet for re-populating form values is from
                https://stackoverflow.com/questions/5198304/how-to-keep-form-values-after-post -->
            <div class="filter-option">
                <div class="filter-label">Type</div>
                <input type="checkbox" id="type-apt" name="type-apt" value="apartment" 
                        <?php if(isset($_POST['type-apt'])) echo "checked='checked'"; ?> >
                <label for="type-apt">Apartment</label> <br>
                <input type="checkbox" id="type-house" name="type-house" value="house"
                        <?php if(isset($_POST['type-house'])) echo "checked='checked'"; ?> >
                <label for="type-house">House</label>
            </div>
            <div class="filter-option">
                <div class="filter-label">Size (Sq. Feet)</div>
                <input type="number" id="size-min" name="size[]" placeholder="Min" size=5
                    value="<?php echo isset($_POST['size']) ? $_POST['size'][0] : ''; ?>"> <br>
                <input type="number" id="size-max" name="size[]" placeholder="Max" size=5
                    value="<?php echo isset($_POST['size']) ? $_POST['size'][1] : ''; ?>">
            </div>
            <div class="filter-option">
                <div class="filter-label">Bedrooms</div>
                <input type="number" id="bed-min" name="bed[]" placeholder="Min" size=5
                value="<?php echo isset($_POST['bed']) ? $_POST['bed'][0] : ''; ?>"> <br>
                <input type="number" id="bed-max" name="bed[]" placeholder="Max" size=5
                value="<?php echo isset($_POST['bed']) ? $_POST['bed'][1] : ''; ?>">
            </div>
            <div class="filter-option">
                <div class="filter-label">Bathrooms</div>
                <input type="number" id="bath-min" name="bath[]" placeholder="Min" size=5
                value="<?php echo isset($_POST['bath']) ? $_POST['bath'][0] : ''; ?>"> <br>
                <input type="number" id="bath-max" name="bath[]" placeholder="Max" size=5
                value="<?php echo isset($_POST['bath']) ? $_POST['bath'][1] : ''; ?>">
            </div>
            <div class="filter-option">
                <div class="filter-label">Availability</div>
                <input type="radio" id="all" name="availability" value="all"
                <?php if(!isset($_POST['availability']) || $_POST['availability'] == 'all') {
                    echo "checked='checked'";
                }?> >
                <label for="all">Show all</label><br>
                <input type="radio" id="avail" name="availability" value="avail"
                <?php if(isset($_POST['availability']) && $_POST['availability'] == 'avail') {
                    echo "checked='checked'";
                }?>>
                <label for="avail">Available only</label><br>
            </div>
            <div class="button-wrapper">
                <input type="submit" value="Apply">
            </div>
        </form>
        <table class="units-table">
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
