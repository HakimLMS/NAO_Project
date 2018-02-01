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
        $__internal_6e77d17960d02a886bd242c4bb7733e570706149cdc30c5383a811f1a5e9c6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e77d17960d02a886bd242c4bb7733e570706149cdc30c5383a811f1a5e9c6a3->enter($__internal_6e77d17960d02a886bd242c4bb7733e570706149cdc30c5383a811f1a5e9c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_dff80e97dfdf345ffc8b85ee1ee03c949dea16e74a09e480f153fb87317af01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff80e97dfdf345ffc8b85ee1ee03c949dea16e74a09e480f153fb87317af01b->enter($__internal_dff80e97dfdf345ffc8b85ee1ee03c949dea16e74a09e480f153fb87317af01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6e77d17960d02a886bd242c4bb7733e570706149cdc30c5383a811f1a5e9c6a3->leave($__internal_6e77d17960d02a886bd242c4bb7733e570706149cdc30c5383a811f1a5e9c6a3_prof);

        
        $__internal_dff80e97dfdf345ffc8b85ee1ee03c949dea16e74a09e480f153fb87317af01b->leave($__internal_dff80e97dfdf345ffc8b85ee1ee03c949dea16e74a09e480f153fb87317af01b_prof);

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
