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
        $__internal_0d2a7e73a4149ce7e67b49f09926987ff6220b3e12d1ee48075ecdf063754f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2a7e73a4149ce7e67b49f09926987ff6220b3e12d1ee48075ecdf063754f9e->enter($__internal_0d2a7e73a4149ce7e67b49f09926987ff6220b3e12d1ee48075ecdf063754f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_16cc9514dd4835a4f82c5153c59af92ccf5aab429ace8c74a4858401a525e50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cc9514dd4835a4f82c5153c59af92ccf5aab429ace8c74a4858401a525e50f->enter($__internal_16cc9514dd4835a4f82c5153c59af92ccf5aab429ace8c74a4858401a525e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2a7e73a4149ce7e67b49f09926987ff6220b3e12d1ee48075ecdf063754f9e->leave($__internal_0d2a7e73a4149ce7e67b49f09926987ff6220b3e12d1ee48075ecdf063754f9e_prof);

        
        $__internal_16cc9514dd4835a4f82c5153c59af92ccf5aab429ace8c74a4858401a525e50f->leave($__internal_16cc9514dd4835a4f82c5153c59af92ccf5aab429ace8c74a4858401a525e50f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7429cf32fd6e9617356cce48bdc5bf8bdedce41f984a06570698f0f70e6dcb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7429cf32fd6e9617356cce48bdc5bf8bdedce41f984a06570698f0f70e6dcb3e->enter($__internal_7429cf32fd6e9617356cce48bdc5bf8bdedce41f984a06570698f0f70e6dcb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e09178f0603f565e0e075713f6c0a1121a29bfb2a7530cf5efc03f1fdab6538c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09178f0603f565e0e075713f6c0a1121a29bfb2a7530cf5efc03f1fdab6538c->enter($__internal_e09178f0603f565e0e075713f6c0a1121a29bfb2a7530cf5efc03f1fdab6538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e09178f0603f565e0e075713f6c0a1121a29bfb2a7530cf5efc03f1fdab6538c->leave($__internal_e09178f0603f565e0e075713f6c0a1121a29bfb2a7530cf5efc03f1fdab6538c_prof);

        
        $__internal_7429cf32fd6e9617356cce48bdc5bf8bdedce41f984a06570698f0f70e6dcb3e->leave($__internal_7429cf32fd6e9617356cce48bdc5bf8bdedce41f984a06570698f0f70e6dcb3e_prof);

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
