<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.xiVkYm3' shared service.

return $this->privates['service_locator.xiVkYm3'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('validateUHandler' => function (): ?\App\Services\ValidateUserHandler {
    return ($this->privates['App\Services\ValidateUserHandler'] ?? $this->load(__DIR__.'/getValidateUserHandlerService.php'));
}));
