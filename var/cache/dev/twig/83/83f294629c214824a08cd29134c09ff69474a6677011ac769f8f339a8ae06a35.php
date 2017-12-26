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
        $__internal_21439f701a5e992c82ae77815eddb37b4b24a2e3c944422b1e2b92450d2b6b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21439f701a5e992c82ae77815eddb37b4b24a2e3c944422b1e2b92450d2b6b63->enter($__internal_21439f701a5e992c82ae77815eddb37b4b24a2e3c944422b1e2b92450d2b6b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_6940cc51d42bb574395720eb45ddc43e29539aa9896547da442b9f693e6ba83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6940cc51d42bb574395720eb45ddc43e29539aa9896547da442b9f693e6ba83d->enter($__internal_6940cc51d42bb574395720eb45ddc43e29539aa9896547da442b9f693e6ba83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_21439f701a5e992c82ae77815eddb37b4b24a2e3c944422b1e2b92450d2b6b63->leave($__internal_21439f701a5e992c82ae77815eddb37b4b24a2e3c944422b1e2b92450d2b6b63_prof);

        
        $__internal_6940cc51d42bb574395720eb45ddc43e29539aa9896547da442b9f693e6ba83d->leave($__internal_6940cc51d42bb574395720eb45ddc43e29539aa9896547da442b9f693e6ba83d_prof);

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
", "@Framework/Form/form_start.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
