<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_03542dd852a14eeac2a98c532413aa3aacb127b004014dd4869b3022d1959e0d extends Twig_Template
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
        $__internal_880376bb7f93fe9e63a9dd130dfbcfa0461e69716a4ae5a945e49a1df9d6b9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880376bb7f93fe9e63a9dd130dfbcfa0461e69716a4ae5a945e49a1df9d6b9ee->enter($__internal_880376bb7f93fe9e63a9dd130dfbcfa0461e69716a4ae5a945e49a1df9d6b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7e9f0ee8d1070673ba7790049135c91dc146a105be73649816a66594a85db582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9f0ee8d1070673ba7790049135c91dc146a105be73649816a66594a85db582->enter($__internal_7e9f0ee8d1070673ba7790049135c91dc146a105be73649816a66594a85db582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_880376bb7f93fe9e63a9dd130dfbcfa0461e69716a4ae5a945e49a1df9d6b9ee->leave($__internal_880376bb7f93fe9e63a9dd130dfbcfa0461e69716a4ae5a945e49a1df9d6b9ee_prof);

        
        $__internal_7e9f0ee8d1070673ba7790049135c91dc146a105be73649816a66594a85db582->leave($__internal_7e9f0ee8d1070673ba7790049135c91dc146a105be73649816a66594a85db582_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
