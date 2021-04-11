<?php
require "./bootstrap.php";

use Src\TableGateways\PersonGateway;

$getway = new PersonGateway($dbConnection);
$result = $getway->findAll();
print_r(json_encode($result));