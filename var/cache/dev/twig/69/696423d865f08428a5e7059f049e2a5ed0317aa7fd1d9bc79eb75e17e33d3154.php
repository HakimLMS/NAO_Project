<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ef9d984b538bd3d84bfaeb12c283505a90dbfee1eab9b0aee8dabeb4d3a327a extends Twig_Template
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
        $__internal_9ea8a6e65fe44fbc3f19439aa4efa999d41be9293d6042f9237fe9b5dfb08cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea8a6e65fe44fbc3f19439aa4efa999d41be9293d6042f9237fe9b5dfb08cdc->enter($__internal_9ea8a6e65fe44fbc3f19439aa4efa999d41be9293d6042f9237fe9b5dfb08cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_31c879e02c008008b025f3afe6baace6cb2c33f67703745fba0b7cbf3a52af56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c879e02c008008b025f3afe6baace6cb2c33f67703745fba0b7cbf3a52af56->enter($__internal_31c879e02c008008b025f3afe6baace6cb2c33f67703745fba0b7cbf3a52af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9ea8a6e65fe44fbc3f19439aa4efa999d41be9293d6042f9237fe9b5dfb08cdc->leave($__internal_9ea8a6e65fe44fbc3f19439aa4efa999d41be9293d6042f9237fe9b5dfb08cdc_prof);

        
        $__internal_31c879e02c008008b025f3afe6baace6cb2c33f67703745fba0b7cbf3a52af56->leave($__internal_31c879e02c008008b025f3afe6baace6cb2c33f67703745fba0b7cbf3a52af56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
