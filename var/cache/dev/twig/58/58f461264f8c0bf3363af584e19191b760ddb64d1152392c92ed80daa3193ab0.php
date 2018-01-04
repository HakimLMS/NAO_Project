<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_282989014d51c432269a37484b0f8e2316f4b5df1edf1e3d7410e312b744513d extends Twig_Template
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
        $__internal_ca9a21684fc86db8becd7f8d5c25e58845d02592948306e4693652b32bf3010a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9a21684fc86db8becd7f8d5c25e58845d02592948306e4693652b32bf3010a->enter($__internal_ca9a21684fc86db8becd7f8d5c25e58845d02592948306e4693652b32bf3010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_60ea7b48156e2c3dc693471221e542514d10a1d5d5139754288d51677a26e81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ea7b48156e2c3dc693471221e542514d10a1d5d5139754288d51677a26e81e->enter($__internal_60ea7b48156e2c3dc693471221e542514d10a1d5d5139754288d51677a26e81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ca9a21684fc86db8becd7f8d5c25e58845d02592948306e4693652b32bf3010a->leave($__internal_ca9a21684fc86db8becd7f8d5c25e58845d02592948306e4693652b32bf3010a_prof);

        
        $__internal_60ea7b48156e2c3dc693471221e542514d10a1d5d5139754288d51677a26e81e->leave($__internal_60ea7b48156e2c3dc693471221e542514d10a1d5d5139754288d51677a26e81e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
