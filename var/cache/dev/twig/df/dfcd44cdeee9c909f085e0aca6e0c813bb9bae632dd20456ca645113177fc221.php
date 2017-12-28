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
        $__internal_321033d69f4a75230dc4ad295170ec65b414e4ae3247043ba6200071d11cefc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321033d69f4a75230dc4ad295170ec65b414e4ae3247043ba6200071d11cefc3->enter($__internal_321033d69f4a75230dc4ad295170ec65b414e4ae3247043ba6200071d11cefc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cee143a9657f70622950a25c9db4569959e85c5313117f5b745702c93a44d99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee143a9657f70622950a25c9db4569959e85c5313117f5b745702c93a44d99d->enter($__internal_cee143a9657f70622950a25c9db4569959e85c5313117f5b745702c93a44d99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_321033d69f4a75230dc4ad295170ec65b414e4ae3247043ba6200071d11cefc3->leave($__internal_321033d69f4a75230dc4ad295170ec65b414e4ae3247043ba6200071d11cefc3_prof);

        
        $__internal_cee143a9657f70622950a25c9db4569959e85c5313117f5b745702c93a44d99d->leave($__internal_cee143a9657f70622950a25c9db4569959e85c5313117f5b745702c93a44d99d_prof);

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
