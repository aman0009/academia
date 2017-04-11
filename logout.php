<?php
session_start();
session_unset($_SESSION["sid"]);
header("location:academia.php");

?>

