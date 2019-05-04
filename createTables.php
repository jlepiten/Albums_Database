<?php

require('db.php');

function execute_query($query) {

    $r = mysqli_query($query);

    if (!$r) {
        echo "Cannot execute query: $query" . mysqli_error($conn) . "\n";
    } else {
        echo "Query: $query executed\n";
    }
}

$query = sprintf("CREATE TABLE albums (
          id INT(2) PRIMARY KEY,
          title VARCHAR(40) NOT NULL,
          artist VARCHAR(30) NOT NULL,
          year INT(4) NOT NULL
)ENGINE=InnoDB");
execute_query($query);
//echo ("Error description: " . mysqli_error($con));

// $query = "CREATE TABLE Albums(id INT PRIMARY KEY, title TEXT,
//     artist TEXT, year INT) ENGINE=InnoDB";
// execute_query($query);
//
// $query = "DROP TABLE IF EXISTS Artists";
// execute_query($query);
//
// $query = "CREATE TABLE Artists(id INT PRIMARY KEY, name TEXT,
//      ethnicity TEXT, age INT) ENGINE=InnoDB";
// execute_query($query);

//mysql_close();

?>
