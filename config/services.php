<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\ExampleCommand;
use App\ExampleFactory;
use App\ExampleService;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set(ExampleFactory::class);

    $services
        ->set(ExampleCommand::class)
        ->arg('$service',
                inline_service(ExampleService::class)
                ->factory(service(ExampleFactory::class))
                ->args(
                    [
                        '$first' => 'first',
                        '$third' => 'third',
                    ]
                )
        )
        ->tag('console.command');
};
