<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0e3fdccf4608efa4cdeca3f52980b5923f331fc7f11a6a184d87cb65f8b453ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_500e333181cb051c68a7b34ba84833f4d346fad9c8fc39200e8d6e8f9fa4a39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500e333181cb051c68a7b34ba84833f4d346fad9c8fc39200e8d6e8f9fa4a39b->enter($__internal_500e333181cb051c68a7b34ba84833f4d346fad9c8fc39200e8d6e8f9fa4a39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5bce6ffc389c57df618da394db0d8c17b2cfb47c957319ad9a627d996f4ae74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bce6ffc389c57df618da394db0d8c17b2cfb47c957319ad9a627d996f4ae74a->enter($__internal_5bce6ffc389c57df618da394db0d8c17b2cfb47c957319ad9a627d996f4ae74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_500e333181cb051c68a7b34ba84833f4d346fad9c8fc39200e8d6e8f9fa4a39b->leave($__internal_500e333181cb051c68a7b34ba84833f4d346fad9c8fc39200e8d6e8f9fa4a39b_prof);

        
        $__internal_5bce6ffc389c57df618da394db0d8c17b2cfb47c957319ad9a627d996f4ae74a->leave($__internal_5bce6ffc389c57df618da394db0d8c17b2cfb47c957319ad9a627d996f4ae74a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
