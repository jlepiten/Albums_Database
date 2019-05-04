<?php

function connect() {

  $conn = mysqli_connect("localhost","root","root","performance_schema");
  // Check connection
  if (!$conn)
  {
    echo  "Failed to connect to MySQL: \n";
    echo  "I used connected to localhost in db.php (using MAMP) so my code may not work on codd server.\n";
    echo  "Here is the github link to my code: https://github.com/jlepiten/Albums_Database         \n";
    trigger_error(mysql_error(), E_USER_ERROR);
  } else {
    echo "Connection established\n";
  }

  return $conn;
}

function disconnect() {
  mysql_close();
}

?>
