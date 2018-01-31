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
        $__internal_cb60b0c541544e2f03f760acbce65b9cb9cbee1a6e58c7683066d08e09d2d5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb60b0c541544e2f03f760acbce65b9cb9cbee1a6e58c7683066d08e09d2d5d2->enter($__internal_cb60b0c541544e2f03f760acbce65b9cb9cbee1a6e58c7683066d08e09d2d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_02ad9ee8921d8b381a296d06e613a07064871fc374cebdc3c3a3c335e192b646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ad9ee8921d8b381a296d06e613a07064871fc374cebdc3c3a3c335e192b646->enter($__internal_02ad9ee8921d8b381a296d06e613a07064871fc374cebdc3c3a3c335e192b646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_cb60b0c541544e2f03f760acbce65b9cb9cbee1a6e58c7683066d08e09d2d5d2->leave($__internal_cb60b0c541544e2f03f760acbce65b9cb9cbee1a6e58c7683066d08e09d2d5d2_prof);

        
        $__internal_02ad9ee8921d8b381a296d06e613a07064871fc374cebdc3c3a3c335e192b646->leave($__internal_02ad9ee8921d8b381a296d06e613a07064871fc374cebdc3c3a3c335e192b646_prof);

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
