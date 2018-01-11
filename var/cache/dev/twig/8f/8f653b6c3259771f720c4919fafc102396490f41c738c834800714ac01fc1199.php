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
        $__internal_3ac45036b21d69194a690bed7681435ade961e52f9df9b4d57502661d50bc0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac45036b21d69194a690bed7681435ade961e52f9df9b4d57502661d50bc0b7->enter($__internal_3ac45036b21d69194a690bed7681435ade961e52f9df9b4d57502661d50bc0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_627b6938a61821fd0c7f786b778a3f8678cdbfb30151ef6c1f7786ec30afd96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627b6938a61821fd0c7f786b778a3f8678cdbfb30151ef6c1f7786ec30afd96e->enter($__internal_627b6938a61821fd0c7f786b778a3f8678cdbfb30151ef6c1f7786ec30afd96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac45036b21d69194a690bed7681435ade961e52f9df9b4d57502661d50bc0b7->leave($__internal_3ac45036b21d69194a690bed7681435ade961e52f9df9b4d57502661d50bc0b7_prof);

        
        $__internal_627b6938a61821fd0c7f786b778a3f8678cdbfb30151ef6c1f7786ec30afd96e->leave($__internal_627b6938a61821fd0c7f786b778a3f8678cdbfb30151ef6c1f7786ec30afd96e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cf5973a3eb62ce0c3d915d3cabbf49f9b809a5a33ac0e4b8811df89856f7448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf5973a3eb62ce0c3d915d3cabbf49f9b809a5a33ac0e4b8811df89856f7448->enter($__internal_6cf5973a3eb62ce0c3d915d3cabbf49f9b809a5a33ac0e4b8811df89856f7448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b0837506fc3adf59c13fd44fce0e4db5e1be2818feb335bd5360da6d2b73fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0837506fc3adf59c13fd44fce0e4db5e1be2818feb335bd5360da6d2b73fd0->enter($__internal_0b0837506fc3adf59c13fd44fce0e4db5e1be2818feb335bd5360da6d2b73fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b0837506fc3adf59c13fd44fce0e4db5e1be2818feb335bd5360da6d2b73fd0->leave($__internal_0b0837506fc3adf59c13fd44fce0e4db5e1be2818feb335bd5360da6d2b73fd0_prof);

        
        $__internal_6cf5973a3eb62ce0c3d915d3cabbf49f9b809a5a33ac0e4b8811df89856f7448->leave($__internal_6cf5973a3eb62ce0c3d915d3cabbf49f9b809a5a33ac0e4b8811df89856f7448_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1378bc8d5fbe4a73f47286461bfcdd8f311c92361efa078778acd4f96a656e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1378bc8d5fbe4a73f47286461bfcdd8f311c92361efa078778acd4f96a656e53->enter($__internal_1378bc8d5fbe4a73f47286461bfcdd8f311c92361efa078778acd4f96a656e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a7e22f7930cfa62f308bf65b3d18e68b556bc9932d340e776fcc26bee23749d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7e22f7930cfa62f308bf65b3d18e68b556bc9932d340e776fcc26bee23749d->enter($__internal_1a7e22f7930cfa62f308bf65b3d18e68b556bc9932d340e776fcc26bee23749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a7e22f7930cfa62f308bf65b3d18e68b556bc9932d340e776fcc26bee23749d->leave($__internal_1a7e22f7930cfa62f308bf65b3d18e68b556bc9932d340e776fcc26bee23749d_prof);

        
        $__internal_1378bc8d5fbe4a73f47286461bfcdd8f311c92361efa078778acd4f96a656e53->leave($__internal_1378bc8d5fbe4a73f47286461bfcdd8f311c92361efa078778acd4f96a656e53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9aea7635168b42c92bbbf95ff1cf8bde7cd930551fd26ae1526011c696a65322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aea7635168b42c92bbbf95ff1cf8bde7cd930551fd26ae1526011c696a65322->enter($__internal_9aea7635168b42c92bbbf95ff1cf8bde7cd930551fd26ae1526011c696a65322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf54422e12592f39de66b0fb310107aac04369376378dfce43ed2ae27e98e8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf54422e12592f39de66b0fb310107aac04369376378dfce43ed2ae27e98e8c9->enter($__internal_cf54422e12592f39de66b0fb310107aac04369376378dfce43ed2ae27e98e8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cf54422e12592f39de66b0fb310107aac04369376378dfce43ed2ae27e98e8c9->leave($__internal_cf54422e12592f39de66b0fb310107aac04369376378dfce43ed2ae27e98e8c9_prof);

        
        $__internal_9aea7635168b42c92bbbf95ff1cf8bde7cd930551fd26ae1526011c696a65322->leave($__internal_9aea7635168b42c92bbbf95ff1cf8bde7cd930551fd26ae1526011c696a65322_prof);

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
