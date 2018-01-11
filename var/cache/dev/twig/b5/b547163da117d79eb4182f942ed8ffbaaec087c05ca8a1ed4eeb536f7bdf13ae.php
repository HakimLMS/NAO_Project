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
        $__internal_ac36264f4ff1d3215506bb8515ab4c8d762d03efedade603e5984f310711fbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac36264f4ff1d3215506bb8515ab4c8d762d03efedade603e5984f310711fbff->enter($__internal_ac36264f4ff1d3215506bb8515ab4c8d762d03efedade603e5984f310711fbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_64288abe2326567410bd5f95b249d79d1df604ab7974a5befd9291a32c80490d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64288abe2326567410bd5f95b249d79d1df604ab7974a5befd9291a32c80490d->enter($__internal_64288abe2326567410bd5f95b249d79d1df604ab7974a5befd9291a32c80490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac36264f4ff1d3215506bb8515ab4c8d762d03efedade603e5984f310711fbff->leave($__internal_ac36264f4ff1d3215506bb8515ab4c8d762d03efedade603e5984f310711fbff_prof);

        
        $__internal_64288abe2326567410bd5f95b249d79d1df604ab7974a5befd9291a32c80490d->leave($__internal_64288abe2326567410bd5f95b249d79d1df604ab7974a5befd9291a32c80490d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2573fe46cb8759f642d4e854eeac2eaca7e509e517f297d81f71fdc3271d692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2573fe46cb8759f642d4e854eeac2eaca7e509e517f297d81f71fdc3271d692->enter($__internal_e2573fe46cb8759f642d4e854eeac2eaca7e509e517f297d81f71fdc3271d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe90afb9f5680d81f807c965c83a2cf57a857f1afacf26b1312170b47c9bd726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe90afb9f5680d81f807c965c83a2cf57a857f1afacf26b1312170b47c9bd726->enter($__internal_fe90afb9f5680d81f807c965c83a2cf57a857f1afacf26b1312170b47c9bd726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_fe90afb9f5680d81f807c965c83a2cf57a857f1afacf26b1312170b47c9bd726->leave($__internal_fe90afb9f5680d81f807c965c83a2cf57a857f1afacf26b1312170b47c9bd726_prof);

        
        $__internal_e2573fe46cb8759f642d4e854eeac2eaca7e509e517f297d81f71fdc3271d692->leave($__internal_e2573fe46cb8759f642d4e854eeac2eaca7e509e517f297d81f71fdc3271d692_prof);

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
