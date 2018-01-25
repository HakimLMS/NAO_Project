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
        $__internal_3c20fb808c5a3d1b2de49cb04b2c125537bfb5e9162d2f18716e7511fbb7fbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c20fb808c5a3d1b2de49cb04b2c125537bfb5e9162d2f18716e7511fbb7fbe2->enter($__internal_3c20fb808c5a3d1b2de49cb04b2c125537bfb5e9162d2f18716e7511fbb7fbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1e88ac6b5ed92f584a056003018f56d1799630779a8bf3f5b00d1949a312cb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e88ac6b5ed92f584a056003018f56d1799630779a8bf3f5b00d1949a312cb17->enter($__internal_1e88ac6b5ed92f584a056003018f56d1799630779a8bf3f5b00d1949a312cb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3c20fb808c5a3d1b2de49cb04b2c125537bfb5e9162d2f18716e7511fbb7fbe2->leave($__internal_3c20fb808c5a3d1b2de49cb04b2c125537bfb5e9162d2f18716e7511fbb7fbe2_prof);

        
        $__internal_1e88ac6b5ed92f584a056003018f56d1799630779a8bf3f5b00d1949a312cb17->leave($__internal_1e88ac6b5ed92f584a056003018f56d1799630779a8bf3f5b00d1949a312cb17_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf773caea6c632bec367573e58814fa6d1797c4103f56f618b231d1995b445ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf773caea6c632bec367573e58814fa6d1797c4103f56f618b231d1995b445ba->enter($__internal_cf773caea6c632bec367573e58814fa6d1797c4103f56f618b231d1995b445ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45a642117df0740676c18896d571387c201ab7e7f60d7290e4eb8042af7d9376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a642117df0740676c18896d571387c201ab7e7f60d7290e4eb8042af7d9376->enter($__internal_45a642117df0740676c18896d571387c201ab7e7f60d7290e4eb8042af7d9376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_45a642117df0740676c18896d571387c201ab7e7f60d7290e4eb8042af7d9376->leave($__internal_45a642117df0740676c18896d571387c201ab7e7f60d7290e4eb8042af7d9376_prof);

        
        $__internal_cf773caea6c632bec367573e58814fa6d1797c4103f56f618b231d1995b445ba->leave($__internal_cf773caea6c632bec367573e58814fa6d1797c4103f56f618b231d1995b445ba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c6c43b7176119bba5378d22361dbd43cc6f6172500c31b25e88a3c573e07b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6c43b7176119bba5378d22361dbd43cc6f6172500c31b25e88a3c573e07b89->enter($__internal_3c6c43b7176119bba5378d22361dbd43cc6f6172500c31b25e88a3c573e07b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_392df6254f4639b47760d0aa83977ad0e30c8b2d483ce7027db04b1e9a4ba1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392df6254f4639b47760d0aa83977ad0e30c8b2d483ce7027db04b1e9a4ba1ba->enter($__internal_392df6254f4639b47760d0aa83977ad0e30c8b2d483ce7027db04b1e9a4ba1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_392df6254f4639b47760d0aa83977ad0e30c8b2d483ce7027db04b1e9a4ba1ba->leave($__internal_392df6254f4639b47760d0aa83977ad0e30c8b2d483ce7027db04b1e9a4ba1ba_prof);

        
        $__internal_3c6c43b7176119bba5378d22361dbd43cc6f6172500c31b25e88a3c573e07b89->leave($__internal_3c6c43b7176119bba5378d22361dbd43cc6f6172500c31b25e88a3c573e07b89_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9758bc5e3c608a442ad3efbd360562f9b32d64cfbb7e130742d1c82f9afaa22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9758bc5e3c608a442ad3efbd360562f9b32d64cfbb7e130742d1c82f9afaa22f->enter($__internal_9758bc5e3c608a442ad3efbd360562f9b32d64cfbb7e130742d1c82f9afaa22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0efa8c658c07e1c7532473f5b5f3a6c71324864fc483aa2122dd19aa24ed77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0efa8c658c07e1c7532473f5b5f3a6c71324864fc483aa2122dd19aa24ed77e->enter($__internal_f0efa8c658c07e1c7532473f5b5f3a6c71324864fc483aa2122dd19aa24ed77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0efa8c658c07e1c7532473f5b5f3a6c71324864fc483aa2122dd19aa24ed77e->leave($__internal_f0efa8c658c07e1c7532473f5b5f3a6c71324864fc483aa2122dd19aa24ed77e_prof);

        
        $__internal_9758bc5e3c608a442ad3efbd360562f9b32d64cfbb7e130742d1c82f9afaa22f->leave($__internal_9758bc5e3c608a442ad3efbd360562f9b32d64cfbb7e130742d1c82f9afaa22f_prof);

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
