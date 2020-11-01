<?php
    ini_set('display_errors', 1);

    $host = "db";
    $user = "root";
    $password = "3151936f";
    $db = "test_tb";


    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $link = mysqli_connect($host, $user, $password, $db);
        mysqli_set_charset($link, 'utf8');

    } catch (mysqli_sql_exception $e) {
        echo "MySQLi Error : Code " . $e->getCode() . " ,Expectation Msg : " . $e->getMessage() . "<br>";
        exit();
    };
?>