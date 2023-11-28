<?php
session_start();
ob_start();
if (!isset($_SESSION["mycart"]))  $_SESSION["mycart"]=[];

include "app/views/Client/header.php";
include "app/controllers/ClientController.php";
include "app/views/Client/footer.php";
ob_end_flush();
?>