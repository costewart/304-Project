<html>
    <head>

    </head>
    <body>
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
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </body>
</html>
