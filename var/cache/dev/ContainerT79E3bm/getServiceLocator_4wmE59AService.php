<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.4wmE59A' shared service.

return $this->privates['service_locator.4wmE59A'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('deleteArticle' => function (): ?\App\Services\DeleteArticleHandler {
    return ($this->privates['App\Services\DeleteArticleHandler'] ?? $this->load(__DIR__.'/getDeleteArticleHandlerService.php'));
}));