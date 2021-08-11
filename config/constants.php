<?php 

    session_start();


    define('SITEURL', 'http://localhost:8012/jewerly-order/');
    define('LOCALHOST', 'localhost:8012');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'jewelry-order');

    $conn = new mysqli(LOCALHOST, DB_USERNAME, DB_PASSWORD);

if($conn->connect_error)
{
    die("Connection failed:". $conn->connect_error);
}
    var_dump($conn);die;
    $db_select=mysqli_select_db($conn, DB_NAME) or  die("no database");
