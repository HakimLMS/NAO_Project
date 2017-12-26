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
        $__internal_0e920db045a65dbf2cf6451952828b4a2896d82e58bae28b1d8d1dab922995bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e920db045a65dbf2cf6451952828b4a2896d82e58bae28b1d8d1dab922995bc->enter($__internal_0e920db045a65dbf2cf6451952828b4a2896d82e58bae28b1d8d1dab922995bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b4838b7579d4ef3622a6d3cfa6dde4fdea7abd5c2308818919ab320daa9e4b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4838b7579d4ef3622a6d3cfa6dde4fdea7abd5c2308818919ab320daa9e4b05->enter($__internal_b4838b7579d4ef3622a6d3cfa6dde4fdea7abd5c2308818919ab320daa9e4b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
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
        
        $__internal_0e920db045a65dbf2cf6451952828b4a2896d82e58bae28b1d8d1dab922995bc->leave($__internal_0e920db045a65dbf2cf6451952828b4a2896d82e58bae28b1d8d1dab922995bc_prof);

        
        $__internal_b4838b7579d4ef3622a6d3cfa6dde4fdea7abd5c2308818919ab320daa9e4b05->leave($__internal_b4838b7579d4ef3622a6d3cfa6dde4fdea7abd5c2308818919ab320daa9e4b05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aa0c65f6366ffeae82d2e929d9f5a3c2376bd0a162e80e1c9300da099f41df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa0c65f6366ffeae82d2e929d9f5a3c2376bd0a162e80e1c9300da099f41df3->enter($__internal_7aa0c65f6366ffeae82d2e929d9f5a3c2376bd0a162e80e1c9300da099f41df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c597d6b8ed9a0164aa71eb77220cd4c0ebd935de5c3390fab2dd977977a61b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c597d6b8ed9a0164aa71eb77220cd4c0ebd935de5c3390fab2dd977977a61b8e->enter($__internal_c597d6b8ed9a0164aa71eb77220cd4c0ebd935de5c3390fab2dd977977a61b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c597d6b8ed9a0164aa71eb77220cd4c0ebd935de5c3390fab2dd977977a61b8e->leave($__internal_c597d6b8ed9a0164aa71eb77220cd4c0ebd935de5c3390fab2dd977977a61b8e_prof);

        
        $__internal_7aa0c65f6366ffeae82d2e929d9f5a3c2376bd0a162e80e1c9300da099f41df3->leave($__internal_7aa0c65f6366ffeae82d2e929d9f5a3c2376bd0a162e80e1c9300da099f41df3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df51da1687a158b3b645ad16bac8312d926ab83ef58643ee223fc5e7d32ab787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df51da1687a158b3b645ad16bac8312d926ab83ef58643ee223fc5e7d32ab787->enter($__internal_df51da1687a158b3b645ad16bac8312d926ab83ef58643ee223fc5e7d32ab787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f7cf4ad8a7e4266275e252c56442ecb9a92d823a700a96aff94257b2f3b4ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7cf4ad8a7e4266275e252c56442ecb9a92d823a700a96aff94257b2f3b4ca7->enter($__internal_9f7cf4ad8a7e4266275e252c56442ecb9a92d823a700a96aff94257b2f3b4ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f7cf4ad8a7e4266275e252c56442ecb9a92d823a700a96aff94257b2f3b4ca7->leave($__internal_9f7cf4ad8a7e4266275e252c56442ecb9a92d823a700a96aff94257b2f3b4ca7_prof);

        
        $__internal_df51da1687a158b3b645ad16bac8312d926ab83ef58643ee223fc5e7d32ab787->leave($__internal_df51da1687a158b3b645ad16bac8312d926ab83ef58643ee223fc5e7d32ab787_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4705e952591a8aeee30998df9eaee26ed4d887e5c9bffee3a3545f9f25bc7ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4705e952591a8aeee30998df9eaee26ed4d887e5c9bffee3a3545f9f25bc7ce0->enter($__internal_4705e952591a8aeee30998df9eaee26ed4d887e5c9bffee3a3545f9f25bc7ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0e4d882ae89cda0281520fa9f7848aa5f72b2803b1158e4fed29000d18b1178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e4d882ae89cda0281520fa9f7848aa5f72b2803b1158e4fed29000d18b1178->enter($__internal_b0e4d882ae89cda0281520fa9f7848aa5f72b2803b1158e4fed29000d18b1178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0e4d882ae89cda0281520fa9f7848aa5f72b2803b1158e4fed29000d18b1178->leave($__internal_b0e4d882ae89cda0281520fa9f7848aa5f72b2803b1158e4fed29000d18b1178_prof);

        
        $__internal_4705e952591a8aeee30998df9eaee26ed4d887e5c9bffee3a3545f9f25bc7ce0->leave($__internal_4705e952591a8aeee30998df9eaee26ed4d887e5c9bffee3a3545f9f25bc7ce0_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c21e17417beba3a67cae4b12c8f1a8e7e8794d690a198d4b42ce0aee782602bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21e17417beba3a67cae4b12c8f1a8e7e8794d690a198d4b42ce0aee782602bf->enter($__internal_c21e17417beba3a67cae4b12c8f1a8e7e8794d690a198d4b42ce0aee782602bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0fc8334498b0a14f2adbc488a839f648d8bfa370508f419cc186ca631b5bc876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc8334498b0a14f2adbc488a839f648d8bfa370508f419cc186ca631b5bc876->enter($__internal_0fc8334498b0a14f2adbc488a839f648d8bfa370508f419cc186ca631b5bc876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0fc8334498b0a14f2adbc488a839f648d8bfa370508f419cc186ca631b5bc876->leave($__internal_0fc8334498b0a14f2adbc488a839f648d8bfa370508f419cc186ca631b5bc876_prof);

        
        $__internal_c21e17417beba3a67cae4b12c8f1a8e7e8794d690a198d4b42ce0aee782602bf->leave($__internal_c21e17417beba3a67cae4b12c8f1a8e7e8794d690a198d4b42ce0aee782602bf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
