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
        $__internal_2e385609baccf7f3f3ec47a03c7b571ec3ce535d496d9a7c13bd07e3a6cf423e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e385609baccf7f3f3ec47a03c7b571ec3ce535d496d9a7c13bd07e3a6cf423e->enter($__internal_2e385609baccf7f3f3ec47a03c7b571ec3ce535d496d9a7c13bd07e3a6cf423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a2a508a4864ffca59676b98318942099decf311704c0de7fecf351cfa87c5fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a508a4864ffca59676b98318942099decf311704c0de7fecf351cfa87c5fc7->enter($__internal_a2a508a4864ffca59676b98318942099decf311704c0de7fecf351cfa87c5fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e385609baccf7f3f3ec47a03c7b571ec3ce535d496d9a7c13bd07e3a6cf423e->leave($__internal_2e385609baccf7f3f3ec47a03c7b571ec3ce535d496d9a7c13bd07e3a6cf423e_prof);

        
        $__internal_a2a508a4864ffca59676b98318942099decf311704c0de7fecf351cfa87c5fc7->leave($__internal_a2a508a4864ffca59676b98318942099decf311704c0de7fecf351cfa87c5fc7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b511b20965efb6b103c8f359f87999ab349d36670d9a6c7922062f4133ee3ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b511b20965efb6b103c8f359f87999ab349d36670d9a6c7922062f4133ee3ab5->enter($__internal_b511b20965efb6b103c8f359f87999ab349d36670d9a6c7922062f4133ee3ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f42e0e92190fc8b510ce576ef8593d58ec3aa07a7196f2bc7222d86b3f76ea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42e0e92190fc8b510ce576ef8593d58ec3aa07a7196f2bc7222d86b3f76ea54->enter($__internal_f42e0e92190fc8b510ce576ef8593d58ec3aa07a7196f2bc7222d86b3f76ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f42e0e92190fc8b510ce576ef8593d58ec3aa07a7196f2bc7222d86b3f76ea54->leave($__internal_f42e0e92190fc8b510ce576ef8593d58ec3aa07a7196f2bc7222d86b3f76ea54_prof);

        
        $__internal_b511b20965efb6b103c8f359f87999ab349d36670d9a6c7922062f4133ee3ab5->leave($__internal_b511b20965efb6b103c8f359f87999ab349d36670d9a6c7922062f4133ee3ab5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9673dffccad7776890f5bd53d96c68e086d1d1d94afe155bea46b92d532e32c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9673dffccad7776890f5bd53d96c68e086d1d1d94afe155bea46b92d532e32c1->enter($__internal_9673dffccad7776890f5bd53d96c68e086d1d1d94afe155bea46b92d532e32c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4ba9aa1cd22f290a51d0d129e3b4cf686f330f674beadc5414c4bacad0e3d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ba9aa1cd22f290a51d0d129e3b4cf686f330f674beadc5414c4bacad0e3d51->enter($__internal_e4ba9aa1cd22f290a51d0d129e3b4cf686f330f674beadc5414c4bacad0e3d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4ba9aa1cd22f290a51d0d129e3b4cf686f330f674beadc5414c4bacad0e3d51->leave($__internal_e4ba9aa1cd22f290a51d0d129e3b4cf686f330f674beadc5414c4bacad0e3d51_prof);

        
        $__internal_9673dffccad7776890f5bd53d96c68e086d1d1d94afe155bea46b92d532e32c1->leave($__internal_9673dffccad7776890f5bd53d96c68e086d1d1d94afe155bea46b92d532e32c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_684317c1ac126816fc6ed9d9a9d485c04c1d6f7280243917211b25d88d93f2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684317c1ac126816fc6ed9d9a9d485c04c1d6f7280243917211b25d88d93f2ae->enter($__internal_684317c1ac126816fc6ed9d9a9d485c04c1d6f7280243917211b25d88d93f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ff1e19f1049fb000f1de3c1ce74d644a53363ca1c962c8f9aa4c29afaad3859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff1e19f1049fb000f1de3c1ce74d644a53363ca1c962c8f9aa4c29afaad3859->enter($__internal_8ff1e19f1049fb000f1de3c1ce74d644a53363ca1c962c8f9aa4c29afaad3859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8ff1e19f1049fb000f1de3c1ce74d644a53363ca1c962c8f9aa4c29afaad3859->leave($__internal_8ff1e19f1049fb000f1de3c1ce74d644a53363ca1c962c8f9aa4c29afaad3859_prof);

        
        $__internal_684317c1ac126816fc6ed9d9a9d485c04c1d6f7280243917211b25d88d93f2ae->leave($__internal_684317c1ac126816fc6ed9d9a9d485c04c1d6f7280243917211b25d88d93f2ae_prof);

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
