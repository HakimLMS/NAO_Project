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
        $__internal_7abc353ea2749ed12579ad5ffab5ed00985c8e805ce1964ae653873b30f61255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abc353ea2749ed12579ad5ffab5ed00985c8e805ce1964ae653873b30f61255->enter($__internal_7abc353ea2749ed12579ad5ffab5ed00985c8e805ce1964ae653873b30f61255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_812bfd203d6ca0761ab187f4397a4031a25a7e45fbf068244560d7e286692a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812bfd203d6ca0761ab187f4397a4031a25a7e45fbf068244560d7e286692a6d->enter($__internal_812bfd203d6ca0761ab187f4397a4031a25a7e45fbf068244560d7e286692a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7abc353ea2749ed12579ad5ffab5ed00985c8e805ce1964ae653873b30f61255->leave($__internal_7abc353ea2749ed12579ad5ffab5ed00985c8e805ce1964ae653873b30f61255_prof);

        
        $__internal_812bfd203d6ca0761ab187f4397a4031a25a7e45fbf068244560d7e286692a6d->leave($__internal_812bfd203d6ca0761ab187f4397a4031a25a7e45fbf068244560d7e286692a6d_prof);

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
