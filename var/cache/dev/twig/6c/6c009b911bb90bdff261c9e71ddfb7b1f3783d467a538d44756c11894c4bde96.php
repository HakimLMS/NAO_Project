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
        $__internal_ed6676661de4653e261805a3b4216e9ea6e7b02fbb10cbb049a29698b1b55217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6676661de4653e261805a3b4216e9ea6e7b02fbb10cbb049a29698b1b55217->enter($__internal_ed6676661de4653e261805a3b4216e9ea6e7b02fbb10cbb049a29698b1b55217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b93c886bde9d428f72bb5cd4429c38eb1f63407600ec92d561a8ce4c55da34ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93c886bde9d428f72bb5cd4429c38eb1f63407600ec92d561a8ce4c55da34ed->enter($__internal_b93c886bde9d428f72bb5cd4429c38eb1f63407600ec92d561a8ce4c55da34ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed6676661de4653e261805a3b4216e9ea6e7b02fbb10cbb049a29698b1b55217->leave($__internal_ed6676661de4653e261805a3b4216e9ea6e7b02fbb10cbb049a29698b1b55217_prof);

        
        $__internal_b93c886bde9d428f72bb5cd4429c38eb1f63407600ec92d561a8ce4c55da34ed->leave($__internal_b93c886bde9d428f72bb5cd4429c38eb1f63407600ec92d561a8ce4c55da34ed_prof);

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
