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
        $__internal_848303aeacaa1baa3bb9b4e2c470d45888be889f96fda27760de2c6df4d252fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848303aeacaa1baa3bb9b4e2c470d45888be889f96fda27760de2c6df4d252fb->enter($__internal_848303aeacaa1baa3bb9b4e2c470d45888be889f96fda27760de2c6df4d252fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_9bb294dd46633b94921573b613255a09444bb7b7cdd6059c298beeb750112095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb294dd46633b94921573b613255a09444bb7b7cdd6059c298beeb750112095->enter($__internal_9bb294dd46633b94921573b613255a09444bb7b7cdd6059c298beeb750112095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848303aeacaa1baa3bb9b4e2c470d45888be889f96fda27760de2c6df4d252fb->leave($__internal_848303aeacaa1baa3bb9b4e2c470d45888be889f96fda27760de2c6df4d252fb_prof);

        
        $__internal_9bb294dd46633b94921573b613255a09444bb7b7cdd6059c298beeb750112095->leave($__internal_9bb294dd46633b94921573b613255a09444bb7b7cdd6059c298beeb750112095_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec592e5ec1850bcf0db2866763bfcd3e29cdf839e3e3f3c6dc8c770bcc99b1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec592e5ec1850bcf0db2866763bfcd3e29cdf839e3e3f3c6dc8c770bcc99b1dc->enter($__internal_ec592e5ec1850bcf0db2866763bfcd3e29cdf839e3e3f3c6dc8c770bcc99b1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2c8be54e35dc6c559d8fa253db759f1f22a5081a5fc1b2ecc8ae3f642f5377c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c8be54e35dc6c559d8fa253db759f1f22a5081a5fc1b2ecc8ae3f642f5377c->enter($__internal_e2c8be54e35dc6c559d8fa253db759f1f22a5081a5fc1b2ecc8ae3f642f5377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_e2c8be54e35dc6c559d8fa253db759f1f22a5081a5fc1b2ecc8ae3f642f5377c->leave($__internal_e2c8be54e35dc6c559d8fa253db759f1f22a5081a5fc1b2ecc8ae3f642f5377c_prof);

        
        $__internal_ec592e5ec1850bcf0db2866763bfcd3e29cdf839e3e3f3c6dc8c770bcc99b1dc->leave($__internal_ec592e5ec1850bcf0db2866763bfcd3e29cdf839e3e3f3c6dc8c770bcc99b1dc_prof);

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
