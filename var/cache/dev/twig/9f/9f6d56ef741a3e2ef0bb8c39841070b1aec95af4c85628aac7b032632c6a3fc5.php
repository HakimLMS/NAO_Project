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
        $__internal_6e0ad90986a142ed57de7680947c76ff4c8eddaae232deb39398a8ab58047a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0ad90986a142ed57de7680947c76ff4c8eddaae232deb39398a8ab58047a39->enter($__internal_6e0ad90986a142ed57de7680947c76ff4c8eddaae232deb39398a8ab58047a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c610c58ad742b6e93c7debb72b04e71ab0c076d59b854d1c6e2ac917f5e78646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c610c58ad742b6e93c7debb72b04e71ab0c076d59b854d1c6e2ac917f5e78646->enter($__internal_c610c58ad742b6e93c7debb72b04e71ab0c076d59b854d1c6e2ac917f5e78646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6e0ad90986a142ed57de7680947c76ff4c8eddaae232deb39398a8ab58047a39->leave($__internal_6e0ad90986a142ed57de7680947c76ff4c8eddaae232deb39398a8ab58047a39_prof);

        
        $__internal_c610c58ad742b6e93c7debb72b04e71ab0c076d59b854d1c6e2ac917f5e78646->leave($__internal_c610c58ad742b6e93c7debb72b04e71ab0c076d59b854d1c6e2ac917f5e78646_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b396ef5e3384ff232d8ad7c4636fad16489670dc9905d858da5229d0ccd8dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b396ef5e3384ff232d8ad7c4636fad16489670dc9905d858da5229d0ccd8dcf->enter($__internal_9b396ef5e3384ff232d8ad7c4636fad16489670dc9905d858da5229d0ccd8dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22b48aa885b66e1965dd7aaa45418007e03ed942cf9f074c7db342d378464031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b48aa885b66e1965dd7aaa45418007e03ed942cf9f074c7db342d378464031->enter($__internal_22b48aa885b66e1965dd7aaa45418007e03ed942cf9f074c7db342d378464031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_22b48aa885b66e1965dd7aaa45418007e03ed942cf9f074c7db342d378464031->leave($__internal_22b48aa885b66e1965dd7aaa45418007e03ed942cf9f074c7db342d378464031_prof);

        
        $__internal_9b396ef5e3384ff232d8ad7c4636fad16489670dc9905d858da5229d0ccd8dcf->leave($__internal_9b396ef5e3384ff232d8ad7c4636fad16489670dc9905d858da5229d0ccd8dcf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_22b8cc0dd4e8a502b73df8c56a9c661f919c18b286c239daec25cd1bfeb47ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b8cc0dd4e8a502b73df8c56a9c661f919c18b286c239daec25cd1bfeb47ee7->enter($__internal_22b8cc0dd4e8a502b73df8c56a9c661f919c18b286c239daec25cd1bfeb47ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c03c0e2cdce4b371f92b4de0d29f47d90f8de71030f99705752052ffb075a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c03c0e2cdce4b371f92b4de0d29f47d90f8de71030f99705752052ffb075a3b->enter($__internal_8c03c0e2cdce4b371f92b4de0d29f47d90f8de71030f99705752052ffb075a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c03c0e2cdce4b371f92b4de0d29f47d90f8de71030f99705752052ffb075a3b->leave($__internal_8c03c0e2cdce4b371f92b4de0d29f47d90f8de71030f99705752052ffb075a3b_prof);

        
        $__internal_22b8cc0dd4e8a502b73df8c56a9c661f919c18b286c239daec25cd1bfeb47ee7->leave($__internal_22b8cc0dd4e8a502b73df8c56a9c661f919c18b286c239daec25cd1bfeb47ee7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4c443dd8d3d0c9c5cbff2840b88c95f376db9010465d430b0d6a1d6156b9208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c443dd8d3d0c9c5cbff2840b88c95f376db9010465d430b0d6a1d6156b9208->enter($__internal_a4c443dd8d3d0c9c5cbff2840b88c95f376db9010465d430b0d6a1d6156b9208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_299247668d4cbe1e58937d4cdc23b7e292a7729be305858bd9b61dce4f81f5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299247668d4cbe1e58937d4cdc23b7e292a7729be305858bd9b61dce4f81f5fb->enter($__internal_299247668d4cbe1e58937d4cdc23b7e292a7729be305858bd9b61dce4f81f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_299247668d4cbe1e58937d4cdc23b7e292a7729be305858bd9b61dce4f81f5fb->leave($__internal_299247668d4cbe1e58937d4cdc23b7e292a7729be305858bd9b61dce4f81f5fb_prof);

        
        $__internal_a4c443dd8d3d0c9c5cbff2840b88c95f376db9010465d430b0d6a1d6156b9208->leave($__internal_a4c443dd8d3d0c9c5cbff2840b88c95f376db9010465d430b0d6a1d6156b9208_prof);

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
