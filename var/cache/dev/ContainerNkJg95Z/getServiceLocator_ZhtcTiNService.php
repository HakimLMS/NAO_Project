<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.ZhtcTiN' shared service.

return $this->privates['service_locator.ZhtcTiN'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('modifyArticle' => function (): ?\App\Services\ModifyArticleHandler {
    return ($this->privates['App\Services\ModifyArticleHandler'] ?? $this->load(__DIR__.'/getModifyArticleHandlerService.php'));
}));
