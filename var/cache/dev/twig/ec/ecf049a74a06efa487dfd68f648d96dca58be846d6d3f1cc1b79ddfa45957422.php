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
        $__internal_806fa20cc9358722dd8a1c2c0fe5e89948775d0542fc014f7761418f57e83e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806fa20cc9358722dd8a1c2c0fe5e89948775d0542fc014f7761418f57e83e0c->enter($__internal_806fa20cc9358722dd8a1c2c0fe5e89948775d0542fc014f7761418f57e83e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a8a94b6be932b04d453151da7c5903726f42f5468415ffc0b4f677023fd34321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a94b6be932b04d453151da7c5903726f42f5468415ffc0b4f677023fd34321->enter($__internal_a8a94b6be932b04d453151da7c5903726f42f5468415ffc0b4f677023fd34321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_806fa20cc9358722dd8a1c2c0fe5e89948775d0542fc014f7761418f57e83e0c->leave($__internal_806fa20cc9358722dd8a1c2c0fe5e89948775d0542fc014f7761418f57e83e0c_prof);

        
        $__internal_a8a94b6be932b04d453151da7c5903726f42f5468415ffc0b4f677023fd34321->leave($__internal_a8a94b6be932b04d453151da7c5903726f42f5468415ffc0b4f677023fd34321_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_677bfc7ca5cfe5a4afd645e90f063ee9e794540ee864ca576f6f89879003f069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677bfc7ca5cfe5a4afd645e90f063ee9e794540ee864ca576f6f89879003f069->enter($__internal_677bfc7ca5cfe5a4afd645e90f063ee9e794540ee864ca576f6f89879003f069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dea17b7a64ed807923fdd58ef0a24a64f66b56a78ebbafa73b4856eae380853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dea17b7a64ed807923fdd58ef0a24a64f66b56a78ebbafa73b4856eae380853->enter($__internal_0dea17b7a64ed807923fdd58ef0a24a64f66b56a78ebbafa73b4856eae380853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0dea17b7a64ed807923fdd58ef0a24a64f66b56a78ebbafa73b4856eae380853->leave($__internal_0dea17b7a64ed807923fdd58ef0a24a64f66b56a78ebbafa73b4856eae380853_prof);

        
        $__internal_677bfc7ca5cfe5a4afd645e90f063ee9e794540ee864ca576f6f89879003f069->leave($__internal_677bfc7ca5cfe5a4afd645e90f063ee9e794540ee864ca576f6f89879003f069_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ede7bf6814a101b5d494a885a0d7bc5417fc3bef31895d55362d8ea3504b00e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede7bf6814a101b5d494a885a0d7bc5417fc3bef31895d55362d8ea3504b00e4->enter($__internal_ede7bf6814a101b5d494a885a0d7bc5417fc3bef31895d55362d8ea3504b00e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9070814d07b652bf232abb77204ef05d2c7903dea8932d995ddfa07dab601d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9070814d07b652bf232abb77204ef05d2c7903dea8932d995ddfa07dab601d90->enter($__internal_9070814d07b652bf232abb77204ef05d2c7903dea8932d995ddfa07dab601d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9070814d07b652bf232abb77204ef05d2c7903dea8932d995ddfa07dab601d90->leave($__internal_9070814d07b652bf232abb77204ef05d2c7903dea8932d995ddfa07dab601d90_prof);

        
        $__internal_ede7bf6814a101b5d494a885a0d7bc5417fc3bef31895d55362d8ea3504b00e4->leave($__internal_ede7bf6814a101b5d494a885a0d7bc5417fc3bef31895d55362d8ea3504b00e4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5c32365ffbed9c11dbb4f33071e9e54f6420a3f171d5cb9d5c93fd1b775ea28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c32365ffbed9c11dbb4f33071e9e54f6420a3f171d5cb9d5c93fd1b775ea28->enter($__internal_a5c32365ffbed9c11dbb4f33071e9e54f6420a3f171d5cb9d5c93fd1b775ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9b852181948c933011d6b09daf0bfd41ec8550ad10e8f32e0b7c334c9dc419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b852181948c933011d6b09daf0bfd41ec8550ad10e8f32e0b7c334c9dc419d->enter($__internal_b9b852181948c933011d6b09daf0bfd41ec8550ad10e8f32e0b7c334c9dc419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9b852181948c933011d6b09daf0bfd41ec8550ad10e8f32e0b7c334c9dc419d->leave($__internal_b9b852181948c933011d6b09daf0bfd41ec8550ad10e8f32e0b7c334c9dc419d_prof);

        
        $__internal_a5c32365ffbed9c11dbb4f33071e9e54f6420a3f171d5cb9d5c93fd1b775ea28->leave($__internal_a5c32365ffbed9c11dbb4f33071e9e54f6420a3f171d5cb9d5c93fd1b775ea28_prof);

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
