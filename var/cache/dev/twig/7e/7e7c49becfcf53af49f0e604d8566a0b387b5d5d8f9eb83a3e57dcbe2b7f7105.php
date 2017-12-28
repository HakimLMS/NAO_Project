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
        $__internal_c777268b2de18d926d5988e7a046435e61cef6dbc0be178c2e04e667b6dbb3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c777268b2de18d926d5988e7a046435e61cef6dbc0be178c2e04e667b6dbb3b0->enter($__internal_c777268b2de18d926d5988e7a046435e61cef6dbc0be178c2e04e667b6dbb3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fd232aa9f4b300ba2ad1e8b6cfc5c93d430229c9136b2d3385633086fe400258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd232aa9f4b300ba2ad1e8b6cfc5c93d430229c9136b2d3385633086fe400258->enter($__internal_fd232aa9f4b300ba2ad1e8b6cfc5c93d430229c9136b2d3385633086fe400258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c777268b2de18d926d5988e7a046435e61cef6dbc0be178c2e04e667b6dbb3b0->leave($__internal_c777268b2de18d926d5988e7a046435e61cef6dbc0be178c2e04e667b6dbb3b0_prof);

        
        $__internal_fd232aa9f4b300ba2ad1e8b6cfc5c93d430229c9136b2d3385633086fe400258->leave($__internal_fd232aa9f4b300ba2ad1e8b6cfc5c93d430229c9136b2d3385633086fe400258_prof);

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
