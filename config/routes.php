<?php

declare(strict_types=1);

use Mezzio\Application;
use Mezzio\MiddlewareFactory;
use Psr\Container\ContainerInterface;

/**
 * FastRoute route configuration
 *
 * @see https://github.com/nikic/FastRoute
 *
 * Setup routes with a single request method:
 *
 * $App->get('/', App\Handler\HomePageHandler::class, 'home');
 * $App->post('/album', App\Handler\AlbumCreateHandler::class, 'album.create');
 * $App->put('/album/{id:\d+}', App\Handler\AlbumUpdateHandler::class, 'album.put');
 * $App->patch('/album/{id:\d+}', App\Handler\AlbumUpdateHandler::class, 'album.patch');
 * $App->delete('/album/{id:\d+}', App\Handler\AlbumDeleteHandler::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $App->route('/contact', App\Handler\ContactHandler::class, ['GET', 'POST', ...], 'contact');
 */

return static function (Application $app, MiddlewareFactory $factory, ContainerInterface $container): void {
    $app->get('/hello', \App\Handler\HelloHandler::class, 'hello_world');
};
