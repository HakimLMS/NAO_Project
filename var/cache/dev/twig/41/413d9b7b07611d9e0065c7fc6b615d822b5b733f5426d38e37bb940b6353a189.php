<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_57a577e1f93a4c12f13d3b1d94d4ef3fb1f5c3dc5c5bc2e9091e277e3f565b66 extends Twig_Template
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
        $__internal_3750625b37616c7525fca72cf93aceb56be1180b6fa48aa90e47c91f522138b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3750625b37616c7525fca72cf93aceb56be1180b6fa48aa90e47c91f522138b0->enter($__internal_3750625b37616c7525fca72cf93aceb56be1180b6fa48aa90e47c91f522138b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_17640549be013ff33cd14492cbd85dec82e35c71e433728b9cc99a114ea2d4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17640549be013ff33cd14492cbd85dec82e35c71e433728b9cc99a114ea2d4ac->enter($__internal_17640549be013ff33cd14492cbd85dec82e35c71e433728b9cc99a114ea2d4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3750625b37616c7525fca72cf93aceb56be1180b6fa48aa90e47c91f522138b0->leave($__internal_3750625b37616c7525fca72cf93aceb56be1180b6fa48aa90e47c91f522138b0_prof);

        
        $__internal_17640549be013ff33cd14492cbd85dec82e35c71e433728b9cc99a114ea2d4ac->leave($__internal_17640549be013ff33cd14492cbd85dec82e35c71e433728b9cc99a114ea2d4ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
