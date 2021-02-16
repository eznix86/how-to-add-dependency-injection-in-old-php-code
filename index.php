<?php

use App\Service;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

require_once 'vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$loader = new XmlFileLoader($containerBuilder, new FileLocator(__DIR__));
$loader->load('services.xml');
$containerBuilder->compile();

$containerBuilder->get(Service::class)->displayStuff();