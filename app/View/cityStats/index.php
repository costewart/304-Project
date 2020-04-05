
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 6;
        include('../app/View/header.php');  ?>
        <h4>Find the average rent in each city:</h4>
        <form class="filter-table" action='/CityStats/avgRentPerCity' method="post">
            <div class="button-wrapper">
                <input type="submit" value="Get Average Rents">
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
            }} ?>
            </tbody>
        </table>
    </body>
</html>
