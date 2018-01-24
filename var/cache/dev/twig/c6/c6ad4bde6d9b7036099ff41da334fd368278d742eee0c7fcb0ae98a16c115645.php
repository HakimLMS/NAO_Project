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
        $__internal_ab12ce8a928ebda3e16c87b5a01f5b2619fcb895f7513623d8277e59c2a442d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab12ce8a928ebda3e16c87b5a01f5b2619fcb895f7513623d8277e59c2a442d3->enter($__internal_ab12ce8a928ebda3e16c87b5a01f5b2619fcb895f7513623d8277e59c2a442d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_86b7ba602d7e40313aa4ece7563d31dea44333de7686de52bb89bb27909e078b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b7ba602d7e40313aa4ece7563d31dea44333de7686de52bb89bb27909e078b->enter($__internal_86b7ba602d7e40313aa4ece7563d31dea44333de7686de52bb89bb27909e078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ab12ce8a928ebda3e16c87b5a01f5b2619fcb895f7513623d8277e59c2a442d3->leave($__internal_ab12ce8a928ebda3e16c87b5a01f5b2619fcb895f7513623d8277e59c2a442d3_prof);

        
        $__internal_86b7ba602d7e40313aa4ece7563d31dea44333de7686de52bb89bb27909e078b->leave($__internal_86b7ba602d7e40313aa4ece7563d31dea44333de7686de52bb89bb27909e078b_prof);

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
