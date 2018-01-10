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
        $__internal_cdaa2258b42095a2bea8846220a3f459b5123500acdc1aa1f4d8462488ddf589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdaa2258b42095a2bea8846220a3f459b5123500acdc1aa1f4d8462488ddf589->enter($__internal_cdaa2258b42095a2bea8846220a3f459b5123500acdc1aa1f4d8462488ddf589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ed5d2b00621391c8c838dd9975d5561c945be9f5526c0711eba8db9227864d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5d2b00621391c8c838dd9975d5561c945be9f5526c0711eba8db9227864d4e->enter($__internal_ed5d2b00621391c8c838dd9975d5561c945be9f5526c0711eba8db9227864d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cdaa2258b42095a2bea8846220a3f459b5123500acdc1aa1f4d8462488ddf589->leave($__internal_cdaa2258b42095a2bea8846220a3f459b5123500acdc1aa1f4d8462488ddf589_prof);

        
        $__internal_ed5d2b00621391c8c838dd9975d5561c945be9f5526c0711eba8db9227864d4e->leave($__internal_ed5d2b00621391c8c838dd9975d5561c945be9f5526c0711eba8db9227864d4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eb526b14dba7ee84858c00a8b5156c3540f2c66e4a5c377265c5a2dd6cb7342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb526b14dba7ee84858c00a8b5156c3540f2c66e4a5c377265c5a2dd6cb7342->enter($__internal_8eb526b14dba7ee84858c00a8b5156c3540f2c66e4a5c377265c5a2dd6cb7342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78f401788db800b320a911d672bce9cce8b9e68f70ed1cf7deb597af0b2d0eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f401788db800b320a911d672bce9cce8b9e68f70ed1cf7deb597af0b2d0eb3->enter($__internal_78f401788db800b320a911d672bce9cce8b9e68f70ed1cf7deb597af0b2d0eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_78f401788db800b320a911d672bce9cce8b9e68f70ed1cf7deb597af0b2d0eb3->leave($__internal_78f401788db800b320a911d672bce9cce8b9e68f70ed1cf7deb597af0b2d0eb3_prof);

        
        $__internal_8eb526b14dba7ee84858c00a8b5156c3540f2c66e4a5c377265c5a2dd6cb7342->leave($__internal_8eb526b14dba7ee84858c00a8b5156c3540f2c66e4a5c377265c5a2dd6cb7342_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c69bac2d41e721c2c769cb3f2ce9c1b998c37ef5369aa3c4aad36cb0e701664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c69bac2d41e721c2c769cb3f2ce9c1b998c37ef5369aa3c4aad36cb0e701664->enter($__internal_8c69bac2d41e721c2c769cb3f2ce9c1b998c37ef5369aa3c4aad36cb0e701664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebde2c0a746f15aeb78107f7069741822342e87df4a38c02117e50f6293e343b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebde2c0a746f15aeb78107f7069741822342e87df4a38c02117e50f6293e343b->enter($__internal_ebde2c0a746f15aeb78107f7069741822342e87df4a38c02117e50f6293e343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ebde2c0a746f15aeb78107f7069741822342e87df4a38c02117e50f6293e343b->leave($__internal_ebde2c0a746f15aeb78107f7069741822342e87df4a38c02117e50f6293e343b_prof);

        
        $__internal_8c69bac2d41e721c2c769cb3f2ce9c1b998c37ef5369aa3c4aad36cb0e701664->leave($__internal_8c69bac2d41e721c2c769cb3f2ce9c1b998c37ef5369aa3c4aad36cb0e701664_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_841d60d58b7619780194409e7f87ecb7b1f16c4c017eb507a13e18b9c81a5d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841d60d58b7619780194409e7f87ecb7b1f16c4c017eb507a13e18b9c81a5d2d->enter($__internal_841d60d58b7619780194409e7f87ecb7b1f16c4c017eb507a13e18b9c81a5d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1d5b3c8e10c1d7598b51bc603d01ca63f2c8578a65a1a7ab753662e6d009576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d5b3c8e10c1d7598b51bc603d01ca63f2c8578a65a1a7ab753662e6d009576->enter($__internal_c1d5b3c8e10c1d7598b51bc603d01ca63f2c8578a65a1a7ab753662e6d009576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1d5b3c8e10c1d7598b51bc603d01ca63f2c8578a65a1a7ab753662e6d009576->leave($__internal_c1d5b3c8e10c1d7598b51bc603d01ca63f2c8578a65a1a7ab753662e6d009576_prof);

        
        $__internal_841d60d58b7619780194409e7f87ecb7b1f16c4c017eb507a13e18b9c81a5d2d->leave($__internal_841d60d58b7619780194409e7f87ecb7b1f16c4c017eb507a13e18b9c81a5d2d_prof);

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
