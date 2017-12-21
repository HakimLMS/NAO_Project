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
        $__internal_0c11ac7e4c47b53f8ccce16db641dd109c67a7a9fe6cfdcb250aa042e042a32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c11ac7e4c47b53f8ccce16db641dd109c67a7a9fe6cfdcb250aa042e042a32c->enter($__internal_0c11ac7e4c47b53f8ccce16db641dd109c67a7a9fe6cfdcb250aa042e042a32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c9b891904bf72b07df19c2e2bdcdc3576510b900243c35270b1e50ee4ac8ed2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b891904bf72b07df19c2e2bdcdc3576510b900243c35270b1e50ee4ac8ed2f->enter($__internal_c9b891904bf72b07df19c2e2bdcdc3576510b900243c35270b1e50ee4ac8ed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0c11ac7e4c47b53f8ccce16db641dd109c67a7a9fe6cfdcb250aa042e042a32c->leave($__internal_0c11ac7e4c47b53f8ccce16db641dd109c67a7a9fe6cfdcb250aa042e042a32c_prof);

        
        $__internal_c9b891904bf72b07df19c2e2bdcdc3576510b900243c35270b1e50ee4ac8ed2f->leave($__internal_c9b891904bf72b07df19c2e2bdcdc3576510b900243c35270b1e50ee4ac8ed2f_prof);

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
