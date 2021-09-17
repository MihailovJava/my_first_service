<?php

declare(strict_types=1);

namespace App\Handler;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

class HelloHandlerFactory
{
    public function __invoke(ContainerInterface $container) : HelloWorldHandler
    {
        return new HelloWorldHandler($container->get(TemplateRendererInterface::class));
    }
}
