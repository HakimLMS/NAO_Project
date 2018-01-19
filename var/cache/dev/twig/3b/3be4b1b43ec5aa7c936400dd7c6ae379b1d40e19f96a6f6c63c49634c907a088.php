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
        $__internal_08eb857bb1001fdaad318f94d2c4a1f8d4d62e45416bae7a7f449221bc0ce0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08eb857bb1001fdaad318f94d2c4a1f8d4d62e45416bae7a7f449221bc0ce0fa->enter($__internal_08eb857bb1001fdaad318f94d2c4a1f8d4d62e45416bae7a7f449221bc0ce0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3df65648dae2cc0ec35b224c3b6287b5a12410a552aa3d9b282983ebdeecad2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df65648dae2cc0ec35b224c3b6287b5a12410a552aa3d9b282983ebdeecad2c->enter($__internal_3df65648dae2cc0ec35b224c3b6287b5a12410a552aa3d9b282983ebdeecad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08eb857bb1001fdaad318f94d2c4a1f8d4d62e45416bae7a7f449221bc0ce0fa->leave($__internal_08eb857bb1001fdaad318f94d2c4a1f8d4d62e45416bae7a7f449221bc0ce0fa_prof);

        
        $__internal_3df65648dae2cc0ec35b224c3b6287b5a12410a552aa3d9b282983ebdeecad2c->leave($__internal_3df65648dae2cc0ec35b224c3b6287b5a12410a552aa3d9b282983ebdeecad2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9e39f81264240e08bb1746efee2ae0e4f48615b00e0c26e7e78704fe27f8fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e39f81264240e08bb1746efee2ae0e4f48615b00e0c26e7e78704fe27f8fa1->enter($__internal_f9e39f81264240e08bb1746efee2ae0e4f48615b00e0c26e7e78704fe27f8fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9576e7d0ff5ec92aecbdad2da692551847d87854e5df9a91c961a0997b133a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9576e7d0ff5ec92aecbdad2da692551847d87854e5df9a91c961a0997b133a8b->enter($__internal_9576e7d0ff5ec92aecbdad2da692551847d87854e5df9a91c961a0997b133a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9576e7d0ff5ec92aecbdad2da692551847d87854e5df9a91c961a0997b133a8b->leave($__internal_9576e7d0ff5ec92aecbdad2da692551847d87854e5df9a91c961a0997b133a8b_prof);

        
        $__internal_f9e39f81264240e08bb1746efee2ae0e4f48615b00e0c26e7e78704fe27f8fa1->leave($__internal_f9e39f81264240e08bb1746efee2ae0e4f48615b00e0c26e7e78704fe27f8fa1_prof);

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
