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
        $__internal_0fdb0f0fa7bbb4f1df8eb5f629f810fefda8e477eda32f546f8405e97b4f966e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdb0f0fa7bbb4f1df8eb5f629f810fefda8e477eda32f546f8405e97b4f966e->enter($__internal_0fdb0f0fa7bbb4f1df8eb5f629f810fefda8e477eda32f546f8405e97b4f966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_219ad5a9be9a0a04890fb4385c34b6b88190aa4d86b193214b1e3b88ee9f4e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219ad5a9be9a0a04890fb4385c34b6b88190aa4d86b193214b1e3b88ee9f4e94->enter($__internal_219ad5a9be9a0a04890fb4385c34b6b88190aa4d86b193214b1e3b88ee9f4e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_0fdb0f0fa7bbb4f1df8eb5f629f810fefda8e477eda32f546f8405e97b4f966e->leave($__internal_0fdb0f0fa7bbb4f1df8eb5f629f810fefda8e477eda32f546f8405e97b4f966e_prof);

        
        $__internal_219ad5a9be9a0a04890fb4385c34b6b88190aa4d86b193214b1e3b88ee9f4e94->leave($__internal_219ad5a9be9a0a04890fb4385c34b6b88190aa4d86b193214b1e3b88ee9f4e94_prof);

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
