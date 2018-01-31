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
        $__internal_83c851d2ddc19009cc86e318af632a748719085a11b2b64b9d402baed0c370c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c851d2ddc19009cc86e318af632a748719085a11b2b64b9d402baed0c370c1->enter($__internal_83c851d2ddc19009cc86e318af632a748719085a11b2b64b9d402baed0c370c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0c5b86996161654575fb9c5e3381466c7de00d469066224b3274df83346184cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5b86996161654575fb9c5e3381466c7de00d469066224b3274df83346184cf->enter($__internal_0c5b86996161654575fb9c5e3381466c7de00d469066224b3274df83346184cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_83c851d2ddc19009cc86e318af632a748719085a11b2b64b9d402baed0c370c1->leave($__internal_83c851d2ddc19009cc86e318af632a748719085a11b2b64b9d402baed0c370c1_prof);

        
        $__internal_0c5b86996161654575fb9c5e3381466c7de00d469066224b3274df83346184cf->leave($__internal_0c5b86996161654575fb9c5e3381466c7de00d469066224b3274df83346184cf_prof);

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
