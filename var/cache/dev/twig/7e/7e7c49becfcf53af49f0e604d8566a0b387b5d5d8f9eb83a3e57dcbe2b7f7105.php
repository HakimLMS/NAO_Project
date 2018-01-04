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
        $__internal_b4a4e040b0ba66ee0ca38572877dbd2523469e2041a52f393521fee631eb52fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a4e040b0ba66ee0ca38572877dbd2523469e2041a52f393521fee631eb52fb->enter($__internal_b4a4e040b0ba66ee0ca38572877dbd2523469e2041a52f393521fee631eb52fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_453802e201705ad1275cd1f2d185c6e9d1c32ba375ab6882d0a3a52e9a1d3ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453802e201705ad1275cd1f2d185c6e9d1c32ba375ab6882d0a3a52e9a1d3ddd->enter($__internal_453802e201705ad1275cd1f2d185c6e9d1c32ba375ab6882d0a3a52e9a1d3ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b4a4e040b0ba66ee0ca38572877dbd2523469e2041a52f393521fee631eb52fb->leave($__internal_b4a4e040b0ba66ee0ca38572877dbd2523469e2041a52f393521fee631eb52fb_prof);

        
        $__internal_453802e201705ad1275cd1f2d185c6e9d1c32ba375ab6882d0a3a52e9a1d3ddd->leave($__internal_453802e201705ad1275cd1f2d185c6e9d1c32ba375ab6882d0a3a52e9a1d3ddd_prof);

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
