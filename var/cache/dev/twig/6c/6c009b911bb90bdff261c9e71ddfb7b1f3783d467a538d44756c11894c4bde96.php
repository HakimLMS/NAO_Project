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
        $__internal_9c473b172164a3701ebe5d18ee931f7cca39a2ca3bbbccd9836f4ea7d464ce02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c473b172164a3701ebe5d18ee931f7cca39a2ca3bbbccd9836f4ea7d464ce02->enter($__internal_9c473b172164a3701ebe5d18ee931f7cca39a2ca3bbbccd9836f4ea7d464ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a948477a4be76a0065fc65cbaa7f4777ffe6bff71b772e015046d6f6fd0a837f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a948477a4be76a0065fc65cbaa7f4777ffe6bff71b772e015046d6f6fd0a837f->enter($__internal_a948477a4be76a0065fc65cbaa7f4777ffe6bff71b772e015046d6f6fd0a837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9c473b172164a3701ebe5d18ee931f7cca39a2ca3bbbccd9836f4ea7d464ce02->leave($__internal_9c473b172164a3701ebe5d18ee931f7cca39a2ca3bbbccd9836f4ea7d464ce02_prof);

        
        $__internal_a948477a4be76a0065fc65cbaa7f4777ffe6bff71b772e015046d6f6fd0a837f->leave($__internal_a948477a4be76a0065fc65cbaa7f4777ffe6bff71b772e015046d6f6fd0a837f_prof);

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
