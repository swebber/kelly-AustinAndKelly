<?php

require_once('connection.php');

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once('views/layout.php');

?>
