<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Services\DowngradeUserHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Services\\DowngradeUserHandler.php';

return $this->privates['App\Services\DowngradeUserHandler'] = new \App\Services\DowngradeUserHandler(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->privates['App\Services\SubscribeDataGenerator\FlusherService'] ?? $this->load(__DIR__.'/getFlusherServiceService.php')));
