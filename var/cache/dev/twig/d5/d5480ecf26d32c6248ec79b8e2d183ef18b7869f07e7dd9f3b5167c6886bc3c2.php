<?php

/* base.html.twig */
class __TwigTemplate_d677415250fbbc5080c07cd04424ba36e94a88114f6a364184b7ca339428e8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_542266a917ce951d973cd6ec3499bde5866653a3a2f990686a9d293f374e0c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542266a917ce951d973cd6ec3499bde5866653a3a2f990686a9d293f374e0c22->enter($__internal_542266a917ce951d973cd6ec3499bde5866653a3a2f990686a9d293f374e0c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b785ee4e96e296723029f94bc95e90e69e7de8ea24716e187242bea9801aa2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b785ee4e96e296723029f94bc95e90e69e7de8ea24716e187242bea9801aa2ab->enter($__internal_b785ee4e96e296723029f94bc95e90e69e7de8ea24716e187242bea9801aa2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_542266a917ce951d973cd6ec3499bde5866653a3a2f990686a9d293f374e0c22->leave($__internal_542266a917ce951d973cd6ec3499bde5866653a3a2f990686a9d293f374e0c22_prof);

        
        $__internal_b785ee4e96e296723029f94bc95e90e69e7de8ea24716e187242bea9801aa2ab->leave($__internal_b785ee4e96e296723029f94bc95e90e69e7de8ea24716e187242bea9801aa2ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9024b57d31ec3f0e3a67739468dd28df7576929d4a631efb317653c5c4d8097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9024b57d31ec3f0e3a67739468dd28df7576929d4a631efb317653c5c4d8097->enter($__internal_e9024b57d31ec3f0e3a67739468dd28df7576929d4a631efb317653c5c4d8097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ac4094e1c61e6c7b1dad67b6501435aff76d80137a62c84e0b4d8277540393f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac4094e1c61e6c7b1dad67b6501435aff76d80137a62c84e0b4d8277540393f->enter($__internal_3ac4094e1c61e6c7b1dad67b6501435aff76d80137a62c84e0b4d8277540393f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ac4094e1c61e6c7b1dad67b6501435aff76d80137a62c84e0b4d8277540393f->leave($__internal_3ac4094e1c61e6c7b1dad67b6501435aff76d80137a62c84e0b4d8277540393f_prof);

        
        $__internal_e9024b57d31ec3f0e3a67739468dd28df7576929d4a631efb317653c5c4d8097->leave($__internal_e9024b57d31ec3f0e3a67739468dd28df7576929d4a631efb317653c5c4d8097_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5245f3e05b634a5fdb5c559b9fe11e7ac93ae9ef81727850c32c405e28db2e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5245f3e05b634a5fdb5c559b9fe11e7ac93ae9ef81727850c32c405e28db2e5a->enter($__internal_5245f3e05b634a5fdb5c559b9fe11e7ac93ae9ef81727850c32c405e28db2e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2148203a53d383fbf97f027f82f83acf79051cbe164dbc79fca7d0fec71810c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2148203a53d383fbf97f027f82f83acf79051cbe164dbc79fca7d0fec71810c1->enter($__internal_2148203a53d383fbf97f027f82f83acf79051cbe164dbc79fca7d0fec71810c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2148203a53d383fbf97f027f82f83acf79051cbe164dbc79fca7d0fec71810c1->leave($__internal_2148203a53d383fbf97f027f82f83acf79051cbe164dbc79fca7d0fec71810c1_prof);

        
        $__internal_5245f3e05b634a5fdb5c559b9fe11e7ac93ae9ef81727850c32c405e28db2e5a->leave($__internal_5245f3e05b634a5fdb5c559b9fe11e7ac93ae9ef81727850c32c405e28db2e5a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc675c04eb7b643591ecf5a47de915df5f5f8cf6d2dd3f5616d7fb4d5ce0ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc675c04eb7b643591ecf5a47de915df5f5f8cf6d2dd3f5616d7fb4d5ce0ced->enter($__internal_2dc675c04eb7b643591ecf5a47de915df5f5f8cf6d2dd3f5616d7fb4d5ce0ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7d55291504679705bedb9a74d6a9be9bfd68d440cae8946004fa9d870764189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d55291504679705bedb9a74d6a9be9bfd68d440cae8946004fa9d870764189->enter($__internal_b7d55291504679705bedb9a74d6a9be9bfd68d440cae8946004fa9d870764189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7d55291504679705bedb9a74d6a9be9bfd68d440cae8946004fa9d870764189->leave($__internal_b7d55291504679705bedb9a74d6a9be9bfd68d440cae8946004fa9d870764189_prof);

        
        $__internal_2dc675c04eb7b643591ecf5a47de915df5f5f8cf6d2dd3f5616d7fb4d5ce0ced->leave($__internal_2dc675c04eb7b643591ecf5a47de915df5f5f8cf6d2dd3f5616d7fb4d5ce0ced_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3160b4521432604a35617d7527d06b1cf41dd3c8dc946e8590e3d56bf5391ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3160b4521432604a35617d7527d06b1cf41dd3c8dc946e8590e3d56bf5391ee8->enter($__internal_3160b4521432604a35617d7527d06b1cf41dd3c8dc946e8590e3d56bf5391ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ced0ed7e2d36f362b709df1511bd2029debcb5d95380c7bf50c26435ed9241f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced0ed7e2d36f362b709df1511bd2029debcb5d95380c7bf50c26435ed9241f4->enter($__internal_ced0ed7e2d36f362b709df1511bd2029debcb5d95380c7bf50c26435ed9241f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ced0ed7e2d36f362b709df1511bd2029debcb5d95380c7bf50c26435ed9241f4->leave($__internal_ced0ed7e2d36f362b709df1511bd2029debcb5d95380c7bf50c26435ed9241f4_prof);

        
        $__internal_3160b4521432604a35617d7527d06b1cf41dd3c8dc946e8590e3d56bf5391ee8->leave($__internal_3160b4521432604a35617d7527d06b1cf41dd3c8dc946e8590e3d56bf5391ee8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  96 => 9,  79 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
