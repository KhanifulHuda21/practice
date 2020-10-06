<?php

include "connection.php";

$input=$db->exec("insert into data(nama,hobi) values('".$_POST["nama"]."','".$_POST["hobi"]."')");
if ($input) {
    header("Location:index.php");
}


var_dump($_POST);