
<?php
// Connect with MYSQL

$dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "root";
        $db = "houseHelper";
        $conn = new mysqli($dbhost, $dbuser,
        $dbpass, $db) or die("Connect failed: %s\n" .
        $conn->error);

$name = mysqli_real_escape_string($conn, $_REQUEST['pname']);
// UPDATE
$sql = "UPDATE Tenants SET Tenants.Name='$name', PhoneNum='$_REQUEST[phonenum]' WHERE TenantID='$_REQUEST[tid]'";

// Excecut query
if (mysqli_query($conn, $sql))
    header("refresh:1; url=index.php");
else
    echo "not updated";


?>