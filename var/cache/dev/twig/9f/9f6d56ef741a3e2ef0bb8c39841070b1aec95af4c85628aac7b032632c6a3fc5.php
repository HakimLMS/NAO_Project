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
        $__internal_d9f490c2c813d37599392c37e7638b0ddb3815b91f96c1cbe4ddd650a169ab7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f490c2c813d37599392c37e7638b0ddb3815b91f96c1cbe4ddd650a169ab7b->enter($__internal_d9f490c2c813d37599392c37e7638b0ddb3815b91f96c1cbe4ddd650a169ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_73b0a61db4ba14572a295fa483d3c38c92db2fb371a2d39e705b3a2da6db673a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b0a61db4ba14572a295fa483d3c38c92db2fb371a2d39e705b3a2da6db673a->enter($__internal_73b0a61db4ba14572a295fa483d3c38c92db2fb371a2d39e705b3a2da6db673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d9f490c2c813d37599392c37e7638b0ddb3815b91f96c1cbe4ddd650a169ab7b->leave($__internal_d9f490c2c813d37599392c37e7638b0ddb3815b91f96c1cbe4ddd650a169ab7b_prof);

        
        $__internal_73b0a61db4ba14572a295fa483d3c38c92db2fb371a2d39e705b3a2da6db673a->leave($__internal_73b0a61db4ba14572a295fa483d3c38c92db2fb371a2d39e705b3a2da6db673a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c519e9f642bfb0a7f6163b9d7e18d4040949941bd06a4bf5eb76a38a83e1a2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c519e9f642bfb0a7f6163b9d7e18d4040949941bd06a4bf5eb76a38a83e1a2b6->enter($__internal_c519e9f642bfb0a7f6163b9d7e18d4040949941bd06a4bf5eb76a38a83e1a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03b10ceed6e1a4db5223e4352f519f73620ffa46d0b54916d923876896b12c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b10ceed6e1a4db5223e4352f519f73620ffa46d0b54916d923876896b12c63->enter($__internal_03b10ceed6e1a4db5223e4352f519f73620ffa46d0b54916d923876896b12c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_03b10ceed6e1a4db5223e4352f519f73620ffa46d0b54916d923876896b12c63->leave($__internal_03b10ceed6e1a4db5223e4352f519f73620ffa46d0b54916d923876896b12c63_prof);

        
        $__internal_c519e9f642bfb0a7f6163b9d7e18d4040949941bd06a4bf5eb76a38a83e1a2b6->leave($__internal_c519e9f642bfb0a7f6163b9d7e18d4040949941bd06a4bf5eb76a38a83e1a2b6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f66cec58ec5f9a24014cd27ba92a95a75642664fdc0259dda99fa78432961c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66cec58ec5f9a24014cd27ba92a95a75642664fdc0259dda99fa78432961c98->enter($__internal_f66cec58ec5f9a24014cd27ba92a95a75642664fdc0259dda99fa78432961c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b59578564f92d4b60e94115ed19f4faf988f589c017b37c636348a9117968b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59578564f92d4b60e94115ed19f4faf988f589c017b37c636348a9117968b68->enter($__internal_b59578564f92d4b60e94115ed19f4faf988f589c017b37c636348a9117968b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b59578564f92d4b60e94115ed19f4faf988f589c017b37c636348a9117968b68->leave($__internal_b59578564f92d4b60e94115ed19f4faf988f589c017b37c636348a9117968b68_prof);

        
        $__internal_f66cec58ec5f9a24014cd27ba92a95a75642664fdc0259dda99fa78432961c98->leave($__internal_f66cec58ec5f9a24014cd27ba92a95a75642664fdc0259dda99fa78432961c98_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f38e18e1c235541f9cbaf2703df503d743c74214cfb555b8739eaca8dfaa772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f38e18e1c235541f9cbaf2703df503d743c74214cfb555b8739eaca8dfaa772->enter($__internal_4f38e18e1c235541f9cbaf2703df503d743c74214cfb555b8739eaca8dfaa772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eb16c2c58f6f77022f6490b0feb27e659d5ce4df663d5217e409d9dbc2119f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb16c2c58f6f77022f6490b0feb27e659d5ce4df663d5217e409d9dbc2119f0->enter($__internal_3eb16c2c58f6f77022f6490b0feb27e659d5ce4df663d5217e409d9dbc2119f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3eb16c2c58f6f77022f6490b0feb27e659d5ce4df663d5217e409d9dbc2119f0->leave($__internal_3eb16c2c58f6f77022f6490b0feb27e659d5ce4df663d5217e409d9dbc2119f0_prof);

        
        $__internal_4f38e18e1c235541f9cbaf2703df503d743c74214cfb555b8739eaca8dfaa772->leave($__internal_4f38e18e1c235541f9cbaf2703df503d743c74214cfb555b8739eaca8dfaa772_prof);

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
