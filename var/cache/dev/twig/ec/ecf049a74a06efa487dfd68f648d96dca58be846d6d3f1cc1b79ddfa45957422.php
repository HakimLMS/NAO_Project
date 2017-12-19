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
        $__internal_ac068072fd40952a9395bb3e7cdccd836b34b5933e3aadc93e3b9f7b8c38b820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac068072fd40952a9395bb3e7cdccd836b34b5933e3aadc93e3b9f7b8c38b820->enter($__internal_ac068072fd40952a9395bb3e7cdccd836b34b5933e3aadc93e3b9f7b8c38b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_abc93b6789de4e75f5d1b88537cbd29870d4ad2bac9ddad9742bf19929447221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc93b6789de4e75f5d1b88537cbd29870d4ad2bac9ddad9742bf19929447221->enter($__internal_abc93b6789de4e75f5d1b88537cbd29870d4ad2bac9ddad9742bf19929447221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ac068072fd40952a9395bb3e7cdccd836b34b5933e3aadc93e3b9f7b8c38b820->leave($__internal_ac068072fd40952a9395bb3e7cdccd836b34b5933e3aadc93e3b9f7b8c38b820_prof);

        
        $__internal_abc93b6789de4e75f5d1b88537cbd29870d4ad2bac9ddad9742bf19929447221->leave($__internal_abc93b6789de4e75f5d1b88537cbd29870d4ad2bac9ddad9742bf19929447221_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18031c926440fd126ac5cf4785e5ade6874be68066e42aaf2dad9b0fe2b3a496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18031c926440fd126ac5cf4785e5ade6874be68066e42aaf2dad9b0fe2b3a496->enter($__internal_18031c926440fd126ac5cf4785e5ade6874be68066e42aaf2dad9b0fe2b3a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ad8c2120917e1848bc1518023d2c3e00e2a90987a8c5deabf9cabdbaaf1bd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad8c2120917e1848bc1518023d2c3e00e2a90987a8c5deabf9cabdbaaf1bd17->enter($__internal_6ad8c2120917e1848bc1518023d2c3e00e2a90987a8c5deabf9cabdbaaf1bd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6ad8c2120917e1848bc1518023d2c3e00e2a90987a8c5deabf9cabdbaaf1bd17->leave($__internal_6ad8c2120917e1848bc1518023d2c3e00e2a90987a8c5deabf9cabdbaaf1bd17_prof);

        
        $__internal_18031c926440fd126ac5cf4785e5ade6874be68066e42aaf2dad9b0fe2b3a496->leave($__internal_18031c926440fd126ac5cf4785e5ade6874be68066e42aaf2dad9b0fe2b3a496_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_22bd5e89be0764ca43ccca313804864f49ecb792a23b433db3c11c077d2564fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bd5e89be0764ca43ccca313804864f49ecb792a23b433db3c11c077d2564fc->enter($__internal_22bd5e89be0764ca43ccca313804864f49ecb792a23b433db3c11c077d2564fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6270ff177c4a27ea9acd62e2c5e0f14159e8bc7a93584cc5b8a02e5fd74d6feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6270ff177c4a27ea9acd62e2c5e0f14159e8bc7a93584cc5b8a02e5fd74d6feb->enter($__internal_6270ff177c4a27ea9acd62e2c5e0f14159e8bc7a93584cc5b8a02e5fd74d6feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6270ff177c4a27ea9acd62e2c5e0f14159e8bc7a93584cc5b8a02e5fd74d6feb->leave($__internal_6270ff177c4a27ea9acd62e2c5e0f14159e8bc7a93584cc5b8a02e5fd74d6feb_prof);

        
        $__internal_22bd5e89be0764ca43ccca313804864f49ecb792a23b433db3c11c077d2564fc->leave($__internal_22bd5e89be0764ca43ccca313804864f49ecb792a23b433db3c11c077d2564fc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f536a3b79dafba6526521bf3a5c3699098e19d3b7c751d822ecebab3006bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f536a3b79dafba6526521bf3a5c3699098e19d3b7c751d822ecebab3006bd4->enter($__internal_a0f536a3b79dafba6526521bf3a5c3699098e19d3b7c751d822ecebab3006bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8436fd6b3b54935d261246de6e4db5e710c535d8f20522f7e4535e12a7dc75e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8436fd6b3b54935d261246de6e4db5e710c535d8f20522f7e4535e12a7dc75e9->enter($__internal_8436fd6b3b54935d261246de6e4db5e710c535d8f20522f7e4535e12a7dc75e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8436fd6b3b54935d261246de6e4db5e710c535d8f20522f7e4535e12a7dc75e9->leave($__internal_8436fd6b3b54935d261246de6e4db5e710c535d8f20522f7e4535e12a7dc75e9_prof);

        
        $__internal_a0f536a3b79dafba6526521bf3a5c3699098e19d3b7c751d822ecebab3006bd4->leave($__internal_a0f536a3b79dafba6526521bf3a5c3699098e19d3b7c751d822ecebab3006bd4_prof);

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
