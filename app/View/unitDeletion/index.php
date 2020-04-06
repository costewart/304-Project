
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
        <title>Delete Units</title>
    </head>
    <body>
        <?php $activeTab = 8;
        include('../app/View/header.php');  ?>
        <h4>Delete units (and any associated contracts / viewing appointments):</h4>
        <form class="filter-table" action='/UnitDeletion/deleteUnits' method="post">
            <label for="field">Delete Units with</label>
            <select id="field" name="field">
                <option value="UnitID">Unit ID</option>
                <option value="BuildingID">Building ID</option>
                <option value="OwnerID">Owner ID</option>
                <option value="UnitType">Unit Type</option>
            </select> <br><br>
            <label for="val">Equal To:</label>
            <input type="text" name="val" placeholder="" required />
            <div class="button-wrapper">
                <input type="submit" value="Delete Units">
            </div>
        </form>

        <?php $units = $data["units"]; 
        
        if ($units) {?>
        <!-- Display all query results as-is -->
        <table class="units-table">
            <thead>
                <tr>
                <?php
                $fields = $units->fetch_fields();
                foreach ($fields as $field) {
                    echo "<th>$field->name</th>";
                }
                ?>
                </tr>
            </thead>
            <tbody>
            <?php
            while ( $row = $units->fetch_row() ){
                foreach($row as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }} ?>
            </tbody>
        </table>
    </body>
</html>
