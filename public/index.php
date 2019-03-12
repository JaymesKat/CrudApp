<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions([
    \CrudApp\HelloWorld::class => \DI\create(\CrudApp\HelloWorld::class)
]);

$container = $containerBuilder->build();

$helloWorld = $container->get(\CrudApp\HelloWorld::class);
$helloWorld->announce();
