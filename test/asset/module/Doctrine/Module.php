<?php

namespace ApiSkeletonsTest\OAuth2\Doctrine\Identity;

use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Laminas\ApiTools\OAuth2\Doctrine\EventListener\DynamicMappingSubscriber;
use Laminas\EventManager\EventManager;
use Laminas\ModuleManager\ModuleManager;
use Laminas\Mvc\MvcEvent;
use Laminas\ServiceManager\ServiceManager;

class Module
{
    /**
     * Retrieve autoloader configuration
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return ['Laminas\Loader\StandardAutoloader' => ['namespaces' => [
            __NAMESPACE__ => __DIR__ . '/src/',
        ]
        ]
        ];
    }

    /**
     * Retrieve module configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
    }
}
