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
        $__internal_38af9ef224a1512e057fe131a35bf8480a8cc6062571b7073bb853c914afbe43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38af9ef224a1512e057fe131a35bf8480a8cc6062571b7073bb853c914afbe43->enter($__internal_38af9ef224a1512e057fe131a35bf8480a8cc6062571b7073bb853c914afbe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e63e252787f9dce76b96c3f4515f2b78799b4281d6d85575559110c0ac5eb2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63e252787f9dce76b96c3f4515f2b78799b4281d6d85575559110c0ac5eb2ea->enter($__internal_e63e252787f9dce76b96c3f4515f2b78799b4281d6d85575559110c0ac5eb2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38af9ef224a1512e057fe131a35bf8480a8cc6062571b7073bb853c914afbe43->leave($__internal_38af9ef224a1512e057fe131a35bf8480a8cc6062571b7073bb853c914afbe43_prof);

        
        $__internal_e63e252787f9dce76b96c3f4515f2b78799b4281d6d85575559110c0ac5eb2ea->leave($__internal_e63e252787f9dce76b96c3f4515f2b78799b4281d6d85575559110c0ac5eb2ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2eddf4d153b61d6976d6c0f4c89d02f1ee8ecdc2f1fc602fe31ff5c6a8aed915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eddf4d153b61d6976d6c0f4c89d02f1ee8ecdc2f1fc602fe31ff5c6a8aed915->enter($__internal_2eddf4d153b61d6976d6c0f4c89d02f1ee8ecdc2f1fc602fe31ff5c6a8aed915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e60947efee3a8fe7898a33d580bb08d537965c3ea06034ee0f1d331e98ef3237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60947efee3a8fe7898a33d580bb08d537965c3ea06034ee0f1d331e98ef3237->enter($__internal_e60947efee3a8fe7898a33d580bb08d537965c3ea06034ee0f1d331e98ef3237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e60947efee3a8fe7898a33d580bb08d537965c3ea06034ee0f1d331e98ef3237->leave($__internal_e60947efee3a8fe7898a33d580bb08d537965c3ea06034ee0f1d331e98ef3237_prof);

        
        $__internal_2eddf4d153b61d6976d6c0f4c89d02f1ee8ecdc2f1fc602fe31ff5c6a8aed915->leave($__internal_2eddf4d153b61d6976d6c0f4c89d02f1ee8ecdc2f1fc602fe31ff5c6a8aed915_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21532ffe58009b92cde2a9ca720c7c08ceed622a2b3b8dcc23aa74787685fd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21532ffe58009b92cde2a9ca720c7c08ceed622a2b3b8dcc23aa74787685fd5e->enter($__internal_21532ffe58009b92cde2a9ca720c7c08ceed622a2b3b8dcc23aa74787685fd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b22b2e626994c514bd17baa8199837433fc0545b749c883ff7d0f52485767ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b22b2e626994c514bd17baa8199837433fc0545b749c883ff7d0f52485767ed->enter($__internal_3b22b2e626994c514bd17baa8199837433fc0545b749c883ff7d0f52485767ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b22b2e626994c514bd17baa8199837433fc0545b749c883ff7d0f52485767ed->leave($__internal_3b22b2e626994c514bd17baa8199837433fc0545b749c883ff7d0f52485767ed_prof);

        
        $__internal_21532ffe58009b92cde2a9ca720c7c08ceed622a2b3b8dcc23aa74787685fd5e->leave($__internal_21532ffe58009b92cde2a9ca720c7c08ceed622a2b3b8dcc23aa74787685fd5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3643edd2b987c0b64fbab68f32d4f3c17bb5a9ca699313f26299ed459ab0e84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3643edd2b987c0b64fbab68f32d4f3c17bb5a9ca699313f26299ed459ab0e84a->enter($__internal_3643edd2b987c0b64fbab68f32d4f3c17bb5a9ca699313f26299ed459ab0e84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bab048abf0ea7e8866a17e2f7f1e09d222d2ca37c44c84b86de46df5fcdb3cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab048abf0ea7e8866a17e2f7f1e09d222d2ca37c44c84b86de46df5fcdb3cba->enter($__internal_bab048abf0ea7e8866a17e2f7f1e09d222d2ca37c44c84b86de46df5fcdb3cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bab048abf0ea7e8866a17e2f7f1e09d222d2ca37c44c84b86de46df5fcdb3cba->leave($__internal_bab048abf0ea7e8866a17e2f7f1e09d222d2ca37c44c84b86de46df5fcdb3cba_prof);

        
        $__internal_3643edd2b987c0b64fbab68f32d4f3c17bb5a9ca699313f26299ed459ab0e84a->leave($__internal_3643edd2b987c0b64fbab68f32d4f3c17bb5a9ca699313f26299ed459ab0e84a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
