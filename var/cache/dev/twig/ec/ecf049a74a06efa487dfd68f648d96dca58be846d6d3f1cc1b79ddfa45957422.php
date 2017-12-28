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
        $__internal_1b3fd4459594ff5ee5895cad0ee6baba07a5a40de0bcece0fa7c67ec4e26acf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3fd4459594ff5ee5895cad0ee6baba07a5a40de0bcece0fa7c67ec4e26acf4->enter($__internal_1b3fd4459594ff5ee5895cad0ee6baba07a5a40de0bcece0fa7c67ec4e26acf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4834b17602dbe477bfb6e474ca8293854ac5c4f5f2733bc6378a91bd5e305447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4834b17602dbe477bfb6e474ca8293854ac5c4f5f2733bc6378a91bd5e305447->enter($__internal_4834b17602dbe477bfb6e474ca8293854ac5c4f5f2733bc6378a91bd5e305447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1b3fd4459594ff5ee5895cad0ee6baba07a5a40de0bcece0fa7c67ec4e26acf4->leave($__internal_1b3fd4459594ff5ee5895cad0ee6baba07a5a40de0bcece0fa7c67ec4e26acf4_prof);

        
        $__internal_4834b17602dbe477bfb6e474ca8293854ac5c4f5f2733bc6378a91bd5e305447->leave($__internal_4834b17602dbe477bfb6e474ca8293854ac5c4f5f2733bc6378a91bd5e305447_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085f02e72722a7dc446c14a416c9df8c8b801ad21285663b22e35a94f2543c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085f02e72722a7dc446c14a416c9df8c8b801ad21285663b22e35a94f2543c17->enter($__internal_085f02e72722a7dc446c14a416c9df8c8b801ad21285663b22e35a94f2543c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9462d3d726bf40d1a7335dc7beaf9e0bbdd4e6169ba868ee5df8bbedb4181d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9462d3d726bf40d1a7335dc7beaf9e0bbdd4e6169ba868ee5df8bbedb4181d2->enter($__internal_c9462d3d726bf40d1a7335dc7beaf9e0bbdd4e6169ba868ee5df8bbedb4181d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c9462d3d726bf40d1a7335dc7beaf9e0bbdd4e6169ba868ee5df8bbedb4181d2->leave($__internal_c9462d3d726bf40d1a7335dc7beaf9e0bbdd4e6169ba868ee5df8bbedb4181d2_prof);

        
        $__internal_085f02e72722a7dc446c14a416c9df8c8b801ad21285663b22e35a94f2543c17->leave($__internal_085f02e72722a7dc446c14a416c9df8c8b801ad21285663b22e35a94f2543c17_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_858d3804a2bb875e7e800460873b4b8446b559eba28d7a2a37519087301fcf41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858d3804a2bb875e7e800460873b4b8446b559eba28d7a2a37519087301fcf41->enter($__internal_858d3804a2bb875e7e800460873b4b8446b559eba28d7a2a37519087301fcf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9554d981a0ba5d73cae5299b5807cb0f492387099efbe6a1bb6ea8ba3433ec09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9554d981a0ba5d73cae5299b5807cb0f492387099efbe6a1bb6ea8ba3433ec09->enter($__internal_9554d981a0ba5d73cae5299b5807cb0f492387099efbe6a1bb6ea8ba3433ec09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9554d981a0ba5d73cae5299b5807cb0f492387099efbe6a1bb6ea8ba3433ec09->leave($__internal_9554d981a0ba5d73cae5299b5807cb0f492387099efbe6a1bb6ea8ba3433ec09_prof);

        
        $__internal_858d3804a2bb875e7e800460873b4b8446b559eba28d7a2a37519087301fcf41->leave($__internal_858d3804a2bb875e7e800460873b4b8446b559eba28d7a2a37519087301fcf41_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0573fb959a63349296afd498ac4313f0c045089cf562df0b701786221cfcf9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0573fb959a63349296afd498ac4313f0c045089cf562df0b701786221cfcf9f2->enter($__internal_0573fb959a63349296afd498ac4313f0c045089cf562df0b701786221cfcf9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40837b2e5c09396c902747958b7a7c3c4352b49df61ad80422b0233cc80b62a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40837b2e5c09396c902747958b7a7c3c4352b49df61ad80422b0233cc80b62a8->enter($__internal_40837b2e5c09396c902747958b7a7c3c4352b49df61ad80422b0233cc80b62a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40837b2e5c09396c902747958b7a7c3c4352b49df61ad80422b0233cc80b62a8->leave($__internal_40837b2e5c09396c902747958b7a7c3c4352b49df61ad80422b0233cc80b62a8_prof);

        
        $__internal_0573fb959a63349296afd498ac4313f0c045089cf562df0b701786221cfcf9f2->leave($__internal_0573fb959a63349296afd498ac4313f0c045089cf562df0b701786221cfcf9f2_prof);

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
