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
        $__internal_93450cfb0e7d39ed3cb107c48a156b86ec856bb8779d703d4b07d8ee7f91f5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93450cfb0e7d39ed3cb107c48a156b86ec856bb8779d703d4b07d8ee7f91f5bf->enter($__internal_93450cfb0e7d39ed3cb107c48a156b86ec856bb8779d703d4b07d8ee7f91f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a325b6df8cef7b51361a59bfe83cb456b8c46ca2237e16628f2ecad60e9eafc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a325b6df8cef7b51361a59bfe83cb456b8c46ca2237e16628f2ecad60e9eafc7->enter($__internal_a325b6df8cef7b51361a59bfe83cb456b8c46ca2237e16628f2ecad60e9eafc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_93450cfb0e7d39ed3cb107c48a156b86ec856bb8779d703d4b07d8ee7f91f5bf->leave($__internal_93450cfb0e7d39ed3cb107c48a156b86ec856bb8779d703d4b07d8ee7f91f5bf_prof);

        
        $__internal_a325b6df8cef7b51361a59bfe83cb456b8c46ca2237e16628f2ecad60e9eafc7->leave($__internal_a325b6df8cef7b51361a59bfe83cb456b8c46ca2237e16628f2ecad60e9eafc7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8d85937749fae040573249e7a0f1856ae4f291242e753086924699a80683dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d85937749fae040573249e7a0f1856ae4f291242e753086924699a80683dc0->enter($__internal_e8d85937749fae040573249e7a0f1856ae4f291242e753086924699a80683dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09192e3630f6723329ca679a6acd945913c1b201dcf182a5e4510c5ad13442bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09192e3630f6723329ca679a6acd945913c1b201dcf182a5e4510c5ad13442bd->enter($__internal_09192e3630f6723329ca679a6acd945913c1b201dcf182a5e4510c5ad13442bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_09192e3630f6723329ca679a6acd945913c1b201dcf182a5e4510c5ad13442bd->leave($__internal_09192e3630f6723329ca679a6acd945913c1b201dcf182a5e4510c5ad13442bd_prof);

        
        $__internal_e8d85937749fae040573249e7a0f1856ae4f291242e753086924699a80683dc0->leave($__internal_e8d85937749fae040573249e7a0f1856ae4f291242e753086924699a80683dc0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84bef91b27ed865af7754f49edc7c2598fafd699a738a1f98bdd44d3da5d0262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bef91b27ed865af7754f49edc7c2598fafd699a738a1f98bdd44d3da5d0262->enter($__internal_84bef91b27ed865af7754f49edc7c2598fafd699a738a1f98bdd44d3da5d0262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_50dc1b3a45e94d8c19626763df0a95e30568889991a07cde44499eb4c8b85c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dc1b3a45e94d8c19626763df0a95e30568889991a07cde44499eb4c8b85c1e->enter($__internal_50dc1b3a45e94d8c19626763df0a95e30568889991a07cde44499eb4c8b85c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_50dc1b3a45e94d8c19626763df0a95e30568889991a07cde44499eb4c8b85c1e->leave($__internal_50dc1b3a45e94d8c19626763df0a95e30568889991a07cde44499eb4c8b85c1e_prof);

        
        $__internal_84bef91b27ed865af7754f49edc7c2598fafd699a738a1f98bdd44d3da5d0262->leave($__internal_84bef91b27ed865af7754f49edc7c2598fafd699a738a1f98bdd44d3da5d0262_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ce7c79687c34bdac1dc4dea0536d97917bf2e4567cdd811c66fa56a07d575d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ce7c79687c34bdac1dc4dea0536d97917bf2e4567cdd811c66fa56a07d575d->enter($__internal_55ce7c79687c34bdac1dc4dea0536d97917bf2e4567cdd811c66fa56a07d575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dc282ba73b5ad424bcd8b8ac8b0465acaf44134828028543ca0f371f62be35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc282ba73b5ad424bcd8b8ac8b0465acaf44134828028543ca0f371f62be35e->enter($__internal_7dc282ba73b5ad424bcd8b8ac8b0465acaf44134828028543ca0f371f62be35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7dc282ba73b5ad424bcd8b8ac8b0465acaf44134828028543ca0f371f62be35e->leave($__internal_7dc282ba73b5ad424bcd8b8ac8b0465acaf44134828028543ca0f371f62be35e_prof);

        
        $__internal_55ce7c79687c34bdac1dc4dea0536d97917bf2e4567cdd811c66fa56a07d575d->leave($__internal_55ce7c79687c34bdac1dc4dea0536d97917bf2e4567cdd811c66fa56a07d575d_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a2fff35f62b6ea1171f3e9de3088d1957df282d0f99ebd54969cb16dba5fcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2fff35f62b6ea1171f3e9de3088d1957df282d0f99ebd54969cb16dba5fcae->enter($__internal_8a2fff35f62b6ea1171f3e9de3088d1957df282d0f99ebd54969cb16dba5fcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5fe57ce9c72d5693c1e46018429988506de36f44fd5fc7da4ba17848d8b28836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe57ce9c72d5693c1e46018429988506de36f44fd5fc7da4ba17848d8b28836->enter($__internal_5fe57ce9c72d5693c1e46018429988506de36f44fd5fc7da4ba17848d8b28836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5fe57ce9c72d5693c1e46018429988506de36f44fd5fc7da4ba17848d8b28836->leave($__internal_5fe57ce9c72d5693c1e46018429988506de36f44fd5fc7da4ba17848d8b28836_prof);

        
        $__internal_8a2fff35f62b6ea1171f3e9de3088d1957df282d0f99ebd54969cb16dba5fcae->leave($__internal_8a2fff35f62b6ea1171f3e9de3088d1957df282d0f99ebd54969cb16dba5fcae_prof);

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
