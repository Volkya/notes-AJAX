<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    'password',
    'notes-AJAX'
);

if ($connection) {
    echo "Database is connected";
}

?>