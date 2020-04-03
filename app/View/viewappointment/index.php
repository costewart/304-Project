
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 3;
        include('../app/View/header.php');  ?>
        <h1>Viewing Appointments Listing</h1>
        <form class="filter-table" action='/ViewingAppointment/action' method="post">
            <!-- ACKNOWLEDGEMENT: code snippet for re-populating form values is from
                https://stackoverflow.com/questions/5198304/how-to-keep-form-values-after-post -->
            <div class="filter-label">
                <div class="text-label"> Property Manager</div>
                <input type="name " id="property-manager-name" name="property_manager_name" placeholder= "The name of property manager" size= 40
                       value="<?php echo isset($_POST['property_manager_name']) ? $_POST['property_manager_name'] : ''; ?>"> <br>
            </div>
            <div class="filter-label">
                <div class="time-label">Start Time</div>
                <input type="datetime-local" id="time-slot-start-time" name="start_time" placeholder="start time, 24:00, every half hour" size=40
                       value="<?php echo isset($_POST['start_time']) ? $_POST['start_time'] : ''; ?>">
                <br>
                <div class="time-label">End Time</div>
                <input type="datetime-local" id="time-slot-end-time" name="end_time" placeholder="end time, 24:00, every half hour" size=40
                       value="<?php echo isset($_POST['end_time']) ? $_POST['end_time'] : ''; ?>">
            </div>
            <div class="button-wrapper">
                <input type="submit" value="Apply">
            </div>
        </form>
        <table class="units-table">
            <thead>
                <tr>
                    <th>Property Manager </th>
                    <th>Time</th>
                    <th>Unit ID</th>
                    <th>Street Name</th>
                    <th>Street Number</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["appointments"] as $key => $appointment):?>
                <tr>
                    <td><?= $appointment["Name"] ?></td>
                    <td><?= $appointment["Time"] ?></td>
                    <td><?= $appointment["UnitID"] ?></td>
                    <td><?= $appointment["StreetName"] ?></td>
                    <td><?= $appointment["Streetint"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </body>
</html>
