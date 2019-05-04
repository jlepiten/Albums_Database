<?php


function execute_query($query) {

    $r = mysqli_query($query);

    if (!$r) {
        echo "Cannot execute query: $query" . mysqli_error($conn) . "\n";
    } else {
        echo "Query: $query executed\n";
    }
}

$query = "DROP TABLE IF EXISTS albums";
execute_query($query);

$query = "CREATE TABLE albums (
          id INT(2) PRIMARY KEY,
          title VARCHAR(40),
          artist VARCHAR(30),
          year INT(4) NOT NULL
) ENGINE=InnoDB";
execute_query($query);
//echo ("Error description: " . mysqli_error($con));

$query = "DROP TABLE IF EXISTS artists";
execute_query($query);

$query = "CREATE TABLE artists (
          id INT(2) PRIMARY KEY,
          name VARCHAR(40),
          ethnicity VARCHAR(30),
          age INT(2)
) ENGINE=InnoDB";
execute_query($query);


//mysql_close();

?>
