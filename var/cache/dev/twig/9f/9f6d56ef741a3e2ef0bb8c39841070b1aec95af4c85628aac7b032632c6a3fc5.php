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
        $__internal_bac0510fdf075691d4fe63769b62c499c30d6ecc23e3463f25a6b231d9bc4238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac0510fdf075691d4fe63769b62c499c30d6ecc23e3463f25a6b231d9bc4238->enter($__internal_bac0510fdf075691d4fe63769b62c499c30d6ecc23e3463f25a6b231d9bc4238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f6056169e801f95ff5109a1f117aca61b262a349727fe515ac63d4eefaa00438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6056169e801f95ff5109a1f117aca61b262a349727fe515ac63d4eefaa00438->enter($__internal_f6056169e801f95ff5109a1f117aca61b262a349727fe515ac63d4eefaa00438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bac0510fdf075691d4fe63769b62c499c30d6ecc23e3463f25a6b231d9bc4238->leave($__internal_bac0510fdf075691d4fe63769b62c499c30d6ecc23e3463f25a6b231d9bc4238_prof);

        
        $__internal_f6056169e801f95ff5109a1f117aca61b262a349727fe515ac63d4eefaa00438->leave($__internal_f6056169e801f95ff5109a1f117aca61b262a349727fe515ac63d4eefaa00438_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7891f5b98a3e023e88f750c7896a96f6076adc805e039473bd3679911c2d84f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7891f5b98a3e023e88f750c7896a96f6076adc805e039473bd3679911c2d84f7->enter($__internal_7891f5b98a3e023e88f750c7896a96f6076adc805e039473bd3679911c2d84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4065132028eeee7bfedecb26bb5b22d71a8ba175869332ef5ac7667646356f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4065132028eeee7bfedecb26bb5b22d71a8ba175869332ef5ac7667646356f85->enter($__internal_4065132028eeee7bfedecb26bb5b22d71a8ba175869332ef5ac7667646356f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4065132028eeee7bfedecb26bb5b22d71a8ba175869332ef5ac7667646356f85->leave($__internal_4065132028eeee7bfedecb26bb5b22d71a8ba175869332ef5ac7667646356f85_prof);

        
        $__internal_7891f5b98a3e023e88f750c7896a96f6076adc805e039473bd3679911c2d84f7->leave($__internal_7891f5b98a3e023e88f750c7896a96f6076adc805e039473bd3679911c2d84f7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7e962d016edfe2d8b80e2535d944bfb53cbd3cf87e4eff1f58bee1c4c9d195d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e962d016edfe2d8b80e2535d944bfb53cbd3cf87e4eff1f58bee1c4c9d195d->enter($__internal_a7e962d016edfe2d8b80e2535d944bfb53cbd3cf87e4eff1f58bee1c4c9d195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_232c272ecaa9f61be4dc2e15c80dbda17f9c39572e2befe4063886369c21cfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232c272ecaa9f61be4dc2e15c80dbda17f9c39572e2befe4063886369c21cfd8->enter($__internal_232c272ecaa9f61be4dc2e15c80dbda17f9c39572e2befe4063886369c21cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_232c272ecaa9f61be4dc2e15c80dbda17f9c39572e2befe4063886369c21cfd8->leave($__internal_232c272ecaa9f61be4dc2e15c80dbda17f9c39572e2befe4063886369c21cfd8_prof);

        
        $__internal_a7e962d016edfe2d8b80e2535d944bfb53cbd3cf87e4eff1f58bee1c4c9d195d->leave($__internal_a7e962d016edfe2d8b80e2535d944bfb53cbd3cf87e4eff1f58bee1c4c9d195d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_768ed7fb75cf0e663c9aedff835738dc5a464b393b3d7043e1b2df1e8c203ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768ed7fb75cf0e663c9aedff835738dc5a464b393b3d7043e1b2df1e8c203ecf->enter($__internal_768ed7fb75cf0e663c9aedff835738dc5a464b393b3d7043e1b2df1e8c203ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7667e048ea0465d62ead1208a91fd3c9f196c70062831df1efda47f5df8bd70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7667e048ea0465d62ead1208a91fd3c9f196c70062831df1efda47f5df8bd70f->enter($__internal_7667e048ea0465d62ead1208a91fd3c9f196c70062831df1efda47f5df8bd70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7667e048ea0465d62ead1208a91fd3c9f196c70062831df1efda47f5df8bd70f->leave($__internal_7667e048ea0465d62ead1208a91fd3c9f196c70062831df1efda47f5df8bd70f_prof);

        
        $__internal_768ed7fb75cf0e663c9aedff835738dc5a464b393b3d7043e1b2df1e8c203ecf->leave($__internal_768ed7fb75cf0e663c9aedff835738dc5a464b393b3d7043e1b2df1e8c203ecf_prof);

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
