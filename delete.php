<?php
include "data.php";
$index = $_POST["id"];
deleteLists($index);
header("location:index.php");