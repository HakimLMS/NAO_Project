<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f55db766d1463b2556b290d0956361c7098c61b5f4462088ec68d2da5182c513 extends Twig_Template
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
        $__internal_02780cc822d63eeea064225a199a7c68e008b2a3a9701d8ba5c4876863c04645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02780cc822d63eeea064225a199a7c68e008b2a3a9701d8ba5c4876863c04645->enter($__internal_02780cc822d63eeea064225a199a7c68e008b2a3a9701d8ba5c4876863c04645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_afd45ef63103b3ac7676d38484dbc03282b208441ed89edaaa9e8a25774e306a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd45ef63103b3ac7676d38484dbc03282b208441ed89edaaa9e8a25774e306a->enter($__internal_afd45ef63103b3ac7676d38484dbc03282b208441ed89edaaa9e8a25774e306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_02780cc822d63eeea064225a199a7c68e008b2a3a9701d8ba5c4876863c04645->leave($__internal_02780cc822d63eeea064225a199a7c68e008b2a3a9701d8ba5c4876863c04645_prof);

        
        $__internal_afd45ef63103b3ac7676d38484dbc03282b208441ed89edaaa9e8a25774e306a->leave($__internal_afd45ef63103b3ac7676d38484dbc03282b208441ed89edaaa9e8a25774e306a_prof);

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
