<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bad335dd2203c70d736867e3e11a2f5e372edc4b88002f0f21e790335b12bcdd extends Twig_Template
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
        $__internal_7a7bf65bac9a6ffa8b6d59cee78c7c143549ce6db91c5f827ea7e13dbea69a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7bf65bac9a6ffa8b6d59cee78c7c143549ce6db91c5f827ea7e13dbea69a43->enter($__internal_7a7bf65bac9a6ffa8b6d59cee78c7c143549ce6db91c5f827ea7e13dbea69a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e7cd666875e44a5082a0605560f665ca143d3b53a4ccaaa4e19094975665f014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd666875e44a5082a0605560f665ca143d3b53a4ccaaa4e19094975665f014->enter($__internal_e7cd666875e44a5082a0605560f665ca143d3b53a4ccaaa4e19094975665f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7a7bf65bac9a6ffa8b6d59cee78c7c143549ce6db91c5f827ea7e13dbea69a43->leave($__internal_7a7bf65bac9a6ffa8b6d59cee78c7c143549ce6db91c5f827ea7e13dbea69a43_prof);

        
        $__internal_e7cd666875e44a5082a0605560f665ca143d3b53a4ccaaa4e19094975665f014->leave($__internal_e7cd666875e44a5082a0605560f665ca143d3b53a4ccaaa4e19094975665f014_prof);

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
