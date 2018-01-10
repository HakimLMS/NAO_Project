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
        $__internal_a9cdddfa4f76d424b4c498a1c15e6ddebe9221836800bb9cd81d06587d7bf713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9cdddfa4f76d424b4c498a1c15e6ddebe9221836800bb9cd81d06587d7bf713->enter($__internal_a9cdddfa4f76d424b4c498a1c15e6ddebe9221836800bb9cd81d06587d7bf713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5c9bb20574dc2ecf23d857afae814447a9f0a53f942ef78be6e3cd53118c31bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9bb20574dc2ecf23d857afae814447a9f0a53f942ef78be6e3cd53118c31bc->enter($__internal_5c9bb20574dc2ecf23d857afae814447a9f0a53f942ef78be6e3cd53118c31bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a9cdddfa4f76d424b4c498a1c15e6ddebe9221836800bb9cd81d06587d7bf713->leave($__internal_a9cdddfa4f76d424b4c498a1c15e6ddebe9221836800bb9cd81d06587d7bf713_prof);

        
        $__internal_5c9bb20574dc2ecf23d857afae814447a9f0a53f942ef78be6e3cd53118c31bc->leave($__internal_5c9bb20574dc2ecf23d857afae814447a9f0a53f942ef78be6e3cd53118c31bc_prof);

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
