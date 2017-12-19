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
        $__internal_45d861c2ab7c80701420b99bb53b2dd5f76e54cf6205dcf7d3f9dd1f5825d533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d861c2ab7c80701420b99bb53b2dd5f76e54cf6205dcf7d3f9dd1f5825d533->enter($__internal_45d861c2ab7c80701420b99bb53b2dd5f76e54cf6205dcf7d3f9dd1f5825d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3092d85b239d05ecd3d45402f010c2d5797e339526e93621703b2d8ed5bb4fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3092d85b239d05ecd3d45402f010c2d5797e339526e93621703b2d8ed5bb4fb1->enter($__internal_3092d85b239d05ecd3d45402f010c2d5797e339526e93621703b2d8ed5bb4fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_45d861c2ab7c80701420b99bb53b2dd5f76e54cf6205dcf7d3f9dd1f5825d533->leave($__internal_45d861c2ab7c80701420b99bb53b2dd5f76e54cf6205dcf7d3f9dd1f5825d533_prof);

        
        $__internal_3092d85b239d05ecd3d45402f010c2d5797e339526e93621703b2d8ed5bb4fb1->leave($__internal_3092d85b239d05ecd3d45402f010c2d5797e339526e93621703b2d8ed5bb4fb1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_906886f4eec6a7777aa06c89f4465239282360a3601812e7dbc96b6032227b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906886f4eec6a7777aa06c89f4465239282360a3601812e7dbc96b6032227b72->enter($__internal_906886f4eec6a7777aa06c89f4465239282360a3601812e7dbc96b6032227b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1945363d9a05b2839bb96c68d24ae903b29f605f2b53f17fcfbe1dc0d6bea2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1945363d9a05b2839bb96c68d24ae903b29f605f2b53f17fcfbe1dc0d6bea2b->enter($__internal_c1945363d9a05b2839bb96c68d24ae903b29f605f2b53f17fcfbe1dc0d6bea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c1945363d9a05b2839bb96c68d24ae903b29f605f2b53f17fcfbe1dc0d6bea2b->leave($__internal_c1945363d9a05b2839bb96c68d24ae903b29f605f2b53f17fcfbe1dc0d6bea2b_prof);

        
        $__internal_906886f4eec6a7777aa06c89f4465239282360a3601812e7dbc96b6032227b72->leave($__internal_906886f4eec6a7777aa06c89f4465239282360a3601812e7dbc96b6032227b72_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d07bd4d3f76895182de4fed34d7180ccf9274f68e78e1dc472bf8197f78b6b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07bd4d3f76895182de4fed34d7180ccf9274f68e78e1dc472bf8197f78b6b04->enter($__internal_d07bd4d3f76895182de4fed34d7180ccf9274f68e78e1dc472bf8197f78b6b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e41d1d977da5bfde8a59b639f0ea31d9546d0edb070799bfaedd31c0cf609a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41d1d977da5bfde8a59b639f0ea31d9546d0edb070799bfaedd31c0cf609a50->enter($__internal_e41d1d977da5bfde8a59b639f0ea31d9546d0edb070799bfaedd31c0cf609a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e41d1d977da5bfde8a59b639f0ea31d9546d0edb070799bfaedd31c0cf609a50->leave($__internal_e41d1d977da5bfde8a59b639f0ea31d9546d0edb070799bfaedd31c0cf609a50_prof);

        
        $__internal_d07bd4d3f76895182de4fed34d7180ccf9274f68e78e1dc472bf8197f78b6b04->leave($__internal_d07bd4d3f76895182de4fed34d7180ccf9274f68e78e1dc472bf8197f78b6b04_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7537a5dac0ccfa515b91a60e6aaa4ae39452d0e55714b5d8199b8ea286c0901b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7537a5dac0ccfa515b91a60e6aaa4ae39452d0e55714b5d8199b8ea286c0901b->enter($__internal_7537a5dac0ccfa515b91a60e6aaa4ae39452d0e55714b5d8199b8ea286c0901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ef1e211bd7351ea3e84cb73441dc2eead59b96c28bbf504b8c78eb04100184f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef1e211bd7351ea3e84cb73441dc2eead59b96c28bbf504b8c78eb04100184f->enter($__internal_5ef1e211bd7351ea3e84cb73441dc2eead59b96c28bbf504b8c78eb04100184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ef1e211bd7351ea3e84cb73441dc2eead59b96c28bbf504b8c78eb04100184f->leave($__internal_5ef1e211bd7351ea3e84cb73441dc2eead59b96c28bbf504b8c78eb04100184f_prof);

        
        $__internal_7537a5dac0ccfa515b91a60e6aaa4ae39452d0e55714b5d8199b8ea286c0901b->leave($__internal_7537a5dac0ccfa515b91a60e6aaa4ae39452d0e55714b5d8199b8ea286c0901b_prof);

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
