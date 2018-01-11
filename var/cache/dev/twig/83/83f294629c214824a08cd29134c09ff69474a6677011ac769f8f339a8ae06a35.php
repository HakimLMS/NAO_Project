<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_ece80ba5424db555ad0d4bb4276d300f90fec861e1efe2021694a4e11810316b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b8fd58bb4817d16cdca0b181bc7f7ac3a728107ed332da767bf1e1f4e195e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8fd58bb4817d16cdca0b181bc7f7ac3a728107ed332da767bf1e1f4e195e77->enter($__internal_0b8fd58bb4817d16cdca0b181bc7f7ac3a728107ed332da767bf1e1f4e195e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_4e5a3af39e100b6931142dad049ac2bf32a62512645daa281a5277c24093f473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5a3af39e100b6931142dad049ac2bf32a62512645daa281a5277c24093f473->enter($__internal_4e5a3af39e100b6931142dad049ac2bf32a62512645daa281a5277c24093f473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_0b8fd58bb4817d16cdca0b181bc7f7ac3a728107ed332da767bf1e1f4e195e77->leave($__internal_0b8fd58bb4817d16cdca0b181bc7f7ac3a728107ed332da767bf1e1f4e195e77_prof);

        
        $__internal_4e5a3af39e100b6931142dad049ac2bf32a62512645daa281a5277c24093f473->leave($__internal_4e5a3af39e100b6931142dad049ac2bf32a62512645daa281a5277c24093f473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
