<?php
$testConnection = mysqli_connect('localhost:3306', 'wordpress', 'wordpress', 'wordpress');
if (!$testConnection) {
die('Error: ' . mysql_error());
}
echo 'Database connection working!';
mysql_close($testConnection);

//phpinfo();

?>
