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
        $__internal_b8252e244a7999468c85534c76c7746d9a66269d697fbc418eb9a074f9d6b2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8252e244a7999468c85534c76c7746d9a66269d697fbc418eb9a074f9d6b2c9->enter($__internal_b8252e244a7999468c85534c76c7746d9a66269d697fbc418eb9a074f9d6b2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b1aa1606151a0b4bffa82708f01bb380247f585b2169817870471f1979dd13e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1aa1606151a0b4bffa82708f01bb380247f585b2169817870471f1979dd13e8->enter($__internal_b1aa1606151a0b4bffa82708f01bb380247f585b2169817870471f1979dd13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b8252e244a7999468c85534c76c7746d9a66269d697fbc418eb9a074f9d6b2c9->leave($__internal_b8252e244a7999468c85534c76c7746d9a66269d697fbc418eb9a074f9d6b2c9_prof);

        
        $__internal_b1aa1606151a0b4bffa82708f01bb380247f585b2169817870471f1979dd13e8->leave($__internal_b1aa1606151a0b4bffa82708f01bb380247f585b2169817870471f1979dd13e8_prof);

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
