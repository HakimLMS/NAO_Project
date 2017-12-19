<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_22f44d9e4f80600a8d885782131d70f1532e0c0b1fc16384e9ef2e4ecbb00df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2f489c69fd8ed3fbc35073c30b2dc08ab5436b4b6caca4ec27dd8a05821c709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f489c69fd8ed3fbc35073c30b2dc08ab5436b4b6caca4ec27dd8a05821c709->enter($__internal_a2f489c69fd8ed3fbc35073c30b2dc08ab5436b4b6caca4ec27dd8a05821c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fc72b594e897f5716029cc768b38df4544793b80359c7c3db78445a1bce83248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc72b594e897f5716029cc768b38df4544793b80359c7c3db78445a1bce83248->enter($__internal_fc72b594e897f5716029cc768b38df4544793b80359c7c3db78445a1bce83248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a2f489c69fd8ed3fbc35073c30b2dc08ab5436b4b6caca4ec27dd8a05821c709->leave($__internal_a2f489c69fd8ed3fbc35073c30b2dc08ab5436b4b6caca4ec27dd8a05821c709_prof);

        
        $__internal_fc72b594e897f5716029cc768b38df4544793b80359c7c3db78445a1bce83248->leave($__internal_fc72b594e897f5716029cc768b38df4544793b80359c7c3db78445a1bce83248_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e524ea804435e10edbb1dbe05e09e51b9a3434fb6e064659833ece89cb5710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e524ea804435e10edbb1dbe05e09e51b9a3434fb6e064659833ece89cb5710->enter($__internal_d1e524ea804435e10edbb1dbe05e09e51b9a3434fb6e064659833ece89cb5710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcde647d10c19a9f883d2bda91915f6aecab6a376b224b28100129ee4d55d7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcde647d10c19a9f883d2bda91915f6aecab6a376b224b28100129ee4d55d7f9->enter($__internal_bcde647d10c19a9f883d2bda91915f6aecab6a376b224b28100129ee4d55d7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bcde647d10c19a9f883d2bda91915f6aecab6a376b224b28100129ee4d55d7f9->leave($__internal_bcde647d10c19a9f883d2bda91915f6aecab6a376b224b28100129ee4d55d7f9_prof);

        
        $__internal_d1e524ea804435e10edbb1dbe05e09e51b9a3434fb6e064659833ece89cb5710->leave($__internal_d1e524ea804435e10edbb1dbe05e09e51b9a3434fb6e064659833ece89cb5710_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3339ad9a673fed16279dffc017f8963e664a11ae175ce22d6b5615cf8182e0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3339ad9a673fed16279dffc017f8963e664a11ae175ce22d6b5615cf8182e0c1->enter($__internal_3339ad9a673fed16279dffc017f8963e664a11ae175ce22d6b5615cf8182e0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33ce00b776986eab5ebcf36acb55f0cdac1e42482b0b98048da9be3fd728f82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ce00b776986eab5ebcf36acb55f0cdac1e42482b0b98048da9be3fd728f82e->enter($__internal_33ce00b776986eab5ebcf36acb55f0cdac1e42482b0b98048da9be3fd728f82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_33ce00b776986eab5ebcf36acb55f0cdac1e42482b0b98048da9be3fd728f82e->leave($__internal_33ce00b776986eab5ebcf36acb55f0cdac1e42482b0b98048da9be3fd728f82e_prof);

        
        $__internal_3339ad9a673fed16279dffc017f8963e664a11ae175ce22d6b5615cf8182e0c1->leave($__internal_3339ad9a673fed16279dffc017f8963e664a11ae175ce22d6b5615cf8182e0c1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_67dc4966db2468411cae1cfa48c3269151647240f72acaecd16d3ad49603c1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dc4966db2468411cae1cfa48c3269151647240f72acaecd16d3ad49603c1ee->enter($__internal_67dc4966db2468411cae1cfa48c3269151647240f72acaecd16d3ad49603c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fd65c8daf65f0743863a13b3f2b29591002e654f1adc3460ad90e72a71635a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd65c8daf65f0743863a13b3f2b29591002e654f1adc3460ad90e72a71635a0->enter($__internal_5fd65c8daf65f0743863a13b3f2b29591002e654f1adc3460ad90e72a71635a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5fd65c8daf65f0743863a13b3f2b29591002e654f1adc3460ad90e72a71635a0->leave($__internal_5fd65c8daf65f0743863a13b3f2b29591002e654f1adc3460ad90e72a71635a0_prof);

        
        $__internal_67dc4966db2468411cae1cfa48c3269151647240f72acaecd16d3ad49603c1ee->leave($__internal_67dc4966db2468411cae1cfa48c3269151647240f72acaecd16d3ad49603c1ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
