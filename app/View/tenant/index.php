
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
         <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <title>Tenants</title>
    </head>
    <body>
        <?php $activeTab = 1;
        include('../app/View/header.php');  ?>

        <h1 class="header">Tenants</h1>
        <h2> Add a new tenant </h2>

        <form class="filter-table" name="form" method="post" action="/Tenant/insert"> 
            <div class="input-group">
                <label> Name </label>
                <input type="text" name="pname" placeholder="Enter Name" required />
            </div>
            <div class="input-group">
                <label> Phone Number </label>
                <input type="text" name="phonenum" placeholder="Enter Phone Number" required />
            </div>
            <div class="input-group">
                <button class="btn-char" name="submit" type="submit">Add Tenant</button>
            </div>
        </form>
        
        <table class="insert-table">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($data) || is_object($data)) {
                foreach ($data["tenants"] as $key => $tenant) {
                    echo "<tr><form method='post' >";
                    echo "<td><div class='input-group'><input type=text name='pname' value='".$tenant["Name"]."'</div></td>";
                    echo "<td><div class='input-group'><input type=text name='phonenum' value='".$tenant['PhoneNum']."'</div></td>";
                    echo "<input type=hidden name=tid value='".$tenant['TenantID']."'>";
                    echo "<td><div class='input-group'><button formaction='/Tenant/update' class='btn-char' name='update' type=submit ;''>Update</button></div></td>";
                    echo "</form></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
