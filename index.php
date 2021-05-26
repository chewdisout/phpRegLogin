<?php


include "routes/Route.php";

$uri = $_SERVER['REQUEST_URI'];
$pageUri = new Route($uri);
$pageUri -> loadPage();
