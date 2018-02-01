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
        $__internal_706941361e1013b3bcceba9cb2a67a251bc25d677a4128d51b1972605dbc4d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706941361e1013b3bcceba9cb2a67a251bc25d677a4128d51b1972605dbc4d15->enter($__internal_706941361e1013b3bcceba9cb2a67a251bc25d677a4128d51b1972605dbc4d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8f1ea7aba7eebd2b723face93a0f50217366ff0ca24be3e86a5fe065815348a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1ea7aba7eebd2b723face93a0f50217366ff0ca24be3e86a5fe065815348a8->enter($__internal_8f1ea7aba7eebd2b723face93a0f50217366ff0ca24be3e86a5fe065815348a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_706941361e1013b3bcceba9cb2a67a251bc25d677a4128d51b1972605dbc4d15->leave($__internal_706941361e1013b3bcceba9cb2a67a251bc25d677a4128d51b1972605dbc4d15_prof);

        
        $__internal_8f1ea7aba7eebd2b723face93a0f50217366ff0ca24be3e86a5fe065815348a8->leave($__internal_8f1ea7aba7eebd2b723face93a0f50217366ff0ca24be3e86a5fe065815348a8_prof);

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
