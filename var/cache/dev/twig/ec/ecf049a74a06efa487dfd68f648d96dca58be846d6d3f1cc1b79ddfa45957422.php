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
        $__internal_33c5efbef494055bd5832251c8590a676b6ab0d3636a97dd65f70be807195698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c5efbef494055bd5832251c8590a676b6ab0d3636a97dd65f70be807195698->enter($__internal_33c5efbef494055bd5832251c8590a676b6ab0d3636a97dd65f70be807195698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_347636c4b477e6dedf26bc69592269bfc34e21c4574469a22a81acce7a0c030c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347636c4b477e6dedf26bc69592269bfc34e21c4574469a22a81acce7a0c030c->enter($__internal_347636c4b477e6dedf26bc69592269bfc34e21c4574469a22a81acce7a0c030c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_33c5efbef494055bd5832251c8590a676b6ab0d3636a97dd65f70be807195698->leave($__internal_33c5efbef494055bd5832251c8590a676b6ab0d3636a97dd65f70be807195698_prof);

        
        $__internal_347636c4b477e6dedf26bc69592269bfc34e21c4574469a22a81acce7a0c030c->leave($__internal_347636c4b477e6dedf26bc69592269bfc34e21c4574469a22a81acce7a0c030c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4fd67252d11fab9c30eb074f5660e7f928e47148bf100e10a6c36e5a8bd1a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fd67252d11fab9c30eb074f5660e7f928e47148bf100e10a6c36e5a8bd1a68->enter($__internal_f4fd67252d11fab9c30eb074f5660e7f928e47148bf100e10a6c36e5a8bd1a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b472319c69a34431189c5d8770e0cf53f0c1705faa6d85d88a826c6b51d9702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b472319c69a34431189c5d8770e0cf53f0c1705faa6d85d88a826c6b51d9702->enter($__internal_6b472319c69a34431189c5d8770e0cf53f0c1705faa6d85d88a826c6b51d9702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6b472319c69a34431189c5d8770e0cf53f0c1705faa6d85d88a826c6b51d9702->leave($__internal_6b472319c69a34431189c5d8770e0cf53f0c1705faa6d85d88a826c6b51d9702_prof);

        
        $__internal_f4fd67252d11fab9c30eb074f5660e7f928e47148bf100e10a6c36e5a8bd1a68->leave($__internal_f4fd67252d11fab9c30eb074f5660e7f928e47148bf100e10a6c36e5a8bd1a68_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_697c33a628632846e10965a5b5133f1ebaa7c6db5f439fef91cd75bebab1ec32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697c33a628632846e10965a5b5133f1ebaa7c6db5f439fef91cd75bebab1ec32->enter($__internal_697c33a628632846e10965a5b5133f1ebaa7c6db5f439fef91cd75bebab1ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa3bde7ca02250d1e3e442c1660a74ec287dc7325e4fb4028f8faefe1876798f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3bde7ca02250d1e3e442c1660a74ec287dc7325e4fb4028f8faefe1876798f->enter($__internal_fa3bde7ca02250d1e3e442c1660a74ec287dc7325e4fb4028f8faefe1876798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fa3bde7ca02250d1e3e442c1660a74ec287dc7325e4fb4028f8faefe1876798f->leave($__internal_fa3bde7ca02250d1e3e442c1660a74ec287dc7325e4fb4028f8faefe1876798f_prof);

        
        $__internal_697c33a628632846e10965a5b5133f1ebaa7c6db5f439fef91cd75bebab1ec32->leave($__internal_697c33a628632846e10965a5b5133f1ebaa7c6db5f439fef91cd75bebab1ec32_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c9f9122f2db42b05e86adb2ffa4452d8bf439ff9c98f6ec3749fb74b004af9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9f9122f2db42b05e86adb2ffa4452d8bf439ff9c98f6ec3749fb74b004af9b->enter($__internal_8c9f9122f2db42b05e86adb2ffa4452d8bf439ff9c98f6ec3749fb74b004af9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91116478b72dfdfb8402744e9a246cc922908df339c4a95ef4c729498f342751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91116478b72dfdfb8402744e9a246cc922908df339c4a95ef4c729498f342751->enter($__internal_91116478b72dfdfb8402744e9a246cc922908df339c4a95ef4c729498f342751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91116478b72dfdfb8402744e9a246cc922908df339c4a95ef4c729498f342751->leave($__internal_91116478b72dfdfb8402744e9a246cc922908df339c4a95ef4c729498f342751_prof);

        
        $__internal_8c9f9122f2db42b05e86adb2ffa4452d8bf439ff9c98f6ec3749fb74b004af9b->leave($__internal_8c9f9122f2db42b05e86adb2ffa4452d8bf439ff9c98f6ec3749fb74b004af9b_prof);

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
