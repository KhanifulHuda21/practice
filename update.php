<?php

include "connection.php";

$update=$db->exec("update data set nama='".$_POST["nama"]."',hobi='".$_POST["hobi"]."'where id=".$_POST["id"]);

if ($update) {
    header("Location:index.php");
}