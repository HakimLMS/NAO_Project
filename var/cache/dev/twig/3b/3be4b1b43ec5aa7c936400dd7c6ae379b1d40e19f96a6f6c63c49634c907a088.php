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
        $__internal_b231537f91c5dd45e189e3887bf8e0514a98b1a3ce76dd18593de5c182597bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b231537f91c5dd45e189e3887bf8e0514a98b1a3ce76dd18593de5c182597bc3->enter($__internal_b231537f91c5dd45e189e3887bf8e0514a98b1a3ce76dd18593de5c182597bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f37f27ce592a730da2fadbf3a9e2fb46c25849f3e7b6f479e80bd3c75f809d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37f27ce592a730da2fadbf3a9e2fb46c25849f3e7b6f479e80bd3c75f809d51->enter($__internal_f37f27ce592a730da2fadbf3a9e2fb46c25849f3e7b6f479e80bd3c75f809d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b231537f91c5dd45e189e3887bf8e0514a98b1a3ce76dd18593de5c182597bc3->leave($__internal_b231537f91c5dd45e189e3887bf8e0514a98b1a3ce76dd18593de5c182597bc3_prof);

        
        $__internal_f37f27ce592a730da2fadbf3a9e2fb46c25849f3e7b6f479e80bd3c75f809d51->leave($__internal_f37f27ce592a730da2fadbf3a9e2fb46c25849f3e7b6f479e80bd3c75f809d51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce86e1b7cd0c33ff8779603cd25282394e715458ff30b6558ead35b2a124ceb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce86e1b7cd0c33ff8779603cd25282394e715458ff30b6558ead35b2a124ceb6->enter($__internal_ce86e1b7cd0c33ff8779603cd25282394e715458ff30b6558ead35b2a124ceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d8451b33300fff36fea5c1bf7438509aeb51f28413873a6c3662aa1826722f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8451b33300fff36fea5c1bf7438509aeb51f28413873a6c3662aa1826722f5d->enter($__internal_d8451b33300fff36fea5c1bf7438509aeb51f28413873a6c3662aa1826722f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d8451b33300fff36fea5c1bf7438509aeb51f28413873a6c3662aa1826722f5d->leave($__internal_d8451b33300fff36fea5c1bf7438509aeb51f28413873a6c3662aa1826722f5d_prof);

        
        $__internal_ce86e1b7cd0c33ff8779603cd25282394e715458ff30b6558ead35b2a124ceb6->leave($__internal_ce86e1b7cd0c33ff8779603cd25282394e715458ff30b6558ead35b2a124ceb6_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
