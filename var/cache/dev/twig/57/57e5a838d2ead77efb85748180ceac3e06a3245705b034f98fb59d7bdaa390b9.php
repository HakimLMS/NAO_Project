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
        $__internal_c842ac4eda0f01ab1ce0b145ae6425952018b6c2122fc5e0cd5716e632846dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c842ac4eda0f01ab1ce0b145ae6425952018b6c2122fc5e0cd5716e632846dd7->enter($__internal_c842ac4eda0f01ab1ce0b145ae6425952018b6c2122fc5e0cd5716e632846dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7410858a66d8e666f79958950196059e948659882a46714806c6d74e7bf360fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7410858a66d8e666f79958950196059e948659882a46714806c6d74e7bf360fc->enter($__internal_7410858a66d8e666f79958950196059e948659882a46714806c6d74e7bf360fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_c842ac4eda0f01ab1ce0b145ae6425952018b6c2122fc5e0cd5716e632846dd7->leave($__internal_c842ac4eda0f01ab1ce0b145ae6425952018b6c2122fc5e0cd5716e632846dd7_prof);

        
        $__internal_7410858a66d8e666f79958950196059e948659882a46714806c6d74e7bf360fc->leave($__internal_7410858a66d8e666f79958950196059e948659882a46714806c6d74e7bf360fc_prof);

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
