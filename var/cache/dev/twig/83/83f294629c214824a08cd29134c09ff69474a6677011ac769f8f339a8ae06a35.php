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
        $__internal_4f8cc6272f9a26e32ad1f14e6a8e6d7c44b3aa004a531bf42b955e51fcf95ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8cc6272f9a26e32ad1f14e6a8e6d7c44b3aa004a531bf42b955e51fcf95ced->enter($__internal_4f8cc6272f9a26e32ad1f14e6a8e6d7c44b3aa004a531bf42b955e51fcf95ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_f4c1a0f5f6957eb9080bf769f0dca09aebd855c8d07974123c6af55a4308d148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c1a0f5f6957eb9080bf769f0dca09aebd855c8d07974123c6af55a4308d148->enter($__internal_f4c1a0f5f6957eb9080bf769f0dca09aebd855c8d07974123c6af55a4308d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_4f8cc6272f9a26e32ad1f14e6a8e6d7c44b3aa004a531bf42b955e51fcf95ced->leave($__internal_4f8cc6272f9a26e32ad1f14e6a8e6d7c44b3aa004a531bf42b955e51fcf95ced_prof);

        
        $__internal_f4c1a0f5f6957eb9080bf769f0dca09aebd855c8d07974123c6af55a4308d148->leave($__internal_f4c1a0f5f6957eb9080bf769f0dca09aebd855c8d07974123c6af55a4308d148_prof);

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
