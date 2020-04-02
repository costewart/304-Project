
<html>
    <head>
        <script type="text/javascript" src="/js/appointment.js"></script>
         <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <?php $activeTab = 1;
        include('../app/View/header.php');  ?>

<h1>Insert New Tenant</h1>
<form class="form-char" name="form" method="post" action="/Tenant/action"> 

<div class="input-group">
<label> Tenant ID </label>
<input type="text" name="id" placeholder="Enter ID" required />
</div>

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
        <h1>Tenants</h1>
        <table class="tenant-table">
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
                    echo "<tr><form method='post' action='/Tenant/actionTwo'>";
     
                    echo "<td><div class='input-group'><input type=text name='pname' value='".$tenant["Name"]."'</div></td>";
                    echo "<td><div class='input-group'><input type=text name='phonenum' value='".$tenant['PhoneNum']."'</div></td>";
                    echo "<td><div class='input-group'><input type=text name='id' value='".$tenant['TenantID']."'</div></td>";
                   // echo "<input type=hidden name=tid value='".$tenant['TenantID']."'>";
                 
                    echo "<td><div class='input-group'><button class='btn-char' name='submit' type=submit>Update</button></div></td>";
                    echo "</form></tr>";
                }
            }
                ?>

            </tbody>
        </table>

    

    </body>
</html>
