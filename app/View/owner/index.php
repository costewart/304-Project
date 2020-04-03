
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 3;
        include('../app/View/header.php');  ?>
        <h1>Owners Listing</h1>
        <table>
            <thead>
                <tr>
                    <th>Owner Name </th>
                    <th>Phone Number</th>
                    <th>Owner ID</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["owners"] as $key => $owner):?>
                <tr>
                    <td><?= $owner["Name"] ?></td>
                    <td><?= $owner["PhoneNum"] ?></td>
                    <td><?= $owner["OwnerID"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </body>
</html>
