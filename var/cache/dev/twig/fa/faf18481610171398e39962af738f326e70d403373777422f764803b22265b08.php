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
        $__internal_fad5fb440120f79f9981cbcf6af92d80e54066ae522e21cba12128bb9353c09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad5fb440120f79f9981cbcf6af92d80e54066ae522e21cba12128bb9353c09a->enter($__internal_fad5fb440120f79f9981cbcf6af92d80e54066ae522e21cba12128bb9353c09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_32da047d20b111978991ad8e6b4f1664f879156acef31fd2102d2f48fcb2f9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32da047d20b111978991ad8e6b4f1664f879156acef31fd2102d2f48fcb2f9f9->enter($__internal_32da047d20b111978991ad8e6b4f1664f879156acef31fd2102d2f48fcb2f9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fad5fb440120f79f9981cbcf6af92d80e54066ae522e21cba12128bb9353c09a->leave($__internal_fad5fb440120f79f9981cbcf6af92d80e54066ae522e21cba12128bb9353c09a_prof);

        
        $__internal_32da047d20b111978991ad8e6b4f1664f879156acef31fd2102d2f48fcb2f9f9->leave($__internal_32da047d20b111978991ad8e6b4f1664f879156acef31fd2102d2f48fcb2f9f9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a2400355639f2e523a89a202d0b7ccd59735f7690291bb861b04570e1e6ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a2400355639f2e523a89a202d0b7ccd59735f7690291bb861b04570e1e6ab2->enter($__internal_65a2400355639f2e523a89a202d0b7ccd59735f7690291bb861b04570e1e6ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee02b0b02f01e3c1be4a90c5f0f4a2e9b411e469c2c8989485faf4de8e2245cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee02b0b02f01e3c1be4a90c5f0f4a2e9b411e469c2c8989485faf4de8e2245cb->enter($__internal_ee02b0b02f01e3c1be4a90c5f0f4a2e9b411e469c2c8989485faf4de8e2245cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee02b0b02f01e3c1be4a90c5f0f4a2e9b411e469c2c8989485faf4de8e2245cb->leave($__internal_ee02b0b02f01e3c1be4a90c5f0f4a2e9b411e469c2c8989485faf4de8e2245cb_prof);

        
        $__internal_65a2400355639f2e523a89a202d0b7ccd59735f7690291bb861b04570e1e6ab2->leave($__internal_65a2400355639f2e523a89a202d0b7ccd59735f7690291bb861b04570e1e6ab2_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_650f7a7a235a5e731205040c52424ec39232fd15527d84138d43d42ddc888228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650f7a7a235a5e731205040c52424ec39232fd15527d84138d43d42ddc888228->enter($__internal_650f7a7a235a5e731205040c52424ec39232fd15527d84138d43d42ddc888228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_867e0c4c412830f14c397651ed541acb06b4428032a482cd497eead2ab21e4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867e0c4c412830f14c397651ed541acb06b4428032a482cd497eead2ab21e4ca->enter($__internal_867e0c4c412830f14c397651ed541acb06b4428032a482cd497eead2ab21e4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        ";
        // line 9
        echo "    </head>
    ";
        
        $__internal_867e0c4c412830f14c397651ed541acb06b4428032a482cd497eead2ab21e4ca->leave($__internal_867e0c4c412830f14c397651ed541acb06b4428032a482cd497eead2ab21e4ca_prof);

        
        $__internal_650f7a7a235a5e731205040c52424ec39232fd15527d84138d43d42ddc888228->leave($__internal_650f7a7a235a5e731205040c52424ec39232fd15527d84138d43d42ddc888228_prof);

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
        return array (  81 => 9,  78 => 6,  69 => 5,  57 => 12,  53 => 11,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% block script %}
    <head>
        {#<script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>#}
    </head>
    {% endblock %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "blog/new.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\new.html.twig");
    }
}
