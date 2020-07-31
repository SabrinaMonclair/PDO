<?php

require_once 'model/clients.php';
require_once 'model/shows.php';
$clientsObj = new Clients();
$clientsArray = $clientsObj->getSomeClients(5);
$obj = $clientsObj->getAllClientsObj();

$showsObj = new Shows();
$showsArray = $showsObj->getAllShowTypes();
