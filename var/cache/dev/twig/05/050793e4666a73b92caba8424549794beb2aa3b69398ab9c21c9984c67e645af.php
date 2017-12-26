<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e4b3ae1c64899f7845e234bbf0396b68377ded4f49bc0fc844c6c736c78980e2 extends Twig_Template
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
        $__internal_efd033d70228704b2bb7661c431668b79a22f12694f41ca2574008a21d5f6d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd033d70228704b2bb7661c431668b79a22f12694f41ca2574008a21d5f6d6f->enter($__internal_efd033d70228704b2bb7661c431668b79a22f12694f41ca2574008a21d5f6d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2c882726485151e61a066f98d5165c122fbd597e514ae02a5fc11ff29a277734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c882726485151e61a066f98d5165c122fbd597e514ae02a5fc11ff29a277734->enter($__internal_2c882726485151e61a066f98d5165c122fbd597e514ae02a5fc11ff29a277734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_efd033d70228704b2bb7661c431668b79a22f12694f41ca2574008a21d5f6d6f->leave($__internal_efd033d70228704b2bb7661c431668b79a22f12694f41ca2574008a21d5f6d6f_prof);

        
        $__internal_2c882726485151e61a066f98d5165c122fbd597e514ae02a5fc11ff29a277734->leave($__internal_2c882726485151e61a066f98d5165c122fbd597e514ae02a5fc11ff29a277734_prof);

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
", "@Framework/Form/widget_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
