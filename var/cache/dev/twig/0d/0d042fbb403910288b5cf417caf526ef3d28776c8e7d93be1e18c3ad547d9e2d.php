<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_76705d82972d99fa864b68339a61c55dec904444b73d0fccb3b21840e5ca7bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_166739a5a68df29739d2af69f769d362885c7e2596bff0f839ed3400ca75b471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166739a5a68df29739d2af69f769d362885c7e2596bff0f839ed3400ca75b471->enter($__internal_166739a5a68df29739d2af69f769d362885c7e2596bff0f839ed3400ca75b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_00e5ed220a813323bea26520ce187b128944451104b5175a5cf03af51ffd4eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e5ed220a813323bea26520ce187b128944451104b5175a5cf03af51ffd4eb8->enter($__internal_00e5ed220a813323bea26520ce187b128944451104b5175a5cf03af51ffd4eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_166739a5a68df29739d2af69f769d362885c7e2596bff0f839ed3400ca75b471->leave($__internal_166739a5a68df29739d2af69f769d362885c7e2596bff0f839ed3400ca75b471_prof);

        
        $__internal_00e5ed220a813323bea26520ce187b128944451104b5175a5cf03af51ffd4eb8->leave($__internal_00e5ed220a813323bea26520ce187b128944451104b5175a5cf03af51ffd4eb8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_024e9f6e9c3f9d5fb6d6789363c60fd76a81702be7e8ed1ccd87b936d4485ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024e9f6e9c3f9d5fb6d6789363c60fd76a81702be7e8ed1ccd87b936d4485ab6->enter($__internal_024e9f6e9c3f9d5fb6d6789363c60fd76a81702be7e8ed1ccd87b936d4485ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80ed15e864aa7a229c9a61bdea14ba05d1177c8dd71e3cfcad11fb0135ebffad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ed15e864aa7a229c9a61bdea14ba05d1177c8dd71e3cfcad11fb0135ebffad->enter($__internal_80ed15e864aa7a229c9a61bdea14ba05d1177c8dd71e3cfcad11fb0135ebffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 5, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 23, $this->getSourceContext()); })()), "name" => "time", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 23, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_80ed15e864aa7a229c9a61bdea14ba05d1177c8dd71e3cfcad11fb0135ebffad->leave($__internal_80ed15e864aa7a229c9a61bdea14ba05d1177c8dd71e3cfcad11fb0135ebffad_prof);

        
        $__internal_024e9f6e9c3f9d5fb6d6789363c60fd76a81702be7e8ed1ccd87b936d4485ab6->leave($__internal_024e9f6e9c3f9d5fb6d6789363c60fd76a81702be7e8ed1ccd87b936d4485ab6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\memory.html.twig");
    }
}
