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
        $__internal_28bdcabbf2799b630c3f37e5bb2ff11150247c4712d385b2a1853bcd6de9a925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bdcabbf2799b630c3f37e5bb2ff11150247c4712d385b2a1853bcd6de9a925->enter($__internal_28bdcabbf2799b630c3f37e5bb2ff11150247c4712d385b2a1853bcd6de9a925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_caa8ba77451d94753853e38c3c78cf77c37ebe3bb580d33e316c0df7a90ada13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa8ba77451d94753853e38c3c78cf77c37ebe3bb580d33e316c0df7a90ada13->enter($__internal_caa8ba77451d94753853e38c3c78cf77c37ebe3bb580d33e316c0df7a90ada13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_28bdcabbf2799b630c3f37e5bb2ff11150247c4712d385b2a1853bcd6de9a925->leave($__internal_28bdcabbf2799b630c3f37e5bb2ff11150247c4712d385b2a1853bcd6de9a925_prof);

        
        $__internal_caa8ba77451d94753853e38c3c78cf77c37ebe3bb580d33e316c0df7a90ada13->leave($__internal_caa8ba77451d94753853e38c3c78cf77c37ebe3bb580d33e316c0df7a90ada13_prof);

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
