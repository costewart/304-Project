
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
    </head>
    <body>
        <?php $activeTab = 1;
        include('../app/View/header.php');  ?>
        <h1>Tenants</h1>
        <table>
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Phone Number</th>
                    <th>Tenant ID</th>
                </tr>
            </thead>
            <tbody>
           
                <?php
                if (is_array($data) || is_object($data)) {
                foreach ($data["tenants"] as $key => $tenant) {
                    echo "<tr><form method='post' action='update.php'>";
                    echo "<td><input type=text name='pname' value='".$tenant["Name"]."'</td>";
                    echo "<td><input type=text name='phonenum' value='".$tenant['PhoneNum']."'</td>";
                    echo "<td><input type=text name='id' value='".$tenant['TenantID']."'</td>";
                   // echo "<input type=hidden name=tid value='".$tenant['TenantID']."'>";
                    echo "<td><input type=submit>";
                    echo "</form></tr>";
                }
            }
                ?>

            </tbody>
        </table>

        <div class="form">
<div>
<h1>Insert New Tenant</h1>
<form name="form" method="post" action="/Tenant/action"> 
<label> Tenant ID </label>

<input type="text" name="id" placeholder="Enter ID" required />

<label> Name </label>

<input type="text" name="pname" placeholder="Enter Name" required />
<label> Phone Number </label>
<input type="text" name="phonenum" placeholder="Enter Phone Number" required />
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"></p>

</div>
</div>
    </body>
</html>
