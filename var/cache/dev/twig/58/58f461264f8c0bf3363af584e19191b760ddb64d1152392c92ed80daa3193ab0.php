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
        $__internal_5ce24440ad14f4bd93087b54c779fb8fc3dc3a9f13b5a9abc5c7401aefa392ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce24440ad14f4bd93087b54c779fb8fc3dc3a9f13b5a9abc5c7401aefa392ed->enter($__internal_5ce24440ad14f4bd93087b54c779fb8fc3dc3a9f13b5a9abc5c7401aefa392ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a5155dbd845dfeebbfa2da9c6879cec5adb94ba486cb3d28647eb2879634dfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5155dbd845dfeebbfa2da9c6879cec5adb94ba486cb3d28647eb2879634dfba->enter($__internal_a5155dbd845dfeebbfa2da9c6879cec5adb94ba486cb3d28647eb2879634dfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5ce24440ad14f4bd93087b54c779fb8fc3dc3a9f13b5a9abc5c7401aefa392ed->leave($__internal_5ce24440ad14f4bd93087b54c779fb8fc3dc3a9f13b5a9abc5c7401aefa392ed_prof);

        
        $__internal_a5155dbd845dfeebbfa2da9c6879cec5adb94ba486cb3d28647eb2879634dfba->leave($__internal_a5155dbd845dfeebbfa2da9c6879cec5adb94ba486cb3d28647eb2879634dfba_prof);

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
