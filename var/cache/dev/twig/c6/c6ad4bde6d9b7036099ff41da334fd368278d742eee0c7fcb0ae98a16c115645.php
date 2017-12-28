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
        $__internal_6852c372b2a6c668dab2d8817b2b9a38374d43f9c430ba6880f48464fe01b344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6852c372b2a6c668dab2d8817b2b9a38374d43f9c430ba6880f48464fe01b344->enter($__internal_6852c372b2a6c668dab2d8817b2b9a38374d43f9c430ba6880f48464fe01b344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ef954ecfd0b75f987a995ae82d5f27b9e30a8ce8856355fdc9dbbb4174f0bb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef954ecfd0b75f987a995ae82d5f27b9e30a8ce8856355fdc9dbbb4174f0bb13->enter($__internal_ef954ecfd0b75f987a995ae82d5f27b9e30a8ce8856355fdc9dbbb4174f0bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_6852c372b2a6c668dab2d8817b2b9a38374d43f9c430ba6880f48464fe01b344->leave($__internal_6852c372b2a6c668dab2d8817b2b9a38374d43f9c430ba6880f48464fe01b344_prof);

        
        $__internal_ef954ecfd0b75f987a995ae82d5f27b9e30a8ce8856355fdc9dbbb4174f0bb13->leave($__internal_ef954ecfd0b75f987a995ae82d5f27b9e30a8ce8856355fdc9dbbb4174f0bb13_prof);

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
