
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
        <title>Contracts</title>
    </head>
    <body>
        <?php $activeTab = 4;
        include('../app/View/header.php');  ?>
        <h2 class="header">All Contracts:</h2>
        <h4>Choose what information you'd like to see...</h4>
        <form class="filter-table" action='/Contract/contractProjection' method="post">
            <div class="filter-option">
                <div class="filter-label">Show Columns:</div>
            </div>
            <?php
            $colOptions = array("OwnerName", "TenantName", "StartDate", "EndDate", "StreetNumber", "StreetName",
                "PostalCode", "City", "UnitNumber", "UnitType", "RentPrice");
            foreach($colOptions as $col) { ?>
                <input type="checkbox" id="<?php echo $col ?>" name="<?php echo $col ?>" value="1" 
                        <?php if(isset($_POST[$col])) echo "checked='checked'"; ?> >
                <label for="<?php echo $col ?>"><?php echo $col ?></label><br>
            <?php } ?>
            <div class="button-wrapper">
                <input type="submit" value="Get Info">
            </div>
        </form>

        <?php $contracts = $data["contracts"]; 
        
        if ($contracts) {?>
        <!-- Display all query results as-is -->
        <table class="units-table">
            <thead>
                <tr>
                <?php
                $fields = $contracts->fetch_fields();
                foreach ($fields as $field) {
                    echo "<th>$field->name</th>";
                }
                ?>
                </tr>
            </thead>
            <tbody>
            <?php
            while ( $row = $contracts->fetch_row() ){
                foreach($row as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            } ?>
            </tbody>
        </table>
        <?php
        }
        else {
            
        } ?>
    </body>
</html>
