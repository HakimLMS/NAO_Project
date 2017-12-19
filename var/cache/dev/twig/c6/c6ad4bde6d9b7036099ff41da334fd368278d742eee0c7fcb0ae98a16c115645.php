<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b315b1c35f752493c9ae37f1cc38bc6665b2c4cb7c541bed13965e8f50d3a0a7 extends Twig_Template
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
        $__internal_4a24a8c598c2f4aad017299c86253189bdd286201a2bc00270919434600b3727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a24a8c598c2f4aad017299c86253189bdd286201a2bc00270919434600b3727->enter($__internal_4a24a8c598c2f4aad017299c86253189bdd286201a2bc00270919434600b3727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8be6fa22d8593ec16d810561856abc17768a88e3f7572a205711cd76121d06b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be6fa22d8593ec16d810561856abc17768a88e3f7572a205711cd76121d06b7->enter($__internal_8be6fa22d8593ec16d810561856abc17768a88e3f7572a205711cd76121d06b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_4a24a8c598c2f4aad017299c86253189bdd286201a2bc00270919434600b3727->leave($__internal_4a24a8c598c2f4aad017299c86253189bdd286201a2bc00270919434600b3727_prof);

        
        $__internal_8be6fa22d8593ec16d810561856abc17768a88e3f7572a205711cd76121d06b7->leave($__internal_8be6fa22d8593ec16d810561856abc17768a88e3f7572a205711cd76121d06b7_prof);

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
