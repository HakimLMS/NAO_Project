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
        $__internal_61d50ba93ae2a4ffe52339da80ae1785268779b21a3ae4e9cce14d09b450d9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d50ba93ae2a4ffe52339da80ae1785268779b21a3ae4e9cce14d09b450d9d7->enter($__internal_61d50ba93ae2a4ffe52339da80ae1785268779b21a3ae4e9cce14d09b450d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_61e3f62a22fca4e2bd86287efaa890baf1377c2405773569871034ae20b6609c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e3f62a22fca4e2bd86287efaa890baf1377c2405773569871034ae20b6609c->enter($__internal_61e3f62a22fca4e2bd86287efaa890baf1377c2405773569871034ae20b6609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_61d50ba93ae2a4ffe52339da80ae1785268779b21a3ae4e9cce14d09b450d9d7->leave($__internal_61d50ba93ae2a4ffe52339da80ae1785268779b21a3ae4e9cce14d09b450d9d7_prof);

        
        $__internal_61e3f62a22fca4e2bd86287efaa890baf1377c2405773569871034ae20b6609c->leave($__internal_61e3f62a22fca4e2bd86287efaa890baf1377c2405773569871034ae20b6609c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6db25e13950019ec15aae229161f80c109e1885edbf31d9ae5aa6ef68a0bfe20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db25e13950019ec15aae229161f80c109e1885edbf31d9ae5aa6ef68a0bfe20->enter($__internal_6db25e13950019ec15aae229161f80c109e1885edbf31d9ae5aa6ef68a0bfe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_497921b833befdbfaffd3c4cccbe2458925c70691b3527b994237c25ac28955a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497921b833befdbfaffd3c4cccbe2458925c70691b3527b994237c25ac28955a->enter($__internal_497921b833befdbfaffd3c4cccbe2458925c70691b3527b994237c25ac28955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_497921b833befdbfaffd3c4cccbe2458925c70691b3527b994237c25ac28955a->leave($__internal_497921b833befdbfaffd3c4cccbe2458925c70691b3527b994237c25ac28955a_prof);

        
        $__internal_6db25e13950019ec15aae229161f80c109e1885edbf31d9ae5aa6ef68a0bfe20->leave($__internal_6db25e13950019ec15aae229161f80c109e1885edbf31d9ae5aa6ef68a0bfe20_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f483049c6e922d0b7c29560804b57a8741d7212f5240d7c855f75a5fdd88d138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f483049c6e922d0b7c29560804b57a8741d7212f5240d7c855f75a5fdd88d138->enter($__internal_f483049c6e922d0b7c29560804b57a8741d7212f5240d7c855f75a5fdd88d138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b6fd74ffd8a0ff64158b27345845fee3484713c9eac72477c7e181e93cec538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6fd74ffd8a0ff64158b27345845fee3484713c9eac72477c7e181e93cec538->enter($__internal_0b6fd74ffd8a0ff64158b27345845fee3484713c9eac72477c7e181e93cec538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0b6fd74ffd8a0ff64158b27345845fee3484713c9eac72477c7e181e93cec538->leave($__internal_0b6fd74ffd8a0ff64158b27345845fee3484713c9eac72477c7e181e93cec538_prof);

        
        $__internal_f483049c6e922d0b7c29560804b57a8741d7212f5240d7c855f75a5fdd88d138->leave($__internal_f483049c6e922d0b7c29560804b57a8741d7212f5240d7c855f75a5fdd88d138_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ac95298d4b6c7e051f3be2e002f1aba9e66b82332a2ed401801b2b347746bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac95298d4b6c7e051f3be2e002f1aba9e66b82332a2ed401801b2b347746bd8->enter($__internal_9ac95298d4b6c7e051f3be2e002f1aba9e66b82332a2ed401801b2b347746bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e72cbe9da08f0345c562cf559037758389fe0889d78dde37b1702f0a3a6ff32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72cbe9da08f0345c562cf559037758389fe0889d78dde37b1702f0a3a6ff32e->enter($__internal_e72cbe9da08f0345c562cf559037758389fe0889d78dde37b1702f0a3a6ff32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e72cbe9da08f0345c562cf559037758389fe0889d78dde37b1702f0a3a6ff32e->leave($__internal_e72cbe9da08f0345c562cf559037758389fe0889d78dde37b1702f0a3a6ff32e_prof);

        
        $__internal_9ac95298d4b6c7e051f3be2e002f1aba9e66b82332a2ed401801b2b347746bd8->leave($__internal_9ac95298d4b6c7e051f3be2e002f1aba9e66b82332a2ed401801b2b347746bd8_prof);

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
