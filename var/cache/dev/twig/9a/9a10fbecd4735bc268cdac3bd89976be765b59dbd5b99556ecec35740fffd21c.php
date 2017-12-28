<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_191fd969a5d1bcbabaeda8ebd7df9541016b7e82b7eb181196aeffa4ecaa5a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3809fb2c56413307fa404e47b81d605a6103cc03e8ffb9602b81594f38ce073e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3809fb2c56413307fa404e47b81d605a6103cc03e8ffb9602b81594f38ce073e->enter($__internal_3809fb2c56413307fa404e47b81d605a6103cc03e8ffb9602b81594f38ce073e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0d65a28ba0c65c3ecfc784fe0c3e564e68f2bea6b400153a74443ded613cbbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d65a28ba0c65c3ecfc784fe0c3e564e68f2bea6b400153a74443ded613cbbb4->enter($__internal_0d65a28ba0c65c3ecfc784fe0c3e564e68f2bea6b400153a74443ded613cbbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3809fb2c56413307fa404e47b81d605a6103cc03e8ffb9602b81594f38ce073e->leave($__internal_3809fb2c56413307fa404e47b81d605a6103cc03e8ffb9602b81594f38ce073e_prof);

        
        $__internal_0d65a28ba0c65c3ecfc784fe0c3e564e68f2bea6b400153a74443ded613cbbb4->leave($__internal_0d65a28ba0c65c3ecfc784fe0c3e564e68f2bea6b400153a74443ded613cbbb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a69a4a018850d0bf8cf6dffd23e2836e618d1ad9c31ad15ed5d2b58451cd3aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69a4a018850d0bf8cf6dffd23e2836e618d1ad9c31ad15ed5d2b58451cd3aca->enter($__internal_a69a4a018850d0bf8cf6dffd23e2836e618d1ad9c31ad15ed5d2b58451cd3aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43aa4a908099a948fad58c85a48aada3fe60e7ccf9eb992939c3a1dd476e9753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43aa4a908099a948fad58c85a48aada3fe60e7ccf9eb992939c3a1dd476e9753->enter($__internal_43aa4a908099a948fad58c85a48aada3fe60e7ccf9eb992939c3a1dd476e9753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_43aa4a908099a948fad58c85a48aada3fe60e7ccf9eb992939c3a1dd476e9753->leave($__internal_43aa4a908099a948fad58c85a48aada3fe60e7ccf9eb992939c3a1dd476e9753_prof);

        
        $__internal_a69a4a018850d0bf8cf6dffd23e2836e618d1ad9c31ad15ed5d2b58451cd3aca->leave($__internal_a69a4a018850d0bf8cf6dffd23e2836e618d1ad9c31ad15ed5d2b58451cd3aca_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aea08882ff52c655f60a5e4dff7fa21d06897e3fb01e3943f34e945b9106c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aea08882ff52c655f60a5e4dff7fa21d06897e3fb01e3943f34e945b9106c2c->enter($__internal_5aea08882ff52c655f60a5e4dff7fa21d06897e3fb01e3943f34e945b9106c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e892b2892e108ae61fe7144d36e8f1cd498a4545aea9aaa9cc2011ea37881df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e892b2892e108ae61fe7144d36e8f1cd498a4545aea9aaa9cc2011ea37881df->enter($__internal_4e892b2892e108ae61fe7144d36e8f1cd498a4545aea9aaa9cc2011ea37881df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_4e892b2892e108ae61fe7144d36e8f1cd498a4545aea9aaa9cc2011ea37881df->leave($__internal_4e892b2892e108ae61fe7144d36e8f1cd498a4545aea9aaa9cc2011ea37881df_prof);

        
        $__internal_5aea08882ff52c655f60a5e4dff7fa21d06897e3fb01e3943f34e945b9106c2c->leave($__internal_5aea08882ff52c655f60a5e4dff7fa21d06897e3fb01e3943f34e945b9106c2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
