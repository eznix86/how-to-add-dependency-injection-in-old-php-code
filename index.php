<?php

use App\Service;

require_once 'vendor/autoload.php';


$container = new \Config\Container();
$container->get(Service::class)->displayStuff();