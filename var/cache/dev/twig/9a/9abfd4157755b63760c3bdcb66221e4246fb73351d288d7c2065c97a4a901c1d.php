<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_981f165144c6d95f04a85bcffc48d074d392be93360b033429b843de7d6de2b8 extends Twig_Template
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
        $__internal_1e6d6ffc85f542a60cd64563609d6524a943ead1e4b6c3a5f5e36cd40f67a940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6d6ffc85f542a60cd64563609d6524a943ead1e4b6c3a5f5e36cd40f67a940->enter($__internal_1e6d6ffc85f542a60cd64563609d6524a943ead1e4b6c3a5f5e36cd40f67a940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a7434584f15c23facce114a2ce5938e6ad9f61c92b63cbc0b2d1edae39965125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7434584f15c23facce114a2ce5938e6ad9f61c92b63cbc0b2d1edae39965125->enter($__internal_a7434584f15c23facce114a2ce5938e6ad9f61c92b63cbc0b2d1edae39965125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1e6d6ffc85f542a60cd64563609d6524a943ead1e4b6c3a5f5e36cd40f67a940->leave($__internal_1e6d6ffc85f542a60cd64563609d6524a943ead1e4b6c3a5f5e36cd40f67a940_prof);

        
        $__internal_a7434584f15c23facce114a2ce5938e6ad9f61c92b63cbc0b2d1edae39965125->leave($__internal_a7434584f15c23facce114a2ce5938e6ad9f61c92b63cbc0b2d1edae39965125_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
