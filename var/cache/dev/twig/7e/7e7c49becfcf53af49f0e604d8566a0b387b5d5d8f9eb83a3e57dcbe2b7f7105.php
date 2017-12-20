<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_daf02719bdf8b51f682704b324bcdac793d05f19f1b6a08cea10f5d889b4165f extends Twig_Template
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
        $__internal_6dac84e08874558f3b530a95f0cb6fa6e68f60d2c20cd0368fb00d9981be9159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dac84e08874558f3b530a95f0cb6fa6e68f60d2c20cd0368fb00d9981be9159->enter($__internal_6dac84e08874558f3b530a95f0cb6fa6e68f60d2c20cd0368fb00d9981be9159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8a30c8f5208452f2ca06019c3f24960b188863d4ee9fd19e55344db0cd509487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a30c8f5208452f2ca06019c3f24960b188863d4ee9fd19e55344db0cd509487->enter($__internal_8a30c8f5208452f2ca06019c3f24960b188863d4ee9fd19e55344db0cd509487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6dac84e08874558f3b530a95f0cb6fa6e68f60d2c20cd0368fb00d9981be9159->leave($__internal_6dac84e08874558f3b530a95f0cb6fa6e68f60d2c20cd0368fb00d9981be9159_prof);

        
        $__internal_8a30c8f5208452f2ca06019c3f24960b188863d4ee9fd19e55344db0cd509487->leave($__internal_8a30c8f5208452f2ca06019c3f24960b188863d4ee9fd19e55344db0cd509487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
