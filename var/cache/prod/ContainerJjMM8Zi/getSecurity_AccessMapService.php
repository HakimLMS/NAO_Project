<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcher.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\AccessMap.php';

$this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/');

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/blog/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/don/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/contact'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add($a, array(0 => 'ROLE_USER'), NULL);
$instance->add($a, array(0 => 'ROLE_ORGANISER'), NULL);
$instance->add($a, array(0 => 'ROLE_ADMIN'), NULL);

return $instance;