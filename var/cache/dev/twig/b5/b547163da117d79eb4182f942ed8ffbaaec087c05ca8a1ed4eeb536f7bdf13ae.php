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
        $__internal_db0a89830d2eff0adbd4dd36ac7e1b82f8380601aba7bcea2fb15fe6395f3d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0a89830d2eff0adbd4dd36ac7e1b82f8380601aba7bcea2fb15fe6395f3d8e->enter($__internal_db0a89830d2eff0adbd4dd36ac7e1b82f8380601aba7bcea2fb15fe6395f3d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_ab14171cd12064b645ee5ce32372b01d56a7e522eae020219ed269eec2ef0ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab14171cd12064b645ee5ce32372b01d56a7e522eae020219ed269eec2ef0ab4->enter($__internal_ab14171cd12064b645ee5ce32372b01d56a7e522eae020219ed269eec2ef0ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db0a89830d2eff0adbd4dd36ac7e1b82f8380601aba7bcea2fb15fe6395f3d8e->leave($__internal_db0a89830d2eff0adbd4dd36ac7e1b82f8380601aba7bcea2fb15fe6395f3d8e_prof);

        
        $__internal_ab14171cd12064b645ee5ce32372b01d56a7e522eae020219ed269eec2ef0ab4->leave($__internal_ab14171cd12064b645ee5ce32372b01d56a7e522eae020219ed269eec2ef0ab4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbcfdbae3119a8ae333212e3476d2b26c19ddd3db2b55f1d976f1c770b244eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcfdbae3119a8ae333212e3476d2b26c19ddd3db2b55f1d976f1c770b244eee->enter($__internal_fbcfdbae3119a8ae333212e3476d2b26c19ddd3db2b55f1d976f1c770b244eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29fb8476cb6deeee6adeae117e73f153d17aa9c460b3922b5d18742ddffb31b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fb8476cb6deeee6adeae117e73f153d17aa9c460b3922b5d18742ddffb31b2->enter($__internal_29fb8476cb6deeee6adeae117e73f153d17aa9c460b3922b5d18742ddffb31b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_29fb8476cb6deeee6adeae117e73f153d17aa9c460b3922b5d18742ddffb31b2->leave($__internal_29fb8476cb6deeee6adeae117e73f153d17aa9c460b3922b5d18742ddffb31b2_prof);

        
        $__internal_fbcfdbae3119a8ae333212e3476d2b26c19ddd3db2b55f1d976f1c770b244eee->leave($__internal_fbcfdbae3119a8ae333212e3476d2b26c19ddd3db2b55f1d976f1c770b244eee_prof);

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
