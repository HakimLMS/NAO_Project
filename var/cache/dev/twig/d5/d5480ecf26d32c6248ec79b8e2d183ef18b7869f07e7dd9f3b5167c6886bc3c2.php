<?php

/* base.html.twig */
class __TwigTemplate_d677415250fbbc5080c07cd04424ba36e94a88114f6a364184b7ca339428e8b9 extends Twig_Template
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
        $__internal_9715027ebd667550442cfd594afc6f82cb1d5aadb5e18ceda05f82cfa56977a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9715027ebd667550442cfd594afc6f82cb1d5aadb5e18ceda05f82cfa56977a8->enter($__internal_9715027ebd667550442cfd594afc6f82cb1d5aadb5e18ceda05f82cfa56977a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7eca65e3a7f294f516ee86da1f9c59692e2903dd13c10a96bfbf78d8c1ea534b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eca65e3a7f294f516ee86da1f9c59692e2903dd13c10a96bfbf78d8c1ea534b->enter($__internal_7eca65e3a7f294f516ee86da1f9c59692e2903dd13c10a96bfbf78d8c1ea534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9715027ebd667550442cfd594afc6f82cb1d5aadb5e18ceda05f82cfa56977a8->leave($__internal_9715027ebd667550442cfd594afc6f82cb1d5aadb5e18ceda05f82cfa56977a8_prof);

        
        $__internal_7eca65e3a7f294f516ee86da1f9c59692e2903dd13c10a96bfbf78d8c1ea534b->leave($__internal_7eca65e3a7f294f516ee86da1f9c59692e2903dd13c10a96bfbf78d8c1ea534b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88ebb529a1acc1731487728fa1dc8db8abaa8a7328930f87f672565a8e2bfaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ebb529a1acc1731487728fa1dc8db8abaa8a7328930f87f672565a8e2bfaab->enter($__internal_88ebb529a1acc1731487728fa1dc8db8abaa8a7328930f87f672565a8e2bfaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6872af2f632afbafa748d73af6ccb29b00517c3f01ac0b8600d585c4a20ab926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6872af2f632afbafa748d73af6ccb29b00517c3f01ac0b8600d585c4a20ab926->enter($__internal_6872af2f632afbafa748d73af6ccb29b00517c3f01ac0b8600d585c4a20ab926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6872af2f632afbafa748d73af6ccb29b00517c3f01ac0b8600d585c4a20ab926->leave($__internal_6872af2f632afbafa748d73af6ccb29b00517c3f01ac0b8600d585c4a20ab926_prof);

        
        $__internal_88ebb529a1acc1731487728fa1dc8db8abaa8a7328930f87f672565a8e2bfaab->leave($__internal_88ebb529a1acc1731487728fa1dc8db8abaa8a7328930f87f672565a8e2bfaab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd0626aaeef658bce06bc10f3d022606c7bb9713e2b51101e130297e42302f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0626aaeef658bce06bc10f3d022606c7bb9713e2b51101e130297e42302f9a->enter($__internal_dd0626aaeef658bce06bc10f3d022606c7bb9713e2b51101e130297e42302f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_db3371f3b6483960657abe00730457ec38fd6b06030e1dc61867e7d2c0417f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3371f3b6483960657abe00730457ec38fd6b06030e1dc61867e7d2c0417f64->enter($__internal_db3371f3b6483960657abe00730457ec38fd6b06030e1dc61867e7d2c0417f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_db3371f3b6483960657abe00730457ec38fd6b06030e1dc61867e7d2c0417f64->leave($__internal_db3371f3b6483960657abe00730457ec38fd6b06030e1dc61867e7d2c0417f64_prof);

        
        $__internal_dd0626aaeef658bce06bc10f3d022606c7bb9713e2b51101e130297e42302f9a->leave($__internal_dd0626aaeef658bce06bc10f3d022606c7bb9713e2b51101e130297e42302f9a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60e19cc5d0ae9962ee22c4c28ad069feb227a47df8f3c019d15c7784cf304996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e19cc5d0ae9962ee22c4c28ad069feb227a47df8f3c019d15c7784cf304996->enter($__internal_60e19cc5d0ae9962ee22c4c28ad069feb227a47df8f3c019d15c7784cf304996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_326a7ee84c835a7693f6c0543414a7729d8edf4ca697616c133b8fa8c96009b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326a7ee84c835a7693f6c0543414a7729d8edf4ca697616c133b8fa8c96009b6->enter($__internal_326a7ee84c835a7693f6c0543414a7729d8edf4ca697616c133b8fa8c96009b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_326a7ee84c835a7693f6c0543414a7729d8edf4ca697616c133b8fa8c96009b6->leave($__internal_326a7ee84c835a7693f6c0543414a7729d8edf4ca697616c133b8fa8c96009b6_prof);

        
        $__internal_60e19cc5d0ae9962ee22c4c28ad069feb227a47df8f3c019d15c7784cf304996->leave($__internal_60e19cc5d0ae9962ee22c4c28ad069feb227a47df8f3c019d15c7784cf304996_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a7686ff107dc0468e94392eb9f58693e97383f561abecf7d7b0647138b3e32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7686ff107dc0468e94392eb9f58693e97383f561abecf7d7b0647138b3e32d->enter($__internal_1a7686ff107dc0468e94392eb9f58693e97383f561abecf7d7b0647138b3e32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16cc3c2cabf457e7847c8584dfa0bc925ad659a326456d467da8a8237f2b9f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cc3c2cabf457e7847c8584dfa0bc925ad659a326456d467da8a8237f2b9f34->enter($__internal_16cc3c2cabf457e7847c8584dfa0bc925ad659a326456d467da8a8237f2b9f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16cc3c2cabf457e7847c8584dfa0bc925ad659a326456d467da8a8237f2b9f34->leave($__internal_16cc3c2cabf457e7847c8584dfa0bc925ad659a326456d467da8a8237f2b9f34_prof);

        
        $__internal_1a7686ff107dc0468e94392eb9f58693e97383f561abecf7d7b0647138b3e32d->leave($__internal_1a7686ff107dc0468e94392eb9f58693e97383f561abecf7d7b0647138b3e32d_prof);

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
