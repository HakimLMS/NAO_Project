<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4cece701e1522cfd32ecad7d0f59ff211ecedeae5e07c72dd84071bb318435c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_e0588f4b9c164000e2c96667eee7e0bd8db31155edda3d8e3e21be2f41162032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0588f4b9c164000e2c96667eee7e0bd8db31155edda3d8e3e21be2f41162032->enter($__internal_e0588f4b9c164000e2c96667eee7e0bd8db31155edda3d8e3e21be2f41162032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_affb1d54a0d6dda25b234d01996a1f88845695f7641b7fd4050fe4e54bfb399e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affb1d54a0d6dda25b234d01996a1f88845695f7641b7fd4050fe4e54bfb399e->enter($__internal_affb1d54a0d6dda25b234d01996a1f88845695f7641b7fd4050fe4e54bfb399e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0588f4b9c164000e2c96667eee7e0bd8db31155edda3d8e3e21be2f41162032->leave($__internal_e0588f4b9c164000e2c96667eee7e0bd8db31155edda3d8e3e21be2f41162032_prof);

        
        $__internal_affb1d54a0d6dda25b234d01996a1f88845695f7641b7fd4050fe4e54bfb399e->leave($__internal_affb1d54a0d6dda25b234d01996a1f88845695f7641b7fd4050fe4e54bfb399e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea45feb1bf627c74f53594e103a37a3636f727cb271a6913ac52c0b63d1bc822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea45feb1bf627c74f53594e103a37a3636f727cb271a6913ac52c0b63d1bc822->enter($__internal_ea45feb1bf627c74f53594e103a37a3636f727cb271a6913ac52c0b63d1bc822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7dfe54626f098cd4f981c4181e88df8f1ada34ca82782d5abde60153a7d1cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dfe54626f098cd4f981c4181e88df8f1ada34ca82782d5abde60153a7d1cfa->enter($__internal_b7dfe54626f098cd4f981c4181e88df8f1ada34ca82782d5abde60153a7d1cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b7dfe54626f098cd4f981c4181e88df8f1ada34ca82782d5abde60153a7d1cfa->leave($__internal_b7dfe54626f098cd4f981c4181e88df8f1ada34ca82782d5abde60153a7d1cfa_prof);

        
        $__internal_ea45feb1bf627c74f53594e103a37a3636f727cb271a6913ac52c0b63d1bc822->leave($__internal_ea45feb1bf627c74f53594e103a37a3636f727cb271a6913ac52c0b63d1bc822_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
