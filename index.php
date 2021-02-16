<?php

use App\Service;

require_once 'vendor/autoload.php';

\Config\Container::get(Service::class)->displayStuff();
