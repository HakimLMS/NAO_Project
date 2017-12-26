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
        $__internal_6e475406c70f615fe5c8c48376409a52be6696b01dc6d715124560001b1ca682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e475406c70f615fe5c8c48376409a52be6696b01dc6d715124560001b1ca682->enter($__internal_6e475406c70f615fe5c8c48376409a52be6696b01dc6d715124560001b1ca682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_25d47a35a6a45ccac4adf1aa41a5615fc0703e7e9073f018486658559809be30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d47a35a6a45ccac4adf1aa41a5615fc0703e7e9073f018486658559809be30->enter($__internal_25d47a35a6a45ccac4adf1aa41a5615fc0703e7e9073f018486658559809be30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6e475406c70f615fe5c8c48376409a52be6696b01dc6d715124560001b1ca682->leave($__internal_6e475406c70f615fe5c8c48376409a52be6696b01dc6d715124560001b1ca682_prof);

        
        $__internal_25d47a35a6a45ccac4adf1aa41a5615fc0703e7e9073f018486658559809be30->leave($__internal_25d47a35a6a45ccac4adf1aa41a5615fc0703e7e9073f018486658559809be30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ee3cf99dadfe97fa9474114d87c45f3240d6d0070461f0dd1105845b6336f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ee3cf99dadfe97fa9474114d87c45f3240d6d0070461f0dd1105845b6336f9->enter($__internal_f4ee3cf99dadfe97fa9474114d87c45f3240d6d0070461f0dd1105845b6336f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44b5caa579d4986f05a501a55659ca74c7d26e9cad3c049c4e58866952887995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b5caa579d4986f05a501a55659ca74c7d26e9cad3c049c4e58866952887995->enter($__internal_44b5caa579d4986f05a501a55659ca74c7d26e9cad3c049c4e58866952887995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_44b5caa579d4986f05a501a55659ca74c7d26e9cad3c049c4e58866952887995->leave($__internal_44b5caa579d4986f05a501a55659ca74c7d26e9cad3c049c4e58866952887995_prof);

        
        $__internal_f4ee3cf99dadfe97fa9474114d87c45f3240d6d0070461f0dd1105845b6336f9->leave($__internal_f4ee3cf99dadfe97fa9474114d87c45f3240d6d0070461f0dd1105845b6336f9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4dc550fa87d300ffdb8e579ac3b8124469944e3e8881ac5bd9de7a7ded59dbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc550fa87d300ffdb8e579ac3b8124469944e3e8881ac5bd9de7a7ded59dbaa->enter($__internal_4dc550fa87d300ffdb8e579ac3b8124469944e3e8881ac5bd9de7a7ded59dbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd4965ed8dac95f06f77becbd98ff7cc453e6387d71a9c0a99aea1956d67f4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4965ed8dac95f06f77becbd98ff7cc453e6387d71a9c0a99aea1956d67f4d7->enter($__internal_cd4965ed8dac95f06f77becbd98ff7cc453e6387d71a9c0a99aea1956d67f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cd4965ed8dac95f06f77becbd98ff7cc453e6387d71a9c0a99aea1956d67f4d7->leave($__internal_cd4965ed8dac95f06f77becbd98ff7cc453e6387d71a9c0a99aea1956d67f4d7_prof);

        
        $__internal_4dc550fa87d300ffdb8e579ac3b8124469944e3e8881ac5bd9de7a7ded59dbaa->leave($__internal_4dc550fa87d300ffdb8e579ac3b8124469944e3e8881ac5bd9de7a7ded59dbaa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a7d7d138ef77fd8d6d5b3f9e191178d5fa203a326b3f9f92bb84cb0cce2e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a7d7d138ef77fd8d6d5b3f9e191178d5fa203a326b3f9f92bb84cb0cce2e84->enter($__internal_76a7d7d138ef77fd8d6d5b3f9e191178d5fa203a326b3f9f92bb84cb0cce2e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87c524594add8b11e4c677398aa24f82fe667aabce95bd46393b489b72ca68ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c524594add8b11e4c677398aa24f82fe667aabce95bd46393b489b72ca68ac->enter($__internal_87c524594add8b11e4c677398aa24f82fe667aabce95bd46393b489b72ca68ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87c524594add8b11e4c677398aa24f82fe667aabce95bd46393b489b72ca68ac->leave($__internal_87c524594add8b11e4c677398aa24f82fe667aabce95bd46393b489b72ca68ac_prof);

        
        $__internal_76a7d7d138ef77fd8d6d5b3f9e191178d5fa203a326b3f9f92bb84cb0cce2e84->leave($__internal_76a7d7d138ef77fd8d6d5b3f9e191178d5fa203a326b3f9f92bb84cb0cce2e84_prof);

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
