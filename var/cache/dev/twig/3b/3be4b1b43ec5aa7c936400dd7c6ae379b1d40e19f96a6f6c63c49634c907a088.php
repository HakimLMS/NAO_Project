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
        $__internal_76a607ae2148426f3e0e413e2599720a3f77fcb2045eff05a9423a81480d4540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a607ae2148426f3e0e413e2599720a3f77fcb2045eff05a9423a81480d4540->enter($__internal_76a607ae2148426f3e0e413e2599720a3f77fcb2045eff05a9423a81480d4540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_772aab5005b48e4c56110b1c40cd50c8cf8fa7fa60db6dffea284df7cf02ff33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772aab5005b48e4c56110b1c40cd50c8cf8fa7fa60db6dffea284df7cf02ff33->enter($__internal_772aab5005b48e4c56110b1c40cd50c8cf8fa7fa60db6dffea284df7cf02ff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a607ae2148426f3e0e413e2599720a3f77fcb2045eff05a9423a81480d4540->leave($__internal_76a607ae2148426f3e0e413e2599720a3f77fcb2045eff05a9423a81480d4540_prof);

        
        $__internal_772aab5005b48e4c56110b1c40cd50c8cf8fa7fa60db6dffea284df7cf02ff33->leave($__internal_772aab5005b48e4c56110b1c40cd50c8cf8fa7fa60db6dffea284df7cf02ff33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d9f769c695fccf6d7160789733ff2b07b5ae640d0b3718baa8207f974579a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9f769c695fccf6d7160789733ff2b07b5ae640d0b3718baa8207f974579a04->enter($__internal_3d9f769c695fccf6d7160789733ff2b07b5ae640d0b3718baa8207f974579a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_079310d5dd8a45a7d530e497a2bbf080adcb289312fe600ceb5340b8a98ca29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079310d5dd8a45a7d530e497a2bbf080adcb289312fe600ceb5340b8a98ca29b->enter($__internal_079310d5dd8a45a7d530e497a2bbf080adcb289312fe600ceb5340b8a98ca29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_079310d5dd8a45a7d530e497a2bbf080adcb289312fe600ceb5340b8a98ca29b->leave($__internal_079310d5dd8a45a7d530e497a2bbf080adcb289312fe600ceb5340b8a98ca29b_prof);

        
        $__internal_3d9f769c695fccf6d7160789733ff2b07b5ae640d0b3718baa8207f974579a04->leave($__internal_3d9f769c695fccf6d7160789733ff2b07b5ae640d0b3718baa8207f974579a04_prof);

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
