
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 3;
        include('../app/View/header.php');  ?>
        <h1>Viewing Appointments Listing</h1>
        <table>
            <thead>
                <tr>
                    <th>Appt ID</th>
                    <th>Time</th>
                    <th>Unit ID</th>
                    <th>Property Manager</th>
                    <th>Tenant</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["appointments"] as $key => $appointment):?>
                <tr>
                    <td><?= $appointment["ApptID"] ?></td>
                    <td><?= $appointment["Time"] ?></td>
                    <td><?= $appointment["UnitID"] ?></td>
                    <td><?= $appointment["PropertyManagerID"] ?></td>
                    <td><?= $appointment["TenantID"] ?></td>
                    <td> <button onclick="deleteAppointment()">Delete</button>

                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </body>
</html>
