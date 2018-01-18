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
        $__internal_733289f8f72b5115e4924a8b703c938e8484c119ef2048bb6e4df352d24d420f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733289f8f72b5115e4924a8b703c938e8484c119ef2048bb6e4df352d24d420f->enter($__internal_733289f8f72b5115e4924a8b703c938e8484c119ef2048bb6e4df352d24d420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d88a634f77247f6990c8462fe521392bc4f02277b2c971c2e8c4dd8775b78d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88a634f77247f6990c8462fe521392bc4f02277b2c971c2e8c4dd8775b78d13->enter($__internal_d88a634f77247f6990c8462fe521392bc4f02277b2c971c2e8c4dd8775b78d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_733289f8f72b5115e4924a8b703c938e8484c119ef2048bb6e4df352d24d420f->leave($__internal_733289f8f72b5115e4924a8b703c938e8484c119ef2048bb6e4df352d24d420f_prof);

        
        $__internal_d88a634f77247f6990c8462fe521392bc4f02277b2c971c2e8c4dd8775b78d13->leave($__internal_d88a634f77247f6990c8462fe521392bc4f02277b2c971c2e8c4dd8775b78d13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91d7d4093453de2bcf9e7bf2170bcd056182be46f3936ec83896656d0844389a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d7d4093453de2bcf9e7bf2170bcd056182be46f3936ec83896656d0844389a->enter($__internal_91d7d4093453de2bcf9e7bf2170bcd056182be46f3936ec83896656d0844389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fcef640697c3770fa8d9d7f9a7dfaca6fc0cbd2708c8708ac6b413fb569b641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcef640697c3770fa8d9d7f9a7dfaca6fc0cbd2708c8708ac6b413fb569b641->enter($__internal_7fcef640697c3770fa8d9d7f9a7dfaca6fc0cbd2708c8708ac6b413fb569b641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7fcef640697c3770fa8d9d7f9a7dfaca6fc0cbd2708c8708ac6b413fb569b641->leave($__internal_7fcef640697c3770fa8d9d7f9a7dfaca6fc0cbd2708c8708ac6b413fb569b641_prof);

        
        $__internal_91d7d4093453de2bcf9e7bf2170bcd056182be46f3936ec83896656d0844389a->leave($__internal_91d7d4093453de2bcf9e7bf2170bcd056182be46f3936ec83896656d0844389a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_713e8178f6438157415a2477fa3a39fe1cb84c21a63b713c7d62ea2a76b6794f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713e8178f6438157415a2477fa3a39fe1cb84c21a63b713c7d62ea2a76b6794f->enter($__internal_713e8178f6438157415a2477fa3a39fe1cb84c21a63b713c7d62ea2a76b6794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51ffa20933f2279d198d02360885c684d4111f9c5b362265a9dbeec4933d4692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ffa20933f2279d198d02360885c684d4111f9c5b362265a9dbeec4933d4692->enter($__internal_51ffa20933f2279d198d02360885c684d4111f9c5b362265a9dbeec4933d4692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_51ffa20933f2279d198d02360885c684d4111f9c5b362265a9dbeec4933d4692->leave($__internal_51ffa20933f2279d198d02360885c684d4111f9c5b362265a9dbeec4933d4692_prof);

        
        $__internal_713e8178f6438157415a2477fa3a39fe1cb84c21a63b713c7d62ea2a76b6794f->leave($__internal_713e8178f6438157415a2477fa3a39fe1cb84c21a63b713c7d62ea2a76b6794f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_07f0af66df1df2a5d5f15358321e7c166c50cbf6c25464a861b280ee95a31b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f0af66df1df2a5d5f15358321e7c166c50cbf6c25464a861b280ee95a31b65->enter($__internal_07f0af66df1df2a5d5f15358321e7c166c50cbf6c25464a861b280ee95a31b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d039c4e0500e356c06f47fd300de4239ccda27885d7f2c3e9ed564233e4c663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d039c4e0500e356c06f47fd300de4239ccda27885d7f2c3e9ed564233e4c663->enter($__internal_5d039c4e0500e356c06f47fd300de4239ccda27885d7f2c3e9ed564233e4c663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d039c4e0500e356c06f47fd300de4239ccda27885d7f2c3e9ed564233e4c663->leave($__internal_5d039c4e0500e356c06f47fd300de4239ccda27885d7f2c3e9ed564233e4c663_prof);

        
        $__internal_07f0af66df1df2a5d5f15358321e7c166c50cbf6c25464a861b280ee95a31b65->leave($__internal_07f0af66df1df2a5d5f15358321e7c166c50cbf6c25464a861b280ee95a31b65_prof);

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
