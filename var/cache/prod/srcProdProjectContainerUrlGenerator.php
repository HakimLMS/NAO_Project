<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'article_single' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogController::single',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/single',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogController::newArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/new_article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogController::deleteArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modify_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogController::modifyArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/modify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ContactController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'don' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\DonController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/don',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'donCB' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\DonController::CB',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/don/CB',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CBcheckout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\DonController::CBcheckout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/don/CB_checkout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mentions_legales' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::mentions',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mentions-legales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'association' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::association',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/association',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'research' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ResearchController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/research',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subscribe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::subscribeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subscribe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validateuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::validateUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/validateuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'downgradeuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::downgradeUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/downgradeuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifyuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::modifyUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/modify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogController::bloglist',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user/subscribe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::subscribe',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/subscribe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
