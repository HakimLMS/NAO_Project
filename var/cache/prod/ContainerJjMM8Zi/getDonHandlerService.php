<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Services\DonHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Services\\DonHandler.php';

return $this->privates['App\Services\DonHandler'] = new \App\Services\DonHandler(($this->privates['App\Services\SubscribeDataGenerator\FlusherService'] ?? $this->load(__DIR__.'/getFlusherServiceService.php')), ($this->services['form.factory'] ?? $this->load(__DIR__.'/getForm_FactoryService.php')));