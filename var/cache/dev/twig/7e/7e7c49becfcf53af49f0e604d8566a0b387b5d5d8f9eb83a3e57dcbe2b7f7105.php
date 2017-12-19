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
        $__internal_c079027069f816ccf21fdd205b822ebb65ea6fa589d8219cdd02c862da4f406f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c079027069f816ccf21fdd205b822ebb65ea6fa589d8219cdd02c862da4f406f->enter($__internal_c079027069f816ccf21fdd205b822ebb65ea6fa589d8219cdd02c862da4f406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ebb835cb9fdbc31dc16dee9b8ab467c57faf3e1aa06e7b04ee96d9558a62ca54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb835cb9fdbc31dc16dee9b8ab467c57faf3e1aa06e7b04ee96d9558a62ca54->enter($__internal_ebb835cb9fdbc31dc16dee9b8ab467c57faf3e1aa06e7b04ee96d9558a62ca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c079027069f816ccf21fdd205b822ebb65ea6fa589d8219cdd02c862da4f406f->leave($__internal_c079027069f816ccf21fdd205b822ebb65ea6fa589d8219cdd02c862da4f406f_prof);

        
        $__internal_ebb835cb9fdbc31dc16dee9b8ab467c57faf3e1aa06e7b04ee96d9558a62ca54->leave($__internal_ebb835cb9fdbc31dc16dee9b8ab467c57faf3e1aa06e7b04ee96d9558a62ca54_prof);

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
