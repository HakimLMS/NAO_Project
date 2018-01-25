<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76a0247dec4b42e277b54b1e85c86f53751432c864d6926126790d4959c436f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_699ab3af9676ef5f453e92e3aef756b753510b22e1296256822ebcd06ae57eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699ab3af9676ef5f453e92e3aef756b753510b22e1296256822ebcd06ae57eb8->enter($__internal_699ab3af9676ef5f453e92e3aef756b753510b22e1296256822ebcd06ae57eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e0052010497b94f12a1ad038df550dc0a6f8da8d73c959cb92a8386b405656fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0052010497b94f12a1ad038df550dc0a6f8da8d73c959cb92a8386b405656fa->enter($__internal_e0052010497b94f12a1ad038df550dc0a6f8da8d73c959cb92a8386b405656fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699ab3af9676ef5f453e92e3aef756b753510b22e1296256822ebcd06ae57eb8->leave($__internal_699ab3af9676ef5f453e92e3aef756b753510b22e1296256822ebcd06ae57eb8_prof);

        
        $__internal_e0052010497b94f12a1ad038df550dc0a6f8da8d73c959cb92a8386b405656fa->leave($__internal_e0052010497b94f12a1ad038df550dc0a6f8da8d73c959cb92a8386b405656fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9743b1c02c948b52c23078a27498b2c98cb0c3f9576ae6d5040b14059bbd4a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9743b1c02c948b52c23078a27498b2c98cb0c3f9576ae6d5040b14059bbd4a90->enter($__internal_9743b1c02c948b52c23078a27498b2c98cb0c3f9576ae6d5040b14059bbd4a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_48a72ef78e18fea054414af31ca4f126ad8ac812269929a075b4ea883277628d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a72ef78e18fea054414af31ca4f126ad8ac812269929a075b4ea883277628d->enter($__internal_48a72ef78e18fea054414af31ca4f126ad8ac812269929a075b4ea883277628d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48a72ef78e18fea054414af31ca4f126ad8ac812269929a075b4ea883277628d->leave($__internal_48a72ef78e18fea054414af31ca4f126ad8ac812269929a075b4ea883277628d_prof);

        
        $__internal_9743b1c02c948b52c23078a27498b2c98cb0c3f9576ae6d5040b14059bbd4a90->leave($__internal_9743b1c02c948b52c23078a27498b2c98cb0c3f9576ae6d5040b14059bbd4a90_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad81225d04e1ced445d99ea81e6f06060eacb8e68e7bec4c4289d9e162a91e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad81225d04e1ced445d99ea81e6f06060eacb8e68e7bec4c4289d9e162a91e1c->enter($__internal_ad81225d04e1ced445d99ea81e6f06060eacb8e68e7bec4c4289d9e162a91e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f4e4c013008ce0fa23b50f6ed22e243ae4bd00d6350f753d033e36f1267bdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4e4c013008ce0fa23b50f6ed22e243ae4bd00d6350f753d033e36f1267bdec->enter($__internal_4f4e4c013008ce0fa23b50f6ed22e243ae4bd00d6350f753d033e36f1267bdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f4e4c013008ce0fa23b50f6ed22e243ae4bd00d6350f753d033e36f1267bdec->leave($__internal_4f4e4c013008ce0fa23b50f6ed22e243ae4bd00d6350f753d033e36f1267bdec_prof);

        
        $__internal_ad81225d04e1ced445d99ea81e6f06060eacb8e68e7bec4c4289d9e162a91e1c->leave($__internal_ad81225d04e1ced445d99ea81e6f06060eacb8e68e7bec4c4289d9e162a91e1c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8821fe6342f729fc4e8b04a82ecb7893174357890af68d920356a8073bfac24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8821fe6342f729fc4e8b04a82ecb7893174357890af68d920356a8073bfac24c->enter($__internal_8821fe6342f729fc4e8b04a82ecb7893174357890af68d920356a8073bfac24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33cce6381e463b42161b0e723710bae35d69ebc7613f5397bcaac22813a7a045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cce6381e463b42161b0e723710bae35d69ebc7613f5397bcaac22813a7a045->enter($__internal_33cce6381e463b42161b0e723710bae35d69ebc7613f5397bcaac22813a7a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_33cce6381e463b42161b0e723710bae35d69ebc7613f5397bcaac22813a7a045->leave($__internal_33cce6381e463b42161b0e723710bae35d69ebc7613f5397bcaac22813a7a045_prof);

        
        $__internal_8821fe6342f729fc4e8b04a82ecb7893174357890af68d920356a8073bfac24c->leave($__internal_8821fe6342f729fc4e8b04a82ecb7893174357890af68d920356a8073bfac24c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
