<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1fccbcb4bbe07d3bd48672c6a3bb4f7d505eb2ba00db6bb6d9dc9622320f96 extends Twig_Template
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
        $__internal_803f8e98447407e13fbf99894c8059ccd21bee0ae088c26aa19c5484862295b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803f8e98447407e13fbf99894c8059ccd21bee0ae088c26aa19c5484862295b9->enter($__internal_803f8e98447407e13fbf99894c8059ccd21bee0ae088c26aa19c5484862295b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ffe58622ca88d362431a1df85a13d59ffe3ed5ef5de88b2ab730de8468e97f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe58622ca88d362431a1df85a13d59ffe3ed5ef5de88b2ab730de8468e97f85->enter($__internal_ffe58622ca88d362431a1df85a13d59ffe3ed5ef5de88b2ab730de8468e97f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_803f8e98447407e13fbf99894c8059ccd21bee0ae088c26aa19c5484862295b9->leave($__internal_803f8e98447407e13fbf99894c8059ccd21bee0ae088c26aa19c5484862295b9_prof);

        
        $__internal_ffe58622ca88d362431a1df85a13d59ffe3ed5ef5de88b2ab730de8468e97f85->leave($__internal_ffe58622ca88d362431a1df85a13d59ffe3ed5ef5de88b2ab730de8468e97f85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ffd107e509e1db8e1877ad94f5c6b86cde645f9358c39af39b8230a59ea9ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffd107e509e1db8e1877ad94f5c6b86cde645f9358c39af39b8230a59ea9ab8->enter($__internal_0ffd107e509e1db8e1877ad94f5c6b86cde645f9358c39af39b8230a59ea9ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45e99b02f4a020551df02740244af7571b75752dd25eb6f0e451f9d60e76fbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e99b02f4a020551df02740244af7571b75752dd25eb6f0e451f9d60e76fbd6->enter($__internal_45e99b02f4a020551df02740244af7571b75752dd25eb6f0e451f9d60e76fbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_45e99b02f4a020551df02740244af7571b75752dd25eb6f0e451f9d60e76fbd6->leave($__internal_45e99b02f4a020551df02740244af7571b75752dd25eb6f0e451f9d60e76fbd6_prof);

        
        $__internal_0ffd107e509e1db8e1877ad94f5c6b86cde645f9358c39af39b8230a59ea9ab8->leave($__internal_0ffd107e509e1db8e1877ad94f5c6b86cde645f9358c39af39b8230a59ea9ab8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_814803b78f2819df65019cf73f74ee8dbc3454f7d992c5d45a97da0457a4144a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814803b78f2819df65019cf73f74ee8dbc3454f7d992c5d45a97da0457a4144a->enter($__internal_814803b78f2819df65019cf73f74ee8dbc3454f7d992c5d45a97da0457a4144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_926172e01023c44bd19ee1f405c31088eb6330f7375b75279d2aa04d4d6334ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926172e01023c44bd19ee1f405c31088eb6330f7375b75279d2aa04d4d6334ee->enter($__internal_926172e01023c44bd19ee1f405c31088eb6330f7375b75279d2aa04d4d6334ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_926172e01023c44bd19ee1f405c31088eb6330f7375b75279d2aa04d4d6334ee->leave($__internal_926172e01023c44bd19ee1f405c31088eb6330f7375b75279d2aa04d4d6334ee_prof);

        
        $__internal_814803b78f2819df65019cf73f74ee8dbc3454f7d992c5d45a97da0457a4144a->leave($__internal_814803b78f2819df65019cf73f74ee8dbc3454f7d992c5d45a97da0457a4144a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e1e374b0036335ca8d8e26fee7b41db30ff5e5d7e5b998d9a57c8f170a1b7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1e374b0036335ca8d8e26fee7b41db30ff5e5d7e5b998d9a57c8f170a1b7d8->enter($__internal_3e1e374b0036335ca8d8e26fee7b41db30ff5e5d7e5b998d9a57c8f170a1b7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b68e813f4dac83b153ef077263a3719fc762d51dc4a9b0dc9f77b6f30aaa0b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68e813f4dac83b153ef077263a3719fc762d51dc4a9b0dc9f77b6f30aaa0b64->enter($__internal_b68e813f4dac83b153ef077263a3719fc762d51dc4a9b0dc9f77b6f30aaa0b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b68e813f4dac83b153ef077263a3719fc762d51dc4a9b0dc9f77b6f30aaa0b64->leave($__internal_b68e813f4dac83b153ef077263a3719fc762d51dc4a9b0dc9f77b6f30aaa0b64_prof);

        
        $__internal_3e1e374b0036335ca8d8e26fee7b41db30ff5e5d7e5b998d9a57c8f170a1b7d8->leave($__internal_3e1e374b0036335ca8d8e26fee7b41db30ff5e5d7e5b998d9a57c8f170a1b7d8_prof);

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
", "@Twig/layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
