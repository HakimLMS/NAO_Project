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
        $__internal_0b606c33fe914b98f83c8ccd1f621f7ac795aa72847aaa94dd543478e0641566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b606c33fe914b98f83c8ccd1f621f7ac795aa72847aaa94dd543478e0641566->enter($__internal_0b606c33fe914b98f83c8ccd1f621f7ac795aa72847aaa94dd543478e0641566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_25b641d1598b81656f5a5ccb3a82b12b577522743c29f2f8810f7af5df60074a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b641d1598b81656f5a5ccb3a82b12b577522743c29f2f8810f7af5df60074a->enter($__internal_25b641d1598b81656f5a5ccb3a82b12b577522743c29f2f8810f7af5df60074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0b606c33fe914b98f83c8ccd1f621f7ac795aa72847aaa94dd543478e0641566->leave($__internal_0b606c33fe914b98f83c8ccd1f621f7ac795aa72847aaa94dd543478e0641566_prof);

        
        $__internal_25b641d1598b81656f5a5ccb3a82b12b577522743c29f2f8810f7af5df60074a->leave($__internal_25b641d1598b81656f5a5ccb3a82b12b577522743c29f2f8810f7af5df60074a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de8d37ead5deb99ef2dc058a57b6bea34a1ca79af674cd160545ad202fa1bdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8d37ead5deb99ef2dc058a57b6bea34a1ca79af674cd160545ad202fa1bdaf->enter($__internal_de8d37ead5deb99ef2dc058a57b6bea34a1ca79af674cd160545ad202fa1bdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5952dd409f693f082c987eaaf74db8a59a95d49469c1df05b71f47611f0d55b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5952dd409f693f082c987eaaf74db8a59a95d49469c1df05b71f47611f0d55b5->enter($__internal_5952dd409f693f082c987eaaf74db8a59a95d49469c1df05b71f47611f0d55b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5952dd409f693f082c987eaaf74db8a59a95d49469c1df05b71f47611f0d55b5->leave($__internal_5952dd409f693f082c987eaaf74db8a59a95d49469c1df05b71f47611f0d55b5_prof);

        
        $__internal_de8d37ead5deb99ef2dc058a57b6bea34a1ca79af674cd160545ad202fa1bdaf->leave($__internal_de8d37ead5deb99ef2dc058a57b6bea34a1ca79af674cd160545ad202fa1bdaf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b95f361117bacc66d282a0af230282cf5c66c042b9023ed1ffb11df707203d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95f361117bacc66d282a0af230282cf5c66c042b9023ed1ffb11df707203d51->enter($__internal_b95f361117bacc66d282a0af230282cf5c66c042b9023ed1ffb11df707203d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d531728c24214d2935b052629eb5be93bc74d282bc38e58c9246ac9ddfae5df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d531728c24214d2935b052629eb5be93bc74d282bc38e58c9246ac9ddfae5df7->enter($__internal_d531728c24214d2935b052629eb5be93bc74d282bc38e58c9246ac9ddfae5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d531728c24214d2935b052629eb5be93bc74d282bc38e58c9246ac9ddfae5df7->leave($__internal_d531728c24214d2935b052629eb5be93bc74d282bc38e58c9246ac9ddfae5df7_prof);

        
        $__internal_b95f361117bacc66d282a0af230282cf5c66c042b9023ed1ffb11df707203d51->leave($__internal_b95f361117bacc66d282a0af230282cf5c66c042b9023ed1ffb11df707203d51_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_931687b315ad03eaf071646a05fa6db8f2c74eebec88875df4123a2b8f6383b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931687b315ad03eaf071646a05fa6db8f2c74eebec88875df4123a2b8f6383b7->enter($__internal_931687b315ad03eaf071646a05fa6db8f2c74eebec88875df4123a2b8f6383b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0e58816e963b57ab35035f8f39afdbac5720faa074bbb14d3112b573dfe0cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e58816e963b57ab35035f8f39afdbac5720faa074bbb14d3112b573dfe0cfd->enter($__internal_c0e58816e963b57ab35035f8f39afdbac5720faa074bbb14d3112b573dfe0cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0e58816e963b57ab35035f8f39afdbac5720faa074bbb14d3112b573dfe0cfd->leave($__internal_c0e58816e963b57ab35035f8f39afdbac5720faa074bbb14d3112b573dfe0cfd_prof);

        
        $__internal_931687b315ad03eaf071646a05fa6db8f2c74eebec88875df4123a2b8f6383b7->leave($__internal_931687b315ad03eaf071646a05fa6db8f2c74eebec88875df4123a2b8f6383b7_prof);

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
