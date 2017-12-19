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
        $__internal_333d1ca17f73c3c7e5a2df96ea4728c8e7ddc83e3cc4eb958d32eaf7b705b98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333d1ca17f73c3c7e5a2df96ea4728c8e7ddc83e3cc4eb958d32eaf7b705b98e->enter($__internal_333d1ca17f73c3c7e5a2df96ea4728c8e7ddc83e3cc4eb958d32eaf7b705b98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_85c56650c8632d98db92a40a06818ae2f84ade49bee377a0cb8477514451c33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c56650c8632d98db92a40a06818ae2f84ade49bee377a0cb8477514451c33a->enter($__internal_85c56650c8632d98db92a40a06818ae2f84ade49bee377a0cb8477514451c33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_333d1ca17f73c3c7e5a2df96ea4728c8e7ddc83e3cc4eb958d32eaf7b705b98e->leave($__internal_333d1ca17f73c3c7e5a2df96ea4728c8e7ddc83e3cc4eb958d32eaf7b705b98e_prof);

        
        $__internal_85c56650c8632d98db92a40a06818ae2f84ade49bee377a0cb8477514451c33a->leave($__internal_85c56650c8632d98db92a40a06818ae2f84ade49bee377a0cb8477514451c33a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbcffc591d9e8bd77979a18801d73fba4aa540f127fadf91c424d52dcb5b0021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcffc591d9e8bd77979a18801d73fba4aa540f127fadf91c424d52dcb5b0021->enter($__internal_cbcffc591d9e8bd77979a18801d73fba4aa540f127fadf91c424d52dcb5b0021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deab69dd4b6fabbefc3e0a358b2c6a65676fee33e626babcd30eaebe1f9dd0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deab69dd4b6fabbefc3e0a358b2c6a65676fee33e626babcd30eaebe1f9dd0b3->enter($__internal_deab69dd4b6fabbefc3e0a358b2c6a65676fee33e626babcd30eaebe1f9dd0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_deab69dd4b6fabbefc3e0a358b2c6a65676fee33e626babcd30eaebe1f9dd0b3->leave($__internal_deab69dd4b6fabbefc3e0a358b2c6a65676fee33e626babcd30eaebe1f9dd0b3_prof);

        
        $__internal_cbcffc591d9e8bd77979a18801d73fba4aa540f127fadf91c424d52dcb5b0021->leave($__internal_cbcffc591d9e8bd77979a18801d73fba4aa540f127fadf91c424d52dcb5b0021_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73626fe5bde4298ff05fb3c921332f142c0af3f3d22e81d2467fa0e1b28c9f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73626fe5bde4298ff05fb3c921332f142c0af3f3d22e81d2467fa0e1b28c9f8b->enter($__internal_73626fe5bde4298ff05fb3c921332f142c0af3f3d22e81d2467fa0e1b28c9f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1dd45ab49b71c5866e5e807c56a4eaa41823d63a9b4e63f4148012fb46c816c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd45ab49b71c5866e5e807c56a4eaa41823d63a9b4e63f4148012fb46c816c6->enter($__internal_1dd45ab49b71c5866e5e807c56a4eaa41823d63a9b4e63f4148012fb46c816c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1dd45ab49b71c5866e5e807c56a4eaa41823d63a9b4e63f4148012fb46c816c6->leave($__internal_1dd45ab49b71c5866e5e807c56a4eaa41823d63a9b4e63f4148012fb46c816c6_prof);

        
        $__internal_73626fe5bde4298ff05fb3c921332f142c0af3f3d22e81d2467fa0e1b28c9f8b->leave($__internal_73626fe5bde4298ff05fb3c921332f142c0af3f3d22e81d2467fa0e1b28c9f8b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d76ce84b87594773948f4b5b037bb17522273019437ee74a5dde36650f721ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76ce84b87594773948f4b5b037bb17522273019437ee74a5dde36650f721ed1->enter($__internal_d76ce84b87594773948f4b5b037bb17522273019437ee74a5dde36650f721ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea907a659da705a0caa3d40dc134e82a47a621da30eee75746d3a9912e133fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea907a659da705a0caa3d40dc134e82a47a621da30eee75746d3a9912e133fe0->enter($__internal_ea907a659da705a0caa3d40dc134e82a47a621da30eee75746d3a9912e133fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea907a659da705a0caa3d40dc134e82a47a621da30eee75746d3a9912e133fe0->leave($__internal_ea907a659da705a0caa3d40dc134e82a47a621da30eee75746d3a9912e133fe0_prof);

        
        $__internal_d76ce84b87594773948f4b5b037bb17522273019437ee74a5dde36650f721ed1->leave($__internal_d76ce84b87594773948f4b5b037bb17522273019437ee74a5dde36650f721ed1_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67137f413ffbc4868bf01bf1ace6c957ce563b71752e43ad3e49ac3f9eb7c47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67137f413ffbc4868bf01bf1ace6c957ce563b71752e43ad3e49ac3f9eb7c47d->enter($__internal_67137f413ffbc4868bf01bf1ace6c957ce563b71752e43ad3e49ac3f9eb7c47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d50d3b67bb80ce48fa6bb8f9102390716d4ba3b734dd6c2386c81258626f405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d50d3b67bb80ce48fa6bb8f9102390716d4ba3b734dd6c2386c81258626f405->enter($__internal_7d50d3b67bb80ce48fa6bb8f9102390716d4ba3b734dd6c2386c81258626f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d50d3b67bb80ce48fa6bb8f9102390716d4ba3b734dd6c2386c81258626f405->leave($__internal_7d50d3b67bb80ce48fa6bb8f9102390716d4ba3b734dd6c2386c81258626f405_prof);

        
        $__internal_67137f413ffbc4868bf01bf1ace6c957ce563b71752e43ad3e49ac3f9eb7c47d->leave($__internal_67137f413ffbc4868bf01bf1ace6c957ce563b71752e43ad3e49ac3f9eb7c47d_prof);

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
