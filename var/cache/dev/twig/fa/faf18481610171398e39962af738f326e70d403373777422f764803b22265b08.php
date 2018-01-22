<?php

/* blog/new.html.twig */
class __TwigTemplate_630c9c3673f6ad28c9d7ae9262b18c5c88ef424fdb841902da24555d44b7de89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/new.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f74cebb9603907d55a83d8689d5bc254cfce2cf509aff66963fc153b8444169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f74cebb9603907d55a83d8689d5bc254cfce2cf509aff66963fc153b8444169->enter($__internal_8f74cebb9603907d55a83d8689d5bc254cfce2cf509aff66963fc153b8444169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_b865d5e1ac14303e25b16ecfe6a6bd54797b304053186c5b54b3dd6aeb49fd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b865d5e1ac14303e25b16ecfe6a6bd54797b304053186c5b54b3dd6aeb49fd1c->enter($__internal_b865d5e1ac14303e25b16ecfe6a6bd54797b304053186c5b54b3dd6aeb49fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f74cebb9603907d55a83d8689d5bc254cfce2cf509aff66963fc153b8444169->leave($__internal_8f74cebb9603907d55a83d8689d5bc254cfce2cf509aff66963fc153b8444169_prof);

        
        $__internal_b865d5e1ac14303e25b16ecfe6a6bd54797b304053186c5b54b3dd6aeb49fd1c->leave($__internal_b865d5e1ac14303e25b16ecfe6a6bd54797b304053186c5b54b3dd6aeb49fd1c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0448ffa59820efaebbd2367e5839fc38a6ab631e6c69750473d2287dcd3e3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0448ffa59820efaebbd2367e5839fc38a6ab631e6c69750473d2287dcd3e3e1->enter($__internal_f0448ffa59820efaebbd2367e5839fc38a6ab631e6c69750473d2287dcd3e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e0c2f40970cafb4556b9e8f44e13c420d763b14a1abd58887ada9de46f663a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0c2f40970cafb4556b9e8f44e13c420d763b14a1abd58887ada9de46f663a0->enter($__internal_1e0c2f40970cafb4556b9e8f44e13c420d763b14a1abd58887ada9de46f663a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_1e0c2f40970cafb4556b9e8f44e13c420d763b14a1abd58887ada9de46f663a0->leave($__internal_1e0c2f40970cafb4556b9e8f44e13c420d763b14a1abd58887ada9de46f663a0_prof);

        
        $__internal_f0448ffa59820efaebbd2367e5839fc38a6ab631e6c69750473d2287dcd3e3e1->leave($__internal_f0448ffa59820efaebbd2367e5839fc38a6ab631e6c69750473d2287dcd3e3e1_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_8604fce5cfb640bf143ad3428ac560ac955ae2bbec451444c9885f14b8aca176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8604fce5cfb640bf143ad3428ac560ac955ae2bbec451444c9885f14b8aca176->enter($__internal_8604fce5cfb640bf143ad3428ac560ac955ae2bbec451444c9885f14b8aca176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_e84e8d8a1b0b4f1fc413fdc3c1ea18b86f17380a18fd6ee3a322d09bb885326e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84e8d8a1b0b4f1fc413fdc3c1ea18b86f17380a18fd6ee3a322d09bb885326e->enter($__internal_e84e8d8a1b0b4f1fc413fdc3c1ea18b86f17380a18fd6ee3a322d09bb885326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_e84e8d8a1b0b4f1fc413fdc3c1ea18b86f17380a18fd6ee3a322d09bb885326e->leave($__internal_e84e8d8a1b0b4f1fc413fdc3c1ea18b86f17380a18fd6ee3a322d09bb885326e_prof);

        
        $__internal_8604fce5cfb640bf143ad3428ac560ac955ae2bbec451444c9885f14b8aca176->leave($__internal_8604fce5cfb640bf143ad3428ac560ac955ae2bbec451444c9885f14b8aca176_prof);

    }

    public function getTemplateName()
    {
        return "blog/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 6,  69 => 5,  57 => 12,  53 => 11,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% block script %}
    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    {% endblock %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "blog/new.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\new.html.twig");
    }
}
