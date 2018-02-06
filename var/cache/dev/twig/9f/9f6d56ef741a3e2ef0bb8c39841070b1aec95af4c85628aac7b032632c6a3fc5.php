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
        $__internal_4e9c99320c8982655ddb0f21c75125d5ee9440f975e44131f61c16b54202e8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9c99320c8982655ddb0f21c75125d5ee9440f975e44131f61c16b54202e8a6->enter($__internal_4e9c99320c8982655ddb0f21c75125d5ee9440f975e44131f61c16b54202e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_72e3f9a06f8d0eeff4f1fede45b8df9f38836a309d5910b18541a4e30cc89313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e3f9a06f8d0eeff4f1fede45b8df9f38836a309d5910b18541a4e30cc89313->enter($__internal_72e3f9a06f8d0eeff4f1fede45b8df9f38836a309d5910b18541a4e30cc89313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4e9c99320c8982655ddb0f21c75125d5ee9440f975e44131f61c16b54202e8a6->leave($__internal_4e9c99320c8982655ddb0f21c75125d5ee9440f975e44131f61c16b54202e8a6_prof);

        
        $__internal_72e3f9a06f8d0eeff4f1fede45b8df9f38836a309d5910b18541a4e30cc89313->leave($__internal_72e3f9a06f8d0eeff4f1fede45b8df9f38836a309d5910b18541a4e30cc89313_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17ce9c26709bc8500171164b5ca96b187ced3ddc099f091d65ec44d56591141e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ce9c26709bc8500171164b5ca96b187ced3ddc099f091d65ec44d56591141e->enter($__internal_17ce9c26709bc8500171164b5ca96b187ced3ddc099f091d65ec44d56591141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78f64da130e8ae31a0b4611c57ea89c04250a6d99d62726543f508e60ed5bf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f64da130e8ae31a0b4611c57ea89c04250a6d99d62726543f508e60ed5bf45->enter($__internal_78f64da130e8ae31a0b4611c57ea89c04250a6d99d62726543f508e60ed5bf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_78f64da130e8ae31a0b4611c57ea89c04250a6d99d62726543f508e60ed5bf45->leave($__internal_78f64da130e8ae31a0b4611c57ea89c04250a6d99d62726543f508e60ed5bf45_prof);

        
        $__internal_17ce9c26709bc8500171164b5ca96b187ced3ddc099f091d65ec44d56591141e->leave($__internal_17ce9c26709bc8500171164b5ca96b187ced3ddc099f091d65ec44d56591141e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8761266c4aea8f8ffbe8ef88baa66e5fc527cd130b60fe3c760246e1c4e44a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8761266c4aea8f8ffbe8ef88baa66e5fc527cd130b60fe3c760246e1c4e44a1->enter($__internal_f8761266c4aea8f8ffbe8ef88baa66e5fc527cd130b60fe3c760246e1c4e44a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6be24547ed1d4306571f2b3eb9a59e61efc195524bbc10a15896a4bc0a527adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be24547ed1d4306571f2b3eb9a59e61efc195524bbc10a15896a4bc0a527adc->enter($__internal_6be24547ed1d4306571f2b3eb9a59e61efc195524bbc10a15896a4bc0a527adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6be24547ed1d4306571f2b3eb9a59e61efc195524bbc10a15896a4bc0a527adc->leave($__internal_6be24547ed1d4306571f2b3eb9a59e61efc195524bbc10a15896a4bc0a527adc_prof);

        
        $__internal_f8761266c4aea8f8ffbe8ef88baa66e5fc527cd130b60fe3c760246e1c4e44a1->leave($__internal_f8761266c4aea8f8ffbe8ef88baa66e5fc527cd130b60fe3c760246e1c4e44a1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba34381d38d5e66dc2f1765487dbbb5549ca4181ee7055163b8a0e2f499c2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba34381d38d5e66dc2f1765487dbbb5549ca4181ee7055163b8a0e2f499c2b7->enter($__internal_4ba34381d38d5e66dc2f1765487dbbb5549ca4181ee7055163b8a0e2f499c2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7219f07ac75e7e4749b0668cf483c25c9b92fa47564ed628e86233cbbeb952f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7219f07ac75e7e4749b0668cf483c25c9b92fa47564ed628e86233cbbeb952f7->enter($__internal_7219f07ac75e7e4749b0668cf483c25c9b92fa47564ed628e86233cbbeb952f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7219f07ac75e7e4749b0668cf483c25c9b92fa47564ed628e86233cbbeb952f7->leave($__internal_7219f07ac75e7e4749b0668cf483c25c9b92fa47564ed628e86233cbbeb952f7_prof);

        
        $__internal_4ba34381d38d5e66dc2f1765487dbbb5549ca4181ee7055163b8a0e2f499c2b7->leave($__internal_4ba34381d38d5e66dc2f1765487dbbb5549ca4181ee7055163b8a0e2f499c2b7_prof);

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
