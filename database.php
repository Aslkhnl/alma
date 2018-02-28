<?php

    define("DB_SERVER", "localhost");
    define("DB_USER", "ayauly");
    define("DB_PASS", "1q2w3e4R");
    define("DB_NAME", "almau_curriculum.sql");

    function db_connect() {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }
    $sql = "SELECT * FROM course ";
    $sql .= "ORDER BY position ASC";

    function db_disconnect($connection) {
        if(isset($connection)) {
            mysqli_close($connection);
        }
    }

    ?>
