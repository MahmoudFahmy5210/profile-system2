<?php

$servername='localhost';
$dbusername='root';
$dbpassword='';
$dbname='Profile_System_2';

$connDb=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
if(!$connDb)
{
    die('Connection Field'.mysqli_connect_error());
}

?>