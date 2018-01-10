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
        $__internal_489ac0ebd2d9771f250cebc9bb784c1490025dcc9dddc746815da949fa514702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489ac0ebd2d9771f250cebc9bb784c1490025dcc9dddc746815da949fa514702->enter($__internal_489ac0ebd2d9771f250cebc9bb784c1490025dcc9dddc746815da949fa514702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_da0af5c488b0821f6b39bf8bc1a6c5eefc734f4edeaacf386aa7b11194787d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0af5c488b0821f6b39bf8bc1a6c5eefc734f4edeaacf386aa7b11194787d8e->enter($__internal_da0af5c488b0821f6b39bf8bc1a6c5eefc734f4edeaacf386aa7b11194787d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489ac0ebd2d9771f250cebc9bb784c1490025dcc9dddc746815da949fa514702->leave($__internal_489ac0ebd2d9771f250cebc9bb784c1490025dcc9dddc746815da949fa514702_prof);

        
        $__internal_da0af5c488b0821f6b39bf8bc1a6c5eefc734f4edeaacf386aa7b11194787d8e->leave($__internal_da0af5c488b0821f6b39bf8bc1a6c5eefc734f4edeaacf386aa7b11194787d8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_add430ebe915c98b0ae5281be74f41884a193254bd0875f353a2bccb171eacbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add430ebe915c98b0ae5281be74f41884a193254bd0875f353a2bccb171eacbd->enter($__internal_add430ebe915c98b0ae5281be74f41884a193254bd0875f353a2bccb171eacbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb509993339cd9519d23c49070c871aaa3d5bd2e6231d447208f71547aa813e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb509993339cd9519d23c49070c871aaa3d5bd2e6231d447208f71547aa813e6->enter($__internal_bb509993339cd9519d23c49070c871aaa3d5bd2e6231d447208f71547aa813e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_bb509993339cd9519d23c49070c871aaa3d5bd2e6231d447208f71547aa813e6->leave($__internal_bb509993339cd9519d23c49070c871aaa3d5bd2e6231d447208f71547aa813e6_prof);

        
        $__internal_add430ebe915c98b0ae5281be74f41884a193254bd0875f353a2bccb171eacbd->leave($__internal_add430ebe915c98b0ae5281be74f41884a193254bd0875f353a2bccb171eacbd_prof);

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
