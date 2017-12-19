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
        $__internal_2ff269e61d1b9b34faa1c531763bf07fa41fd2ce97cb1e920615617cd3e896f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff269e61d1b9b34faa1c531763bf07fa41fd2ce97cb1e920615617cd3e896f9->enter($__internal_2ff269e61d1b9b34faa1c531763bf07fa41fd2ce97cb1e920615617cd3e896f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6fd9c5318418d7e0a95dc8d759ca7c3900502e470bb6be954d78432d212f29d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd9c5318418d7e0a95dc8d759ca7c3900502e470bb6be954d78432d212f29d2->enter($__internal_6fd9c5318418d7e0a95dc8d759ca7c3900502e470bb6be954d78432d212f29d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2ff269e61d1b9b34faa1c531763bf07fa41fd2ce97cb1e920615617cd3e896f9->leave($__internal_2ff269e61d1b9b34faa1c531763bf07fa41fd2ce97cb1e920615617cd3e896f9_prof);

        
        $__internal_6fd9c5318418d7e0a95dc8d759ca7c3900502e470bb6be954d78432d212f29d2->leave($__internal_6fd9c5318418d7e0a95dc8d759ca7c3900502e470bb6be954d78432d212f29d2_prof);

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
