
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 3;
        include('../app/View/header.php');  ?>
        <h1>Viewing Appointment Information</h1>
        <form class="filter-table" action='/ViewingAppointment/action' method="post">
            <!-- ACKNOWLEDGEMENT: code snippet for re-populating form values is from
                https://stackoverflow.com/questions/5198304/how-to-keep-form-values-after-post -->
            <div class="filter-option">
                <div class="filter-label">Show Columns:</div>
                <?php
                $colOptions = array("PropertyManagers", "Tenants", "UnitAddress");
                foreach($colOptions as $col) { ?>
                    <input type="checkbox" id="<?php echo $col ?>" name="<?php echo $col ?>" value="1" 
                            <?php if(isset($_POST[$col])) echo "checked='checked'"; ?> >
                    <label for="<?php echo $col ?>"><?php echo $col ?></label><br>
                <?php } ?>
            </div>
            <div class="filter-option">
                <div class="filter-label">Start Time</div>
                <input type="datetime-local" id="time-slot-start-time" name="start_time" placeholder="start time, 24:00, every half hour" size=40
                       value="<?php echo isset($_POST['start_time']) ? $_POST['start_time'] : ''; ?>">
                <br>
            </div>
            <div class="filter-option">
                <div class="filter-label">End Time</div>
                <input type="datetime-local" id="time-slot-end-time" name="end_time" placeholder="end time, 24:00, every half hour" size=40
                       value="<?php echo isset($_POST['end_time']) ? $_POST['end_time'] : ''; ?>">
            </div>
            <div class="button-wrapper">
                <input type="submit" value="Apply">
            </div>
        </form>
        <?php $appts = $data["appointments"]; 
        
        if ($appts) {?>
        <!-- Display all query results as-is -->
        <table class="units-table">
            <thead>
                <tr>
                <?php
                $fields = $appts->fetch_fields();
                foreach ($fields as $field) {
                    echo "<th>$field->name</th>";
                }
                ?>
                </tr>
            </thead>
            <tbody>
            <?php
            while ( $row = $appts->fetch_row() ){
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
