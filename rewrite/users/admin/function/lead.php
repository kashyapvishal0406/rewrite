<?php

// Database configuration
$hostname = 'localhost'; // MySQL server hostname (usually 'localhost')
$username = 'techtions_Mysql_User'; // MySQL username
$password = 'YqpKWTzZR(447r]i'; // MySQL password
$database = 'finance_management_system'; // MySQL database name

// Create a new MySQLi connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>

<?php
if(isset($_POST['lead_done']))
{
    $lead_id = $_POST['lead_id'];
    $sql = "DELETE FROM leads WHERE id = $lead_id";
    if(mysqli_query($conn,$sql))
    {
        echo 1;
    }
}
?>
