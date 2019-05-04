<?php
function execute_query($query) {
    $r = mysqli_query($query);

    if (!$r) {
        echo "Cannot execute query: $query\n";
    } else {
        echo "Query: $query executed\n";
    }
}
?>
