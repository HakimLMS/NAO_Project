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
        $__internal_b700bb1b088e79d3464db8fa7d95ba910f12b562589be71a10e333ba3661bfe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b700bb1b088e79d3464db8fa7d95ba910f12b562589be71a10e333ba3661bfe7->enter($__internal_b700bb1b088e79d3464db8fa7d95ba910f12b562589be71a10e333ba3661bfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_68a9e4eb5481b8c7e7ae67fdaeeb92db3fcca18853cd5b454795d24e144f1f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a9e4eb5481b8c7e7ae67fdaeeb92db3fcca18853cd5b454795d24e144f1f1c->enter($__internal_68a9e4eb5481b8c7e7ae67fdaeeb92db3fcca18853cd5b454795d24e144f1f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b700bb1b088e79d3464db8fa7d95ba910f12b562589be71a10e333ba3661bfe7->leave($__internal_b700bb1b088e79d3464db8fa7d95ba910f12b562589be71a10e333ba3661bfe7_prof);

        
        $__internal_68a9e4eb5481b8c7e7ae67fdaeeb92db3fcca18853cd5b454795d24e144f1f1c->leave($__internal_68a9e4eb5481b8c7e7ae67fdaeeb92db3fcca18853cd5b454795d24e144f1f1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40cfe4497dd7b5fd6aba9dc6565882d27cb78af4c7b395b248689d6db8a5edfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cfe4497dd7b5fd6aba9dc6565882d27cb78af4c7b395b248689d6db8a5edfd->enter($__internal_40cfe4497dd7b5fd6aba9dc6565882d27cb78af4c7b395b248689d6db8a5edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9c844938a2ead7cb5f9df6110f917c0721a9516a4007de47d0ccd0f188bfc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c844938a2ead7cb5f9df6110f917c0721a9516a4007de47d0ccd0f188bfc4f->enter($__internal_c9c844938a2ead7cb5f9df6110f917c0721a9516a4007de47d0ccd0f188bfc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_c9c844938a2ead7cb5f9df6110f917c0721a9516a4007de47d0ccd0f188bfc4f->leave($__internal_c9c844938a2ead7cb5f9df6110f917c0721a9516a4007de47d0ccd0f188bfc4f_prof);

        
        $__internal_40cfe4497dd7b5fd6aba9dc6565882d27cb78af4c7b395b248689d6db8a5edfd->leave($__internal_40cfe4497dd7b5fd6aba9dc6565882d27cb78af4c7b395b248689d6db8a5edfd_prof);

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
