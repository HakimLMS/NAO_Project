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
        $__internal_b3e00f6de73e0be5d4337b5407e8509ec6df6bf63adf576b79c894d7cbe8e3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e00f6de73e0be5d4337b5407e8509ec6df6bf63adf576b79c894d7cbe8e3aa->enter($__internal_b3e00f6de73e0be5d4337b5407e8509ec6df6bf63adf576b79c894d7cbe8e3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_76ab5e6cd150641b59315b56cc0ec5d1f4f420a62bb143373d8a201609d61282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ab5e6cd150641b59315b56cc0ec5d1f4f420a62bb143373d8a201609d61282->enter($__internal_76ab5e6cd150641b59315b56cc0ec5d1f4f420a62bb143373d8a201609d61282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_b3e00f6de73e0be5d4337b5407e8509ec6df6bf63adf576b79c894d7cbe8e3aa->leave($__internal_b3e00f6de73e0be5d4337b5407e8509ec6df6bf63adf576b79c894d7cbe8e3aa_prof);

        
        $__internal_76ab5e6cd150641b59315b56cc0ec5d1f4f420a62bb143373d8a201609d61282->leave($__internal_76ab5e6cd150641b59315b56cc0ec5d1f4f420a62bb143373d8a201609d61282_prof);

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
