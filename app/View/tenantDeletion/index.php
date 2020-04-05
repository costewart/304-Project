
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen"/>
        <title>Delete a Tenant</title>
    </head>
    <body>
        <?php $activeTab = 7;
        include('../app/View/header.php');  ?>
        <h4>Delete a tenant (and any associated contracts / viewing appointments):</h4>
        <form class="filter-table" action='/TenantDeletion/deleteTenant' method="post">
            <label for="field">Delete Tenants with</label>
            <select id="field" name="field">
                <option value="TenantID">Tenant ID</option>
                <option value="Name">Tenant Name</option>
                <option value="PhoneNum">Phone Number</option>
            </select> <br><br>
            <label for="val">Equal To:</label>
            <input type="text" name="val" placeholder="" required />
            <div class="button-wrapper">
                <input type="submit" value="Delete Tenant">
            </div>
        </form>

        <?php $tenants = $data["tenants"]; 
        
        if ($tenants) {?>
        <!-- Display all query results as-is -->
        <table class="tenants-table">
            <thead>
                <tr>
                <?php
                $fields = $tenants->fetch_fields();
                foreach ($fields as $field) {
                    echo "<th>$field->name</th>";
                }
                ?>
                </tr>
            </thead>
            <tbody>
            <?php
            while ( $row = $tenants->fetch_row() ){
                foreach($row as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }} ?>
            </tbody>
        </table>
    </body>
</html>
