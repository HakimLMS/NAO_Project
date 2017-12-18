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
        $__internal_65afc9fa288c44dbea17ed192ef06c9f0581ba671f5ff2ca1c736cf8108ab541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65afc9fa288c44dbea17ed192ef06c9f0581ba671f5ff2ca1c736cf8108ab541->enter($__internal_65afc9fa288c44dbea17ed192ef06c9f0581ba671f5ff2ca1c736cf8108ab541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0561887d7d88cfb5ac405f432f070aa806e9c9989df12ea7223560faaa955ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0561887d7d88cfb5ac405f432f070aa806e9c9989df12ea7223560faaa955ba0->enter($__internal_0561887d7d88cfb5ac405f432f070aa806e9c9989df12ea7223560faaa955ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_65afc9fa288c44dbea17ed192ef06c9f0581ba671f5ff2ca1c736cf8108ab541->leave($__internal_65afc9fa288c44dbea17ed192ef06c9f0581ba671f5ff2ca1c736cf8108ab541_prof);

        
        $__internal_0561887d7d88cfb5ac405f432f070aa806e9c9989df12ea7223560faaa955ba0->leave($__internal_0561887d7d88cfb5ac405f432f070aa806e9c9989df12ea7223560faaa955ba0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d78dfb1db38b3776e218cb196ea1fac5934ca9f6cf928fca6657104674f8195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d78dfb1db38b3776e218cb196ea1fac5934ca9f6cf928fca6657104674f8195->enter($__internal_2d78dfb1db38b3776e218cb196ea1fac5934ca9f6cf928fca6657104674f8195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4778b421ec3ec0899b3d58bc80bfba4479d81e50db29182201692075779cf328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4778b421ec3ec0899b3d58bc80bfba4479d81e50db29182201692075779cf328->enter($__internal_4778b421ec3ec0899b3d58bc80bfba4479d81e50db29182201692075779cf328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4778b421ec3ec0899b3d58bc80bfba4479d81e50db29182201692075779cf328->leave($__internal_4778b421ec3ec0899b3d58bc80bfba4479d81e50db29182201692075779cf328_prof);

        
        $__internal_2d78dfb1db38b3776e218cb196ea1fac5934ca9f6cf928fca6657104674f8195->leave($__internal_2d78dfb1db38b3776e218cb196ea1fac5934ca9f6cf928fca6657104674f8195_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e8bc24b81442a3c64273a8c162aea94ece1876cdb7b9ca3edfa1f821ba73214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8bc24b81442a3c64273a8c162aea94ece1876cdb7b9ca3edfa1f821ba73214->enter($__internal_1e8bc24b81442a3c64273a8c162aea94ece1876cdb7b9ca3edfa1f821ba73214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34c415a47ae9bcf08404a7e7e3db16d96974076f1d5fbf93e5557de38463a06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c415a47ae9bcf08404a7e7e3db16d96974076f1d5fbf93e5557de38463a06d->enter($__internal_34c415a47ae9bcf08404a7e7e3db16d96974076f1d5fbf93e5557de38463a06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_34c415a47ae9bcf08404a7e7e3db16d96974076f1d5fbf93e5557de38463a06d->leave($__internal_34c415a47ae9bcf08404a7e7e3db16d96974076f1d5fbf93e5557de38463a06d_prof);

        
        $__internal_1e8bc24b81442a3c64273a8c162aea94ece1876cdb7b9ca3edfa1f821ba73214->leave($__internal_1e8bc24b81442a3c64273a8c162aea94ece1876cdb7b9ca3edfa1f821ba73214_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eb43492b726f90a3c2d739c3947bd05035b2dc0a3c2abfedf3a7cf27c857758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb43492b726f90a3c2d739c3947bd05035b2dc0a3c2abfedf3a7cf27c857758->enter($__internal_1eb43492b726f90a3c2d739c3947bd05035b2dc0a3c2abfedf3a7cf27c857758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de7b93c6791b12368b9f8e0218530276a0672ebcd867685524bcd30dd26e3846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7b93c6791b12368b9f8e0218530276a0672ebcd867685524bcd30dd26e3846->enter($__internal_de7b93c6791b12368b9f8e0218530276a0672ebcd867685524bcd30dd26e3846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de7b93c6791b12368b9f8e0218530276a0672ebcd867685524bcd30dd26e3846->leave($__internal_de7b93c6791b12368b9f8e0218530276a0672ebcd867685524bcd30dd26e3846_prof);

        
        $__internal_1eb43492b726f90a3c2d739c3947bd05035b2dc0a3c2abfedf3a7cf27c857758->leave($__internal_1eb43492b726f90a3c2d739c3947bd05035b2dc0a3c2abfedf3a7cf27c857758_prof);

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
