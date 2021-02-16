<?php


namespace Config;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class Container
{

    private $containerBuilder;

    public function __construct()
    {
        $this->containerBuilder = new ContainerBuilder();
        $loader = new XmlFileLoader($this->containerBuilder, new FileLocator(__DIR__));
        $loader->load('services.xml');
        $this->containerBuilder->compile();
    }

    /**
     * @param string $id                         The service identifier
     * @return object|null                       The associated service
     * @throws InvalidArgumentException          when no definitions are available
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     * @throws \Exception
     */
    public function get($id)
    {
        return $this->containerBuilder->get($id);
    }

}