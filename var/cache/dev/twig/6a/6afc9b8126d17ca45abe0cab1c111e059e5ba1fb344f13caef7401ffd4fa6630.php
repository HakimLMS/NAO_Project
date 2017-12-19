<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_25b587e6d4640a6f2de6bdbe9b7259d01997ed28799936d289ec1af62d25f088 extends Twig_Template
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
        $__internal_b440d4ea18857d128b65d49e0608e1e6c74543fcb4fc828396853cddc85e05f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b440d4ea18857d128b65d49e0608e1e6c74543fcb4fc828396853cddc85e05f0->enter($__internal_b440d4ea18857d128b65d49e0608e1e6c74543fcb4fc828396853cddc85e05f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_aed0ffc0d1df489ba527c1264c8977a0cd3b8652858cd7b13c0e2720e5f8f126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed0ffc0d1df489ba527c1264c8977a0cd3b8652858cd7b13c0e2720e5f8f126->enter($__internal_aed0ffc0d1df489ba527c1264c8977a0cd3b8652858cd7b13c0e2720e5f8f126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_b440d4ea18857d128b65d49e0608e1e6c74543fcb4fc828396853cddc85e05f0->leave($__internal_b440d4ea18857d128b65d49e0608e1e6c74543fcb4fc828396853cddc85e05f0_prof);

        
        $__internal_aed0ffc0d1df489ba527c1264c8977a0cd3b8652858cd7b13c0e2720e5f8f126->leave($__internal_aed0ffc0d1df489ba527c1264c8977a0cd3b8652858cd7b13c0e2720e5f8f126_prof);

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
