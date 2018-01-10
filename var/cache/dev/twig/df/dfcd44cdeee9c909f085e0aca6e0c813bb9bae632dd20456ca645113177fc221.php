<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fa859260f8f33e61847520b60dbe5a544f725e3ceaccc48ae3d7b73b367b318a extends Twig_Template
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
        $__internal_6ec8de4b38d89e32467fc2959e85daea1640c094e7a8610735cb1d1910356e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec8de4b38d89e32467fc2959e85daea1640c094e7a8610735cb1d1910356e54->enter($__internal_6ec8de4b38d89e32467fc2959e85daea1640c094e7a8610735cb1d1910356e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_06a1148458834e2b0587074f82782068922fe477228ab587353a34695ecdbadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a1148458834e2b0587074f82782068922fe477228ab587353a34695ecdbadf->enter($__internal_06a1148458834e2b0587074f82782068922fe477228ab587353a34695ecdbadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6ec8de4b38d89e32467fc2959e85daea1640c094e7a8610735cb1d1910356e54->leave($__internal_6ec8de4b38d89e32467fc2959e85daea1640c094e7a8610735cb1d1910356e54_prof);

        
        $__internal_06a1148458834e2b0587074f82782068922fe477228ab587353a34695ecdbadf->leave($__internal_06a1148458834e2b0587074f82782068922fe477228ab587353a34695ecdbadf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
