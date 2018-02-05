<?php

/* blog/home.html.twig */
class __TwigTemplate_546f3b79b66afb7ea3417d5e828facf7ea672aa8a8b9d6887e18ecf481387a67 extends Twig_Template
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
        $__internal_789d52528758f9d80b4bb00f3d1c6ddf8e2fdc4b5408af37120194ea42cac124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789d52528758f9d80b4bb00f3d1c6ddf8e2fdc4b5408af37120194ea42cac124->enter($__internal_789d52528758f9d80b4bb00f3d1c6ddf8e2fdc4b5408af37120194ea42cac124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_6085c3ea0aae46fd42d2c525acae63b0eb9f03df85ec425e44525b20d4618df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6085c3ea0aae46fd42d2c525acae63b0eb9f03df85ec425e44525b20d4618df9->enter($__internal_6085c3ea0aae46fd42d2c525acae63b0eb9f03df85ec425e44525b20d4618df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789d52528758f9d80b4bb00f3d1c6ddf8e2fdc4b5408af37120194ea42cac124->leave($__internal_789d52528758f9d80b4bb00f3d1c6ddf8e2fdc4b5408af37120194ea42cac124_prof);

        
        $__internal_6085c3ea0aae46fd42d2c525acae63b0eb9f03df85ec425e44525b20d4618df9->leave($__internal_6085c3ea0aae46fd42d2c525acae63b0eb9f03df85ec425e44525b20d4618df9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d855464f65a0dc1619a9a91529200e66c0c3781c73267dd425f54a9593415e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d855464f65a0dc1619a9a91529200e66c0c3781c73267dd425f54a9593415e6a->enter($__internal_d855464f65a0dc1619a9a91529200e66c0c3781c73267dd425f54a9593415e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14fda1d52e618fa51da54046cd94a7d1bce65ac290f36a6772d876847349eeea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fda1d52e618fa51da54046cd94a7d1bce65ac290f36a6772d876847349eeea->enter($__internal_14fda1d52e618fa51da54046cd94a7d1bce65ac290f36a6772d876847349eeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_14fda1d52e618fa51da54046cd94a7d1bce65ac290f36a6772d876847349eeea->leave($__internal_14fda1d52e618fa51da54046cd94a7d1bce65ac290f36a6772d876847349eeea_prof);

        
        $__internal_d855464f65a0dc1619a9a91529200e66c0c3781c73267dd425f54a9593415e6a->leave($__internal_d855464f65a0dc1619a9a91529200e66c0c3781c73267dd425f54a9593415e6a_prof);

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


{% endblock %}\t", "blog/home.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\home.html.twig");
    }
}
