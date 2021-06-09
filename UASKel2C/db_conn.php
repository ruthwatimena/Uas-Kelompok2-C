<?php

$name= "sql208.epizy.com";
$uname= "epiz_28817134";
$password = "Jy0uiLwzxTvmt";
$db_name = "epiz_28817134_signin";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed";
}
