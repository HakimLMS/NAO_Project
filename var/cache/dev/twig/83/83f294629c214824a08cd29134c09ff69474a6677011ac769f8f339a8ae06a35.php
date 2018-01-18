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
        $__internal_eb6dc79fb67066afe3894226cafc23c77bc08fbd1d0ff0939c8947108547bf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6dc79fb67066afe3894226cafc23c77bc08fbd1d0ff0939c8947108547bf0c->enter($__internal_eb6dc79fb67066afe3894226cafc23c77bc08fbd1d0ff0939c8947108547bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_a30e6e35aedb9a2dfd8ee80300c5eb03358d54fbbeba8dac30ee14dd9981139f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30e6e35aedb9a2dfd8ee80300c5eb03358d54fbbeba8dac30ee14dd9981139f->enter($__internal_a30e6e35aedb9a2dfd8ee80300c5eb03358d54fbbeba8dac30ee14dd9981139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_eb6dc79fb67066afe3894226cafc23c77bc08fbd1d0ff0939c8947108547bf0c->leave($__internal_eb6dc79fb67066afe3894226cafc23c77bc08fbd1d0ff0939c8947108547bf0c_prof);

        
        $__internal_a30e6e35aedb9a2dfd8ee80300c5eb03358d54fbbeba8dac30ee14dd9981139f->leave($__internal_a30e6e35aedb9a2dfd8ee80300c5eb03358d54fbbeba8dac30ee14dd9981139f_prof);

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
