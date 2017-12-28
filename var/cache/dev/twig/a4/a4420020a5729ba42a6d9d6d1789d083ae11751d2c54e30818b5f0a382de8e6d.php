<?php

/* base.html.twig */
class __TwigTemplate_9b82483fd9f189b036f072471c7129831d5df7a2101ce1d4c27fd63bbd10799e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f2f92e76db647e5cbf888cc09a769d8bd3ca20f703bd8b618fe8d065db98c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2f92e76db647e5cbf888cc09a769d8bd3ca20f703bd8b618fe8d065db98c81->enter($__internal_7f2f92e76db647e5cbf888cc09a769d8bd3ca20f703bd8b618fe8d065db98c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9ccd6c1156322cd72e05586f8e4d2a4b3443fcd4fabb0291280f58da804d4642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccd6c1156322cd72e05586f8e4d2a4b3443fcd4fabb0291280f58da804d4642->enter($__internal_9ccd6c1156322cd72e05586f8e4d2a4b3443fcd4fabb0291280f58da804d4642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_7f2f92e76db647e5cbf888cc09a769d8bd3ca20f703bd8b618fe8d065db98c81->leave($__internal_7f2f92e76db647e5cbf888cc09a769d8bd3ca20f703bd8b618fe8d065db98c81_prof);

        
        $__internal_9ccd6c1156322cd72e05586f8e4d2a4b3443fcd4fabb0291280f58da804d4642->leave($__internal_9ccd6c1156322cd72e05586f8e4d2a4b3443fcd4fabb0291280f58da804d4642_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0e25766f760769747db2c38af82c54e11576a1b03fd0e833de504c4c24c0f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e25766f760769747db2c38af82c54e11576a1b03fd0e833de504c4c24c0f4e->enter($__internal_a0e25766f760769747db2c38af82c54e11576a1b03fd0e833de504c4c24c0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_507b50274c38da306e3ecc7cb9becb7c202cb74a802287ce8ee660731ebea341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507b50274c38da306e3ecc7cb9becb7c202cb74a802287ce8ee660731ebea341->enter($__internal_507b50274c38da306e3ecc7cb9becb7c202cb74a802287ce8ee660731ebea341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_507b50274c38da306e3ecc7cb9becb7c202cb74a802287ce8ee660731ebea341->leave($__internal_507b50274c38da306e3ecc7cb9becb7c202cb74a802287ce8ee660731ebea341_prof);

        
        $__internal_a0e25766f760769747db2c38af82c54e11576a1b03fd0e833de504c4c24c0f4e->leave($__internal_a0e25766f760769747db2c38af82c54e11576a1b03fd0e833de504c4c24c0f4e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b90ab1e6a8ee05c5079d70de0efb8549fdcddde547f17dabe5f3a29b72e72002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90ab1e6a8ee05c5079d70de0efb8549fdcddde547f17dabe5f3a29b72e72002->enter($__internal_b90ab1e6a8ee05c5079d70de0efb8549fdcddde547f17dabe5f3a29b72e72002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fb60e71fca0fdc2ec2362da7c503abec95912984723a1e1c71dcf154d2092d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb60e71fca0fdc2ec2362da7c503abec95912984723a1e1c71dcf154d2092d4f->enter($__internal_fb60e71fca0fdc2ec2362da7c503abec95912984723a1e1c71dcf154d2092d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fb60e71fca0fdc2ec2362da7c503abec95912984723a1e1c71dcf154d2092d4f->leave($__internal_fb60e71fca0fdc2ec2362da7c503abec95912984723a1e1c71dcf154d2092d4f_prof);

        
        $__internal_b90ab1e6a8ee05c5079d70de0efb8549fdcddde547f17dabe5f3a29b72e72002->leave($__internal_b90ab1e6a8ee05c5079d70de0efb8549fdcddde547f17dabe5f3a29b72e72002_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe1f577a6defd8b0a7902fedc9c3889128cad530aae3ea9ca9aa9d003940804f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1f577a6defd8b0a7902fedc9c3889128cad530aae3ea9ca9aa9d003940804f->enter($__internal_fe1f577a6defd8b0a7902fedc9c3889128cad530aae3ea9ca9aa9d003940804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c5418a0d5b1308b0b54f2a4104e4ccdc63199abd07b52efd4b34c60bc370794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5418a0d5b1308b0b54f2a4104e4ccdc63199abd07b52efd4b34c60bc370794->enter($__internal_7c5418a0d5b1308b0b54f2a4104e4ccdc63199abd07b52efd4b34c60bc370794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c5418a0d5b1308b0b54f2a4104e4ccdc63199abd07b52efd4b34c60bc370794->leave($__internal_7c5418a0d5b1308b0b54f2a4104e4ccdc63199abd07b52efd4b34c60bc370794_prof);

        
        $__internal_fe1f577a6defd8b0a7902fedc9c3889128cad530aae3ea9ca9aa9d003940804f->leave($__internal_fe1f577a6defd8b0a7902fedc9c3889128cad530aae3ea9ca9aa9d003940804f_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca91de8fe1279283702cfa9faf503d87ee2ff667aff5595a4879e6a1ce68587d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca91de8fe1279283702cfa9faf503d87ee2ff667aff5595a4879e6a1ce68587d->enter($__internal_ca91de8fe1279283702cfa9faf503d87ee2ff667aff5595a4879e6a1ce68587d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ad3ff9bf740b0c3bc6a75f4e707b74a82d59f9884f07070236fee3f932e05f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad3ff9bf740b0c3bc6a75f4e707b74a82d59f9884f07070236fee3f932e05f9->enter($__internal_0ad3ff9bf740b0c3bc6a75f4e707b74a82d59f9884f07070236fee3f932e05f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ad3ff9bf740b0c3bc6a75f4e707b74a82d59f9884f07070236fee3f932e05f9->leave($__internal_0ad3ff9bf740b0c3bc6a75f4e707b74a82d59f9884f07070236fee3f932e05f9_prof);

        
        $__internal_ca91de8fe1279283702cfa9faf503d87ee2ff667aff5595a4879e6a1ce68587d->leave($__internal_ca91de8fe1279283702cfa9faf503d87ee2ff667aff5595a4879e6a1ce68587d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
