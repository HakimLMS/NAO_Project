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
        $__internal_3976e159cc12f9f441b2abf41dfb33cdac165f70e046db6e364974064290be2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3976e159cc12f9f441b2abf41dfb33cdac165f70e046db6e364974064290be2e->enter($__internal_3976e159cc12f9f441b2abf41dfb33cdac165f70e046db6e364974064290be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f05bf95ec4c8c9555ecbaeb574ed32847461eb4118c1673f52e6d3afc789d916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05bf95ec4c8c9555ecbaeb574ed32847461eb4118c1673f52e6d3afc789d916->enter($__internal_f05bf95ec4c8c9555ecbaeb574ed32847461eb4118c1673f52e6d3afc789d916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3976e159cc12f9f441b2abf41dfb33cdac165f70e046db6e364974064290be2e->leave($__internal_3976e159cc12f9f441b2abf41dfb33cdac165f70e046db6e364974064290be2e_prof);

        
        $__internal_f05bf95ec4c8c9555ecbaeb574ed32847461eb4118c1673f52e6d3afc789d916->leave($__internal_f05bf95ec4c8c9555ecbaeb574ed32847461eb4118c1673f52e6d3afc789d916_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b28e4abdaf0b2e27f8c8f9a7d1086105979cc0a764942a30c88f0e76056c7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b28e4abdaf0b2e27f8c8f9a7d1086105979cc0a764942a30c88f0e76056c7a2->enter($__internal_7b28e4abdaf0b2e27f8c8f9a7d1086105979cc0a764942a30c88f0e76056c7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd7ac9393a797b0ba4cbcf1d825ab14186a02a9bd78a9ab1da2aac56721aedea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7ac9393a797b0ba4cbcf1d825ab14186a02a9bd78a9ab1da2aac56721aedea->enter($__internal_fd7ac9393a797b0ba4cbcf1d825ab14186a02a9bd78a9ab1da2aac56721aedea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fd7ac9393a797b0ba4cbcf1d825ab14186a02a9bd78a9ab1da2aac56721aedea->leave($__internal_fd7ac9393a797b0ba4cbcf1d825ab14186a02a9bd78a9ab1da2aac56721aedea_prof);

        
        $__internal_7b28e4abdaf0b2e27f8c8f9a7d1086105979cc0a764942a30c88f0e76056c7a2->leave($__internal_7b28e4abdaf0b2e27f8c8f9a7d1086105979cc0a764942a30c88f0e76056c7a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8bdddab562f9aa3a1c558a933c743c628ad308418c9179cc5c56cdc51ae420f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bdddab562f9aa3a1c558a933c743c628ad308418c9179cc5c56cdc51ae420f->enter($__internal_e8bdddab562f9aa3a1c558a933c743c628ad308418c9179cc5c56cdc51ae420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a277e49656a5fa98377aa478e30d6ddd163a8023b74514d762e5ef3854b91b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a277e49656a5fa98377aa478e30d6ddd163a8023b74514d762e5ef3854b91b56->enter($__internal_a277e49656a5fa98377aa478e30d6ddd163a8023b74514d762e5ef3854b91b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a277e49656a5fa98377aa478e30d6ddd163a8023b74514d762e5ef3854b91b56->leave($__internal_a277e49656a5fa98377aa478e30d6ddd163a8023b74514d762e5ef3854b91b56_prof);

        
        $__internal_e8bdddab562f9aa3a1c558a933c743c628ad308418c9179cc5c56cdc51ae420f->leave($__internal_e8bdddab562f9aa3a1c558a933c743c628ad308418c9179cc5c56cdc51ae420f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_73b4f9522c29b674b9844c4cf8400148d0b5c6af5b0e369c6619e3653bd0365f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b4f9522c29b674b9844c4cf8400148d0b5c6af5b0e369c6619e3653bd0365f->enter($__internal_73b4f9522c29b674b9844c4cf8400148d0b5c6af5b0e369c6619e3653bd0365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c22fa431493d23f0b49a3919fcc3d0424c42e04bf714b5a272a6f7e5a6ab34f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22fa431493d23f0b49a3919fcc3d0424c42e04bf714b5a272a6f7e5a6ab34f3->enter($__internal_c22fa431493d23f0b49a3919fcc3d0424c42e04bf714b5a272a6f7e5a6ab34f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c22fa431493d23f0b49a3919fcc3d0424c42e04bf714b5a272a6f7e5a6ab34f3->leave($__internal_c22fa431493d23f0b49a3919fcc3d0424c42e04bf714b5a272a6f7e5a6ab34f3_prof);

        
        $__internal_73b4f9522c29b674b9844c4cf8400148d0b5c6af5b0e369c6619e3653bd0365f->leave($__internal_73b4f9522c29b674b9844c4cf8400148d0b5c6af5b0e369c6619e3653bd0365f_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c8795d73dadf18087409e73726662ef27787bc1a8c5ebe8767568b43ec95dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8795d73dadf18087409e73726662ef27787bc1a8c5ebe8767568b43ec95dc8->enter($__internal_6c8795d73dadf18087409e73726662ef27787bc1a8c5ebe8767568b43ec95dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7eff010331ce2fa47e4de04f2e8cfce60f1b92e907dc4678a895a866e12cfae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eff010331ce2fa47e4de04f2e8cfce60f1b92e907dc4678a895a866e12cfae3->enter($__internal_7eff010331ce2fa47e4de04f2e8cfce60f1b92e907dc4678a895a866e12cfae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7eff010331ce2fa47e4de04f2e8cfce60f1b92e907dc4678a895a866e12cfae3->leave($__internal_7eff010331ce2fa47e4de04f2e8cfce60f1b92e907dc4678a895a866e12cfae3_prof);

        
        $__internal_6c8795d73dadf18087409e73726662ef27787bc1a8c5ebe8767568b43ec95dc8->leave($__internal_6c8795d73dadf18087409e73726662ef27787bc1a8c5ebe8767568b43ec95dc8_prof);

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
