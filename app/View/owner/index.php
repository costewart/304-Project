
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 2;
        include('../app/View/header.php');  ?>
        <h1>Owners Listing</h1>
        <form class="filter-table" action='/Owner/OwnersAll' method="post">
            <!-- ACKNOWLEDGEMENT: code snippet for re-populating form values is from
                https://stackoverflow.com/questions/5198304/how-to-keep-form-values-after-post -->
            <div class="filter-label" >Owners who have all unit type of house or apartment</div>
            <div class="filter-option">
                <input type="radio" id="type-house" name="unit_type" value="house"
                    <?php if(isset($_POST['unit_type']) && $_POST['unit_type'] == 'house' ) echo "checked='checked'"; ?> >
                <label for="type-house">House</label> <br>
                <input type="radio" id="type-apt" name="unit_type" value="apartment"
                    <?php if(isset($_POST['unit_type']) && $_POST['unit_type'] == 'apartment') echo "checked='checked'"; ?> >
                <label for="type-apt">Apartment</label>
            </div>
            <div class="button-wrapper">
                <input type="submit" value="Apply">
            </div>
           </form>
        <table class ="units-table">
            <thead>
                <tr>
                    <th>Owner ID</th>
                    <th>Phone Number</th>
                    <th>Owner Name </th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data["owners"] as $key => $owner):?>
                <tr>
                    <td><?= $owner["OwnerID"] ?></td>
                    <td><?= $owner["PhoneNum"] ?></td>
                    <td><?= $owner["Name"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </body>
</html>
