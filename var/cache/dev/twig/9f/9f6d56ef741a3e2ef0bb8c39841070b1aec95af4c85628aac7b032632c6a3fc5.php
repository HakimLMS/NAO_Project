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
        $__internal_5d599f8eaeeb1090f673479170812082617afd3296ca9385fe0895e48bbb3b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d599f8eaeeb1090f673479170812082617afd3296ca9385fe0895e48bbb3b2c->enter($__internal_5d599f8eaeeb1090f673479170812082617afd3296ca9385fe0895e48bbb3b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_095617ef59db5684f764dd68781924c2b1a1742570ba2ae504c4b7e7d59a18a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095617ef59db5684f764dd68781924c2b1a1742570ba2ae504c4b7e7d59a18a4->enter($__internal_095617ef59db5684f764dd68781924c2b1a1742570ba2ae504c4b7e7d59a18a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5d599f8eaeeb1090f673479170812082617afd3296ca9385fe0895e48bbb3b2c->leave($__internal_5d599f8eaeeb1090f673479170812082617afd3296ca9385fe0895e48bbb3b2c_prof);

        
        $__internal_095617ef59db5684f764dd68781924c2b1a1742570ba2ae504c4b7e7d59a18a4->leave($__internal_095617ef59db5684f764dd68781924c2b1a1742570ba2ae504c4b7e7d59a18a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbe6031dc9d546191784fa706ccb62320ec9f3b4a5630f26e417caa5d101debe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe6031dc9d546191784fa706ccb62320ec9f3b4a5630f26e417caa5d101debe->enter($__internal_dbe6031dc9d546191784fa706ccb62320ec9f3b4a5630f26e417caa5d101debe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d60c2dca92e2cf2d979585bd615aadd5dcb70bc6786a847857f4fb3c613e0513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60c2dca92e2cf2d979585bd615aadd5dcb70bc6786a847857f4fb3c613e0513->enter($__internal_d60c2dca92e2cf2d979585bd615aadd5dcb70bc6786a847857f4fb3c613e0513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d60c2dca92e2cf2d979585bd615aadd5dcb70bc6786a847857f4fb3c613e0513->leave($__internal_d60c2dca92e2cf2d979585bd615aadd5dcb70bc6786a847857f4fb3c613e0513_prof);

        
        $__internal_dbe6031dc9d546191784fa706ccb62320ec9f3b4a5630f26e417caa5d101debe->leave($__internal_dbe6031dc9d546191784fa706ccb62320ec9f3b4a5630f26e417caa5d101debe_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fc4dfc3b5ec3bfae978a3cef3558df03b84c41b3d4b747507c1d5960166dc35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc4dfc3b5ec3bfae978a3cef3558df03b84c41b3d4b747507c1d5960166dc35->enter($__internal_3fc4dfc3b5ec3bfae978a3cef3558df03b84c41b3d4b747507c1d5960166dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a698466c73521ddc07187ec991297b5920ddb8168be9475f86b299ed3712f880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a698466c73521ddc07187ec991297b5920ddb8168be9475f86b299ed3712f880->enter($__internal_a698466c73521ddc07187ec991297b5920ddb8168be9475f86b299ed3712f880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a698466c73521ddc07187ec991297b5920ddb8168be9475f86b299ed3712f880->leave($__internal_a698466c73521ddc07187ec991297b5920ddb8168be9475f86b299ed3712f880_prof);

        
        $__internal_3fc4dfc3b5ec3bfae978a3cef3558df03b84c41b3d4b747507c1d5960166dc35->leave($__internal_3fc4dfc3b5ec3bfae978a3cef3558df03b84c41b3d4b747507c1d5960166dc35_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b640f054f254b781b0e273d540831118f1df8b8397d0424a8db5b5b27d0b7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b640f054f254b781b0e273d540831118f1df8b8397d0424a8db5b5b27d0b7c1->enter($__internal_3b640f054f254b781b0e273d540831118f1df8b8397d0424a8db5b5b27d0b7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5764fb81fcc430b9357c0b106f0a06d582c1f1b2cc7f4dbdeaba296f6d82b8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5764fb81fcc430b9357c0b106f0a06d582c1f1b2cc7f4dbdeaba296f6d82b8fd->enter($__internal_5764fb81fcc430b9357c0b106f0a06d582c1f1b2cc7f4dbdeaba296f6d82b8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5764fb81fcc430b9357c0b106f0a06d582c1f1b2cc7f4dbdeaba296f6d82b8fd->leave($__internal_5764fb81fcc430b9357c0b106f0a06d582c1f1b2cc7f4dbdeaba296f6d82b8fd_prof);

        
        $__internal_3b640f054f254b781b0e273d540831118f1df8b8397d0424a8db5b5b27d0b7c1->leave($__internal_3b640f054f254b781b0e273d540831118f1df8b8397d0424a8db5b5b27d0b7c1_prof);

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
