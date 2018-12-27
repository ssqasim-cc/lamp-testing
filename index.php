<?php  
$username= getenv('USERNAME');  
$password= getenv('PASSWORD');  
$hostname = getenv('HOST');  
//connection string with database  
$dbhandle = mysqli_connect($hostname, $username, $password)  
or die("Unable to connect to MySQL");  
echo "";  
// connect with database  
if ($dbhandle->connect_error) {
    die("Connection failed: " . $dbhandle->connect_error);
  }
   echo "Connected successfully";
  ?>
