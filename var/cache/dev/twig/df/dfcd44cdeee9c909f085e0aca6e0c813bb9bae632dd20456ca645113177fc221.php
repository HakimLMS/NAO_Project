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
        $__internal_b0b1993e2f13f1636a3755968630bd7f29291353c5328b58453304a6945ade34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b1993e2f13f1636a3755968630bd7f29291353c5328b58453304a6945ade34->enter($__internal_b0b1993e2f13f1636a3755968630bd7f29291353c5328b58453304a6945ade34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c49e28fc53a55b0b49fec8a9cde1eb684e883e30041ce8cd817f80a303594108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49e28fc53a55b0b49fec8a9cde1eb684e883e30041ce8cd817f80a303594108->enter($__internal_c49e28fc53a55b0b49fec8a9cde1eb684e883e30041ce8cd817f80a303594108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b0b1993e2f13f1636a3755968630bd7f29291353c5328b58453304a6945ade34->leave($__internal_b0b1993e2f13f1636a3755968630bd7f29291353c5328b58453304a6945ade34_prof);

        
        $__internal_c49e28fc53a55b0b49fec8a9cde1eb684e883e30041ce8cd817f80a303594108->leave($__internal_c49e28fc53a55b0b49fec8a9cde1eb684e883e30041ce8cd817f80a303594108_prof);

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
