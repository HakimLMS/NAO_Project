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
        $__internal_535d423669992ec2336cd4e3704f71ac8af6c01b7d5f11a236d25217be66dd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535d423669992ec2336cd4e3704f71ac8af6c01b7d5f11a236d25217be66dd41->enter($__internal_535d423669992ec2336cd4e3704f71ac8af6c01b7d5f11a236d25217be66dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0f50a197dca5069dd4ea813a445ff87f7b7fbd1cf7424fc8bdd95eaaab65f857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f50a197dca5069dd4ea813a445ff87f7b7fbd1cf7424fc8bdd95eaaab65f857->enter($__internal_0f50a197dca5069dd4ea813a445ff87f7b7fbd1cf7424fc8bdd95eaaab65f857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_535d423669992ec2336cd4e3704f71ac8af6c01b7d5f11a236d25217be66dd41->leave($__internal_535d423669992ec2336cd4e3704f71ac8af6c01b7d5f11a236d25217be66dd41_prof);

        
        $__internal_0f50a197dca5069dd4ea813a445ff87f7b7fbd1cf7424fc8bdd95eaaab65f857->leave($__internal_0f50a197dca5069dd4ea813a445ff87f7b7fbd1cf7424fc8bdd95eaaab65f857_prof);

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
