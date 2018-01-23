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
        $__internal_ff686991ac561ac5f0c63b41140690ca0fe9448b98c93f0e9e2d3651723bd18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff686991ac561ac5f0c63b41140690ca0fe9448b98c93f0e9e2d3651723bd18a->enter($__internal_ff686991ac561ac5f0c63b41140690ca0fe9448b98c93f0e9e2d3651723bd18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_217b911b5ff04eadf79dd717a9b8ffeccb6b1b95d30f2a1c6c7998c8f4e47631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217b911b5ff04eadf79dd717a9b8ffeccb6b1b95d30f2a1c6c7998c8f4e47631->enter($__internal_217b911b5ff04eadf79dd717a9b8ffeccb6b1b95d30f2a1c6c7998c8f4e47631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ff686991ac561ac5f0c63b41140690ca0fe9448b98c93f0e9e2d3651723bd18a->leave($__internal_ff686991ac561ac5f0c63b41140690ca0fe9448b98c93f0e9e2d3651723bd18a_prof);

        
        $__internal_217b911b5ff04eadf79dd717a9b8ffeccb6b1b95d30f2a1c6c7998c8f4e47631->leave($__internal_217b911b5ff04eadf79dd717a9b8ffeccb6b1b95d30f2a1c6c7998c8f4e47631_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26ef5344661b11afdfee3d867e2d56c126408bb3faf08989b1213ca90e04d4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ef5344661b11afdfee3d867e2d56c126408bb3faf08989b1213ca90e04d4d1->enter($__internal_26ef5344661b11afdfee3d867e2d56c126408bb3faf08989b1213ca90e04d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba7e3882e7ea4d0052bd334ae329c748802d3f0a5841ac061e9eb95f4c9139db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7e3882e7ea4d0052bd334ae329c748802d3f0a5841ac061e9eb95f4c9139db->enter($__internal_ba7e3882e7ea4d0052bd334ae329c748802d3f0a5841ac061e9eb95f4c9139db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ba7e3882e7ea4d0052bd334ae329c748802d3f0a5841ac061e9eb95f4c9139db->leave($__internal_ba7e3882e7ea4d0052bd334ae329c748802d3f0a5841ac061e9eb95f4c9139db_prof);

        
        $__internal_26ef5344661b11afdfee3d867e2d56c126408bb3faf08989b1213ca90e04d4d1->leave($__internal_26ef5344661b11afdfee3d867e2d56c126408bb3faf08989b1213ca90e04d4d1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_417a4b85628b1d57b978d63bc02ada05462193074134a5da7c9944da6000f94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417a4b85628b1d57b978d63bc02ada05462193074134a5da7c9944da6000f94a->enter($__internal_417a4b85628b1d57b978d63bc02ada05462193074134a5da7c9944da6000f94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_662804bf44a6f4409c460cd54c92376e01035cb0a2c2a4d0787375c6deab8c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662804bf44a6f4409c460cd54c92376e01035cb0a2c2a4d0787375c6deab8c26->enter($__internal_662804bf44a6f4409c460cd54c92376e01035cb0a2c2a4d0787375c6deab8c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_662804bf44a6f4409c460cd54c92376e01035cb0a2c2a4d0787375c6deab8c26->leave($__internal_662804bf44a6f4409c460cd54c92376e01035cb0a2c2a4d0787375c6deab8c26_prof);

        
        $__internal_417a4b85628b1d57b978d63bc02ada05462193074134a5da7c9944da6000f94a->leave($__internal_417a4b85628b1d57b978d63bc02ada05462193074134a5da7c9944da6000f94a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_732426a6b4e2d3d41d617d17ae0f692f71851804d9db8df5d2d1200a0699e306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732426a6b4e2d3d41d617d17ae0f692f71851804d9db8df5d2d1200a0699e306->enter($__internal_732426a6b4e2d3d41d617d17ae0f692f71851804d9db8df5d2d1200a0699e306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f89857ed2193a48723eb202d77c63c779ec27a3eb722eeaf873fb5514aa03787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89857ed2193a48723eb202d77c63c779ec27a3eb722eeaf873fb5514aa03787->enter($__internal_f89857ed2193a48723eb202d77c63c779ec27a3eb722eeaf873fb5514aa03787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f89857ed2193a48723eb202d77c63c779ec27a3eb722eeaf873fb5514aa03787->leave($__internal_f89857ed2193a48723eb202d77c63c779ec27a3eb722eeaf873fb5514aa03787_prof);

        
        $__internal_732426a6b4e2d3d41d617d17ae0f692f71851804d9db8df5d2d1200a0699e306->leave($__internal_732426a6b4e2d3d41d617d17ae0f692f71851804d9db8df5d2d1200a0699e306_prof);

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
