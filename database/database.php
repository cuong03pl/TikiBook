<!-- Connect to the Database -->
<?php
$host = 'localhost';      // Database host (usually 'localhost')
$db_username = 'root';    // Database username
$db_password = '';        // Database password
$database = 'cuong';      // Database name

// Create a connection to the MySQL database

$con =  mysqli_connect($host, $db_username, $db_password, $database);

?>