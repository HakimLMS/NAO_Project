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
        $__internal_f8cb96429bff618a186949c0c7fd165eb42067d32aa7fe35170e5814163f670f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cb96429bff618a186949c0c7fd165eb42067d32aa7fe35170e5814163f670f->enter($__internal_f8cb96429bff618a186949c0c7fd165eb42067d32aa7fe35170e5814163f670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_42e5195880b1a247ecc681c94537df8afbb3afd43aa8b5372ad256427d86b58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e5195880b1a247ecc681c94537df8afbb3afd43aa8b5372ad256427d86b58a->enter($__internal_42e5195880b1a247ecc681c94537df8afbb3afd43aa8b5372ad256427d86b58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f8cb96429bff618a186949c0c7fd165eb42067d32aa7fe35170e5814163f670f->leave($__internal_f8cb96429bff618a186949c0c7fd165eb42067d32aa7fe35170e5814163f670f_prof);

        
        $__internal_42e5195880b1a247ecc681c94537df8afbb3afd43aa8b5372ad256427d86b58a->leave($__internal_42e5195880b1a247ecc681c94537df8afbb3afd43aa8b5372ad256427d86b58a_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
