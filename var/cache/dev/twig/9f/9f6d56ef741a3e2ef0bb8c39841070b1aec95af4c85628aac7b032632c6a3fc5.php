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
        $__internal_a8d393627fb912530161e630c5004eacaa3afd94b135c045e63c6dca87ac1408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d393627fb912530161e630c5004eacaa3afd94b135c045e63c6dca87ac1408->enter($__internal_a8d393627fb912530161e630c5004eacaa3afd94b135c045e63c6dca87ac1408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f34bb2427a1c5587dda32b9a30aa2d6e28ad6335b3fb718c775e78db61da60a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34bb2427a1c5587dda32b9a30aa2d6e28ad6335b3fb718c775e78db61da60a9->enter($__internal_f34bb2427a1c5587dda32b9a30aa2d6e28ad6335b3fb718c775e78db61da60a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a8d393627fb912530161e630c5004eacaa3afd94b135c045e63c6dca87ac1408->leave($__internal_a8d393627fb912530161e630c5004eacaa3afd94b135c045e63c6dca87ac1408_prof);

        
        $__internal_f34bb2427a1c5587dda32b9a30aa2d6e28ad6335b3fb718c775e78db61da60a9->leave($__internal_f34bb2427a1c5587dda32b9a30aa2d6e28ad6335b3fb718c775e78db61da60a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_124bbc5c3c2df4fd73769c5bee53b9492fb7df48d888de8205d8a7d90208da35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124bbc5c3c2df4fd73769c5bee53b9492fb7df48d888de8205d8a7d90208da35->enter($__internal_124bbc5c3c2df4fd73769c5bee53b9492fb7df48d888de8205d8a7d90208da35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6747d3d8389a16a0f0add16f2fee2534965d3c665c92c092090c17ae219f35a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6747d3d8389a16a0f0add16f2fee2534965d3c665c92c092090c17ae219f35a8->enter($__internal_6747d3d8389a16a0f0add16f2fee2534965d3c665c92c092090c17ae219f35a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6747d3d8389a16a0f0add16f2fee2534965d3c665c92c092090c17ae219f35a8->leave($__internal_6747d3d8389a16a0f0add16f2fee2534965d3c665c92c092090c17ae219f35a8_prof);

        
        $__internal_124bbc5c3c2df4fd73769c5bee53b9492fb7df48d888de8205d8a7d90208da35->leave($__internal_124bbc5c3c2df4fd73769c5bee53b9492fb7df48d888de8205d8a7d90208da35_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfd600854ed4e48b92c33a14689a69381bee89d7b4f00ca1c7e3e1d01b6fa04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd600854ed4e48b92c33a14689a69381bee89d7b4f00ca1c7e3e1d01b6fa04d->enter($__internal_dfd600854ed4e48b92c33a14689a69381bee89d7b4f00ca1c7e3e1d01b6fa04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_690d5c03caf64800c404426968eb3539b290edcf8ddfc5ee72778ec289480fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690d5c03caf64800c404426968eb3539b290edcf8ddfc5ee72778ec289480fac->enter($__internal_690d5c03caf64800c404426968eb3539b290edcf8ddfc5ee72778ec289480fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_690d5c03caf64800c404426968eb3539b290edcf8ddfc5ee72778ec289480fac->leave($__internal_690d5c03caf64800c404426968eb3539b290edcf8ddfc5ee72778ec289480fac_prof);

        
        $__internal_dfd600854ed4e48b92c33a14689a69381bee89d7b4f00ca1c7e3e1d01b6fa04d->leave($__internal_dfd600854ed4e48b92c33a14689a69381bee89d7b4f00ca1c7e3e1d01b6fa04d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7be59aa83cf35c9d69b30436d7b05b4ca6f38c6ee7f19493b8192130bd32e005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be59aa83cf35c9d69b30436d7b05b4ca6f38c6ee7f19493b8192130bd32e005->enter($__internal_7be59aa83cf35c9d69b30436d7b05b4ca6f38c6ee7f19493b8192130bd32e005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deb5ec12018dc1b6b583672591aeeecf43abd47cdef1b85acb66b38a0c67cfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb5ec12018dc1b6b583672591aeeecf43abd47cdef1b85acb66b38a0c67cfaf->enter($__internal_deb5ec12018dc1b6b583672591aeeecf43abd47cdef1b85acb66b38a0c67cfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_deb5ec12018dc1b6b583672591aeeecf43abd47cdef1b85acb66b38a0c67cfaf->leave($__internal_deb5ec12018dc1b6b583672591aeeecf43abd47cdef1b85acb66b38a0c67cfaf_prof);

        
        $__internal_7be59aa83cf35c9d69b30436d7b05b4ca6f38c6ee7f19493b8192130bd32e005->leave($__internal_7be59aa83cf35c9d69b30436d7b05b4ca6f38c6ee7f19493b8192130bd32e005_prof);

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
