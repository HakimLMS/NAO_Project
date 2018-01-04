<?php

/* blog/home.html.twig */
class __TwigTemplate_e07a0de03eba18ff29bffeaa15fce88229c45996a6cb2b7a0ca9e677ce319022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf229b926e08e403e8eb04e050906b9a6aad7448c0de9471dfdf4253513d0572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf229b926e08e403e8eb04e050906b9a6aad7448c0de9471dfdf4253513d0572->enter($__internal_cf229b926e08e403e8eb04e050906b9a6aad7448c0de9471dfdf4253513d0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_01605ed961ef2d3b7d1970972fce2351bd09eed926c85bdd36139a256d7c94aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01605ed961ef2d3b7d1970972fce2351bd09eed926c85bdd36139a256d7c94aa->enter($__internal_01605ed961ef2d3b7d1970972fce2351bd09eed926c85bdd36139a256d7c94aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf229b926e08e403e8eb04e050906b9a6aad7448c0de9471dfdf4253513d0572->leave($__internal_cf229b926e08e403e8eb04e050906b9a6aad7448c0de9471dfdf4253513d0572_prof);

        
        $__internal_01605ed961ef2d3b7d1970972fce2351bd09eed926c85bdd36139a256d7c94aa->leave($__internal_01605ed961ef2d3b7d1970972fce2351bd09eed926c85bdd36139a256d7c94aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edf9b2c5a4ee6882b55dff5b36b399bb5a4a8f2cba17bb5da8570c9f1dad6fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf9b2c5a4ee6882b55dff5b36b399bb5a4a8f2cba17bb5da8570c9f1dad6fec->enter($__internal_edf9b2c5a4ee6882b55dff5b36b399bb5a4a8f2cba17bb5da8570c9f1dad6fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8242246a9476387995f18ca98a31d64525bbf27603815783ac99649adcd7a440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8242246a9476387995f18ca98a31d64525bbf27603815783ac99649adcd7a440->enter($__internal_8242246a9476387995f18ca98a31d64525bbf27603815783ac99649adcd7a440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_8242246a9476387995f18ca98a31d64525bbf27603815783ac99649adcd7a440->leave($__internal_8242246a9476387995f18ca98a31d64525bbf27603815783ac99649adcd7a440_prof);

        
        $__internal_edf9b2c5a4ee6882b55dff5b36b399bb5a4a8f2cba17bb5da8570c9f1dad6fec->leave($__internal_edf9b2c5a4ee6882b55dff5b36b399bb5a4a8f2cba17bb5da8570c9f1dad6fec_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<h2>TEST Blog</h2>

\t<a href=\"{{ path('blog_list') }}\">Page blog</a>


{% endblock %}\t", "blog/home.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\home.html.twig");
    }
}
