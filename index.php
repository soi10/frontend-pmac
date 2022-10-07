<?php
session_start();
session_destroy();
$StringExplo = explode("/", $_SERVER['REQUEST_URI']);
$HeadTo = $StringExplo[0] . "./views/dashboardguest.php";
Header("Location: " . $HeadTo);