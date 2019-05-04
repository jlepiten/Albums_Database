<?php
$conn = mysqli_connect("localhost","root","root","performance_schema");
// Check connection
if (!$conn)
{
  echo "Failed to connect to MySQL: ";
  trigger_error(mysql_error(), E_USER_ERROR);
} else {
  echo "Connection established\n";
}

?>
