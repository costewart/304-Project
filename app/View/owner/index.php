
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
        <title>Owners</title>
    </head>
    <body>
        <?php $activeTab = 2;
        include('../app/View/header.php');  ?>
        <h1 class="header">Owners Listing</h1>
        <form class="filter-table" action='/Owner/OwnersAll' method="post" style="max-width: 250px;">
            <!-- ACKNOWLEDGEMENT: code snippet for re-populating form values is from
                https://stackoverflow.com/questions/5198304/how-to-keep-form-values-after-post -->
            <div class="filter-label" >Owners who have all unit types of units in the system.</div>
            <div class="filter-option">
                <input type="radio" id="type-house" name="all_unit_types" value="true"
                    <?php if(isset($_POST['all_unit_types']) && $_POST['all_unit_types'] == "true" ) echo "checked='checked'"; ?> >
                <label for="type-house">All Unit Types</label> <br>
                <input type="radio" id="type-apt" name="all_unit_types" value="false"
                    <?php if(isset($_POST['all_unit_types']) && $_POST['all_unit_types'] == "false") echo "checked='checked'"; ?> >
                <label for="type-apt">Not all unit types</label>
            </div>
            <div class="button-wrapper">
                <input type="submit" value="Apply">
            </div>
           </form>
           <?php $owners = $data["owners"]; 
        
            if ($owners) {?>
            <!-- Display all query results as-is -->
            <table class="units-table">
                <thead>
                    <tr>
                    <?php
                    $fields = $owners->fetch_fields();
                    foreach ($fields as $field) {
                        echo "<th>$field->name</th>";
                    }
                    ?>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ( $row = $owners->fetch_row() ){
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
