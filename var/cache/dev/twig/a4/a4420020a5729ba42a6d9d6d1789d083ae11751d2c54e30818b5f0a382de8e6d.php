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
        $__internal_1a4a0ae24dc57fbe287edaf70672a4b115c12b8c0cfb0347cec4d59ff75844d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4a0ae24dc57fbe287edaf70672a4b115c12b8c0cfb0347cec4d59ff75844d9->enter($__internal_1a4a0ae24dc57fbe287edaf70672a4b115c12b8c0cfb0347cec4d59ff75844d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4e02600d0c034fdeb7b6e1255a4dacb462bd7f4c3d4f2e93622d5924662049ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e02600d0c034fdeb7b6e1255a4dacb462bd7f4c3d4f2e93622d5924662049ba->enter($__internal_4e02600d0c034fdeb7b6e1255a4dacb462bd7f4c3d4f2e93622d5924662049ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1a4a0ae24dc57fbe287edaf70672a4b115c12b8c0cfb0347cec4d59ff75844d9->leave($__internal_1a4a0ae24dc57fbe287edaf70672a4b115c12b8c0cfb0347cec4d59ff75844d9_prof);

        
        $__internal_4e02600d0c034fdeb7b6e1255a4dacb462bd7f4c3d4f2e93622d5924662049ba->leave($__internal_4e02600d0c034fdeb7b6e1255a4dacb462bd7f4c3d4f2e93622d5924662049ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc33182d361fe2b1296106b3080d6582c4ba0637366a82d7fb4c85b4fd907ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc33182d361fe2b1296106b3080d6582c4ba0637366a82d7fb4c85b4fd907ad9->enter($__internal_cc33182d361fe2b1296106b3080d6582c4ba0637366a82d7fb4c85b4fd907ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a19056c9ab6d72c7862b96930411f28ce21e19ac44afeb2ecd327678f98654a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a19056c9ab6d72c7862b96930411f28ce21e19ac44afeb2ecd327678f98654a->enter($__internal_6a19056c9ab6d72c7862b96930411f28ce21e19ac44afeb2ecd327678f98654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6a19056c9ab6d72c7862b96930411f28ce21e19ac44afeb2ecd327678f98654a->leave($__internal_6a19056c9ab6d72c7862b96930411f28ce21e19ac44afeb2ecd327678f98654a_prof);

        
        $__internal_cc33182d361fe2b1296106b3080d6582c4ba0637366a82d7fb4c85b4fd907ad9->leave($__internal_cc33182d361fe2b1296106b3080d6582c4ba0637366a82d7fb4c85b4fd907ad9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aaa6bd1f192987b7dbd58e4043a19012e82a46bfd890ed19564b2b6d3fc81bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa6bd1f192987b7dbd58e4043a19012e82a46bfd890ed19564b2b6d3fc81bf9->enter($__internal_aaa6bd1f192987b7dbd58e4043a19012e82a46bfd890ed19564b2b6d3fc81bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c8f08a9eae6a650e64e816339f51d4dca82d50aff5c8d1eb1779fd6b5835c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8f08a9eae6a650e64e816339f51d4dca82d50aff5c8d1eb1779fd6b5835c8d->enter($__internal_4c8f08a9eae6a650e64e816339f51d4dca82d50aff5c8d1eb1779fd6b5835c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c8f08a9eae6a650e64e816339f51d4dca82d50aff5c8d1eb1779fd6b5835c8d->leave($__internal_4c8f08a9eae6a650e64e816339f51d4dca82d50aff5c8d1eb1779fd6b5835c8d_prof);

        
        $__internal_aaa6bd1f192987b7dbd58e4043a19012e82a46bfd890ed19564b2b6d3fc81bf9->leave($__internal_aaa6bd1f192987b7dbd58e4043a19012e82a46bfd890ed19564b2b6d3fc81bf9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e758bb21107e01b2072d38c78c3a91c14df0f031c3950485fcb74c69eafa13a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e758bb21107e01b2072d38c78c3a91c14df0f031c3950485fcb74c69eafa13a7->enter($__internal_e758bb21107e01b2072d38c78c3a91c14df0f031c3950485fcb74c69eafa13a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fddca75f267a15adebe3911036652992173fb06c9c5726c873a81d452fc6624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fddca75f267a15adebe3911036652992173fb06c9c5726c873a81d452fc6624->enter($__internal_7fddca75f267a15adebe3911036652992173fb06c9c5726c873a81d452fc6624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7fddca75f267a15adebe3911036652992173fb06c9c5726c873a81d452fc6624->leave($__internal_7fddca75f267a15adebe3911036652992173fb06c9c5726c873a81d452fc6624_prof);

        
        $__internal_e758bb21107e01b2072d38c78c3a91c14df0f031c3950485fcb74c69eafa13a7->leave($__internal_e758bb21107e01b2072d38c78c3a91c14df0f031c3950485fcb74c69eafa13a7_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f08fbe8d152e53f84accd3678ba1441a54a4438d1cfdcb6a10c485fb9d930d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08fbe8d152e53f84accd3678ba1441a54a4438d1cfdcb6a10c485fb9d930d8e->enter($__internal_f08fbe8d152e53f84accd3678ba1441a54a4438d1cfdcb6a10c485fb9d930d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_62388bd1bfad749b903563a72d85c1c5c41193b24cd28d222017b92a03165022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62388bd1bfad749b903563a72d85c1c5c41193b24cd28d222017b92a03165022->enter($__internal_62388bd1bfad749b903563a72d85c1c5c41193b24cd28d222017b92a03165022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62388bd1bfad749b903563a72d85c1c5c41193b24cd28d222017b92a03165022->leave($__internal_62388bd1bfad749b903563a72d85c1c5c41193b24cd28d222017b92a03165022_prof);

        
        $__internal_f08fbe8d152e53f84accd3678ba1441a54a4438d1cfdcb6a10c485fb9d930d8e->leave($__internal_f08fbe8d152e53f84accd3678ba1441a54a4438d1cfdcb6a10c485fb9d930d8e_prof);

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
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
