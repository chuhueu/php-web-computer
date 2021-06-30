
<?php
    //start session
    session_start();
    //connect
    define("SITE_URL",'http://localhost/BTL_MyWeb/');
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME", 'laptop-camera');
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    if(!$connection){
        die("Connection Failed: ".mysqli_connect_error());
    }
    $db_select =  mysqli_select_db($connection, DB_NAME) or die(mysqli_error($connection));
?>