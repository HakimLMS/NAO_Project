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
        $__internal_7dd1111846b3a39e79183a385f6e55d50e9c54a6e10c2d0602f036f8c4188338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd1111846b3a39e79183a385f6e55d50e9c54a6e10c2d0602f036f8c4188338->enter($__internal_7dd1111846b3a39e79183a385f6e55d50e9c54a6e10c2d0602f036f8c4188338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4963db4b2de7673d2b1a5024d7bfec351194da8eb71da400f7262d3340cf78cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4963db4b2de7673d2b1a5024d7bfec351194da8eb71da400f7262d3340cf78cb->enter($__internal_4963db4b2de7673d2b1a5024d7bfec351194da8eb71da400f7262d3340cf78cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - ";
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
        
        $__internal_7dd1111846b3a39e79183a385f6e55d50e9c54a6e10c2d0602f036f8c4188338->leave($__internal_7dd1111846b3a39e79183a385f6e55d50e9c54a6e10c2d0602f036f8c4188338_prof);

        
        $__internal_4963db4b2de7673d2b1a5024d7bfec351194da8eb71da400f7262d3340cf78cb->leave($__internal_4963db4b2de7673d2b1a5024d7bfec351194da8eb71da400f7262d3340cf78cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d439cf5575aec18634b131a1d2f462134fb057e79163120134be9b9301dd422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d439cf5575aec18634b131a1d2f462134fb057e79163120134be9b9301dd422->enter($__internal_5d439cf5575aec18634b131a1d2f462134fb057e79163120134be9b9301dd422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc61b5153687603795dbb9eb0fa8d5574d19aab8fdaf5326e08c3f6f2b66d867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc61b5153687603795dbb9eb0fa8d5574d19aab8fdaf5326e08c3f6f2b66d867->enter($__internal_fc61b5153687603795dbb9eb0fa8d5574d19aab8fdaf5326e08c3f6f2b66d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc61b5153687603795dbb9eb0fa8d5574d19aab8fdaf5326e08c3f6f2b66d867->leave($__internal_fc61b5153687603795dbb9eb0fa8d5574d19aab8fdaf5326e08c3f6f2b66d867_prof);

        
        $__internal_5d439cf5575aec18634b131a1d2f462134fb057e79163120134be9b9301dd422->leave($__internal_5d439cf5575aec18634b131a1d2f462134fb057e79163120134be9b9301dd422_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98a0a59264b83d65e88c87343004e6b35f7050464a3e1789cb4c3c188a4991ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a0a59264b83d65e88c87343004e6b35f7050464a3e1789cb4c3c188a4991ea->enter($__internal_98a0a59264b83d65e88c87343004e6b35f7050464a3e1789cb4c3c188a4991ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03e79453c6755ba7eb6428e5e7bd0500505c1f69ac88a8421da80f17d2c1f0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e79453c6755ba7eb6428e5e7bd0500505c1f69ac88a8421da80f17d2c1f0d5->enter($__internal_03e79453c6755ba7eb6428e5e7bd0500505c1f69ac88a8421da80f17d2c1f0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_03e79453c6755ba7eb6428e5e7bd0500505c1f69ac88a8421da80f17d2c1f0d5->leave($__internal_03e79453c6755ba7eb6428e5e7bd0500505c1f69ac88a8421da80f17d2c1f0d5_prof);

        
        $__internal_98a0a59264b83d65e88c87343004e6b35f7050464a3e1789cb4c3c188a4991ea->leave($__internal_98a0a59264b83d65e88c87343004e6b35f7050464a3e1789cb4c3c188a4991ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdf0c718665f6d275c6767e3fbfcd2c948b7f1a35b016df1dc9ab40b5e856a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf0c718665f6d275c6767e3fbfcd2c948b7f1a35b016df1dc9ab40b5e856a7c->enter($__internal_cdf0c718665f6d275c6767e3fbfcd2c948b7f1a35b016df1dc9ab40b5e856a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b27e8a0cf441f9e9ca80f06884636d7ef3de0c12102e97c0d9b6dc7bfe827eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b27e8a0cf441f9e9ca80f06884636d7ef3de0c12102e97c0d9b6dc7bfe827eb->enter($__internal_2b27e8a0cf441f9e9ca80f06884636d7ef3de0c12102e97c0d9b6dc7bfe827eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b27e8a0cf441f9e9ca80f06884636d7ef3de0c12102e97c0d9b6dc7bfe827eb->leave($__internal_2b27e8a0cf441f9e9ca80f06884636d7ef3de0c12102e97c0d9b6dc7bfe827eb_prof);

        
        $__internal_cdf0c718665f6d275c6767e3fbfcd2c948b7f1a35b016df1dc9ab40b5e856a7c->leave($__internal_cdf0c718665f6d275c6767e3fbfcd2c948b7f1a35b016df1dc9ab40b5e856a7c_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5254078bbb31e0287540e455d3e5793e4bdadd82a7dd249f9fb2621dc263cdee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5254078bbb31e0287540e455d3e5793e4bdadd82a7dd249f9fb2621dc263cdee->enter($__internal_5254078bbb31e0287540e455d3e5793e4bdadd82a7dd249f9fb2621dc263cdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e167bbbb130b2e735aeb9f1c9d6ed36773d741fbf66cec9738e49a832ca08d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e167bbbb130b2e735aeb9f1c9d6ed36773d741fbf66cec9738e49a832ca08d75->enter($__internal_e167bbbb130b2e735aeb9f1c9d6ed36773d741fbf66cec9738e49a832ca08d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e167bbbb130b2e735aeb9f1c9d6ed36773d741fbf66cec9738e49a832ca08d75->leave($__internal_e167bbbb130b2e735aeb9f1c9d6ed36773d741fbf66cec9738e49a832ca08d75_prof);

        
        $__internal_5254078bbb31e0287540e455d3e5793e4bdadd82a7dd249f9fb2621dc263cdee->leave($__internal_5254078bbb31e0287540e455d3e5793e4bdadd82a7dd249f9fb2621dc263cdee_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  96 => 9,  79 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
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
