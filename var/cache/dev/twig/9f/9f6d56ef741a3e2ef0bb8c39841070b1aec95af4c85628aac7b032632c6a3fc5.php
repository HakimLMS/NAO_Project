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
        $__internal_af9539daecfb896c31815e4c783b1d4d18ebd929b4fb316abfca32224d957d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9539daecfb896c31815e4c783b1d4d18ebd929b4fb316abfca32224d957d12->enter($__internal_af9539daecfb896c31815e4c783b1d4d18ebd929b4fb316abfca32224d957d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9bba88edb69be4c08e0350d3ad510e9cc367726d215e30b1d24591654c3fb746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bba88edb69be4c08e0350d3ad510e9cc367726d215e30b1d24591654c3fb746->enter($__internal_9bba88edb69be4c08e0350d3ad510e9cc367726d215e30b1d24591654c3fb746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_af9539daecfb896c31815e4c783b1d4d18ebd929b4fb316abfca32224d957d12->leave($__internal_af9539daecfb896c31815e4c783b1d4d18ebd929b4fb316abfca32224d957d12_prof);

        
        $__internal_9bba88edb69be4c08e0350d3ad510e9cc367726d215e30b1d24591654c3fb746->leave($__internal_9bba88edb69be4c08e0350d3ad510e9cc367726d215e30b1d24591654c3fb746_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1603bc5e062b0f9848fd0f06a343437b13b69c942848ca6d1fc6c7b902a113ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1603bc5e062b0f9848fd0f06a343437b13b69c942848ca6d1fc6c7b902a113ff->enter($__internal_1603bc5e062b0f9848fd0f06a343437b13b69c942848ca6d1fc6c7b902a113ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d39ff7795307262bee78207f10872ddcf3a3bbd100a29b27c13e8f610d6b37c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39ff7795307262bee78207f10872ddcf3a3bbd100a29b27c13e8f610d6b37c8->enter($__internal_d39ff7795307262bee78207f10872ddcf3a3bbd100a29b27c13e8f610d6b37c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d39ff7795307262bee78207f10872ddcf3a3bbd100a29b27c13e8f610d6b37c8->leave($__internal_d39ff7795307262bee78207f10872ddcf3a3bbd100a29b27c13e8f610d6b37c8_prof);

        
        $__internal_1603bc5e062b0f9848fd0f06a343437b13b69c942848ca6d1fc6c7b902a113ff->leave($__internal_1603bc5e062b0f9848fd0f06a343437b13b69c942848ca6d1fc6c7b902a113ff_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecd459adbc4227f713795c12b22c11cadc8ce293ec509f54484f3620ec565595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd459adbc4227f713795c12b22c11cadc8ce293ec509f54484f3620ec565595->enter($__internal_ecd459adbc4227f713795c12b22c11cadc8ce293ec509f54484f3620ec565595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3108cb7ccf01f07edac123098452958e7aae5e77ef059ee53d3764d989389e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3108cb7ccf01f07edac123098452958e7aae5e77ef059ee53d3764d989389e8c->enter($__internal_3108cb7ccf01f07edac123098452958e7aae5e77ef059ee53d3764d989389e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3108cb7ccf01f07edac123098452958e7aae5e77ef059ee53d3764d989389e8c->leave($__internal_3108cb7ccf01f07edac123098452958e7aae5e77ef059ee53d3764d989389e8c_prof);

        
        $__internal_ecd459adbc4227f713795c12b22c11cadc8ce293ec509f54484f3620ec565595->leave($__internal_ecd459adbc4227f713795c12b22c11cadc8ce293ec509f54484f3620ec565595_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_97447b72c073fd581960fca060a33880bf03cbd5fa945beac4f3cd4dd259432a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97447b72c073fd581960fca060a33880bf03cbd5fa945beac4f3cd4dd259432a->enter($__internal_97447b72c073fd581960fca060a33880bf03cbd5fa945beac4f3cd4dd259432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e915bf0acf24285ffa30be881c3e7240a6347917fc2c8d931600d269527971e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e915bf0acf24285ffa30be881c3e7240a6347917fc2c8d931600d269527971e->enter($__internal_6e915bf0acf24285ffa30be881c3e7240a6347917fc2c8d931600d269527971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e915bf0acf24285ffa30be881c3e7240a6347917fc2c8d931600d269527971e->leave($__internal_6e915bf0acf24285ffa30be881c3e7240a6347917fc2c8d931600d269527971e_prof);

        
        $__internal_97447b72c073fd581960fca060a33880bf03cbd5fa945beac4f3cd4dd259432a->leave($__internal_97447b72c073fd581960fca060a33880bf03cbd5fa945beac4f3cd4dd259432a_prof);

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
