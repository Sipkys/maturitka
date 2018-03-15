<?php
    include_once 'header.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "maturita-1");

    $connection = @mysqli_connect(
      DB_SERVER,
      DB_USER,
      DB_PASSWORD,
      DB_NAME
    );
    mysqli_set_charset($connection, "utf8");
    if (!$connection) {
        echo "nastala chyba připojení: ";
        echo mysqli_connect_error();
    }
    include_once 'footer.php';
