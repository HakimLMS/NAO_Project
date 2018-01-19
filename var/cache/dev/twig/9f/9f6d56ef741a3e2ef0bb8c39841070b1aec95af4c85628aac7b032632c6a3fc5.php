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
        $__internal_3c64a8577267ea560dcf92935c402d9829edd612f54dac50c9c18407bcdf6d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c64a8577267ea560dcf92935c402d9829edd612f54dac50c9c18407bcdf6d77->enter($__internal_3c64a8577267ea560dcf92935c402d9829edd612f54dac50c9c18407bcdf6d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_126a3c5910e32d7d9ec103ec8e9395b2eac68064f81c2732d2c2a5851f390325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126a3c5910e32d7d9ec103ec8e9395b2eac68064f81c2732d2c2a5851f390325->enter($__internal_126a3c5910e32d7d9ec103ec8e9395b2eac68064f81c2732d2c2a5851f390325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3c64a8577267ea560dcf92935c402d9829edd612f54dac50c9c18407bcdf6d77->leave($__internal_3c64a8577267ea560dcf92935c402d9829edd612f54dac50c9c18407bcdf6d77_prof);

        
        $__internal_126a3c5910e32d7d9ec103ec8e9395b2eac68064f81c2732d2c2a5851f390325->leave($__internal_126a3c5910e32d7d9ec103ec8e9395b2eac68064f81c2732d2c2a5851f390325_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a492301770677791f4743b99c25f84f670377b455dbf3d0ebac5aae7fbfe15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a492301770677791f4743b99c25f84f670377b455dbf3d0ebac5aae7fbfe15e->enter($__internal_6a492301770677791f4743b99c25f84f670377b455dbf3d0ebac5aae7fbfe15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2dcff7a2adff9e18176895bfea4344a11e499e36c20fbd493f8ef27d05e4803d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcff7a2adff9e18176895bfea4344a11e499e36c20fbd493f8ef27d05e4803d->enter($__internal_2dcff7a2adff9e18176895bfea4344a11e499e36c20fbd493f8ef27d05e4803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2dcff7a2adff9e18176895bfea4344a11e499e36c20fbd493f8ef27d05e4803d->leave($__internal_2dcff7a2adff9e18176895bfea4344a11e499e36c20fbd493f8ef27d05e4803d_prof);

        
        $__internal_6a492301770677791f4743b99c25f84f670377b455dbf3d0ebac5aae7fbfe15e->leave($__internal_6a492301770677791f4743b99c25f84f670377b455dbf3d0ebac5aae7fbfe15e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9388f230f8a04ef6a6b97efdbd83f5853c22b40b7cf7de1ecef0fd8e049f8af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9388f230f8a04ef6a6b97efdbd83f5853c22b40b7cf7de1ecef0fd8e049f8af9->enter($__internal_9388f230f8a04ef6a6b97efdbd83f5853c22b40b7cf7de1ecef0fd8e049f8af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0c608db72d819857d0429c4953a89d33f05755e527a3845883d33a142e33f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c608db72d819857d0429c4953a89d33f05755e527a3845883d33a142e33f49->enter($__internal_f0c608db72d819857d0429c4953a89d33f05755e527a3845883d33a142e33f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f0c608db72d819857d0429c4953a89d33f05755e527a3845883d33a142e33f49->leave($__internal_f0c608db72d819857d0429c4953a89d33f05755e527a3845883d33a142e33f49_prof);

        
        $__internal_9388f230f8a04ef6a6b97efdbd83f5853c22b40b7cf7de1ecef0fd8e049f8af9->leave($__internal_9388f230f8a04ef6a6b97efdbd83f5853c22b40b7cf7de1ecef0fd8e049f8af9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_100fcc7de9eaa8d8cbde0b0cd24575d39da529757b9cb880d8ce1d5cbe46dc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100fcc7de9eaa8d8cbde0b0cd24575d39da529757b9cb880d8ce1d5cbe46dc7a->enter($__internal_100fcc7de9eaa8d8cbde0b0cd24575d39da529757b9cb880d8ce1d5cbe46dc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55cf8c3ee2b99db59e76bfd23353462b828ea12671465aee9d27ff4ab0651a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cf8c3ee2b99db59e76bfd23353462b828ea12671465aee9d27ff4ab0651a0b->enter($__internal_55cf8c3ee2b99db59e76bfd23353462b828ea12671465aee9d27ff4ab0651a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55cf8c3ee2b99db59e76bfd23353462b828ea12671465aee9d27ff4ab0651a0b->leave($__internal_55cf8c3ee2b99db59e76bfd23353462b828ea12671465aee9d27ff4ab0651a0b_prof);

        
        $__internal_100fcc7de9eaa8d8cbde0b0cd24575d39da529757b9cb880d8ce1d5cbe46dc7a->leave($__internal_100fcc7de9eaa8d8cbde0b0cd24575d39da529757b9cb880d8ce1d5cbe46dc7a_prof);

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
