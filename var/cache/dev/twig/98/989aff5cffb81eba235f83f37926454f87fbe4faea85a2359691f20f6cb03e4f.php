<?php

/* Don/CHQ.html.twig */
class __TwigTemplate_d59b6b106bad3294344de7b11d678810e2dc4e8a51b2c5298117ef20f3ff289a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Don/CHQ.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3bfbe253f2432e08d00aa085f509e4adac1be5cf7bea2a91fb1ff35476c3998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bfbe253f2432e08d00aa085f509e4adac1be5cf7bea2a91fb1ff35476c3998->enter($__internal_f3bfbe253f2432e08d00aa085f509e4adac1be5cf7bea2a91fb1ff35476c3998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CHQ.html.twig"));

        $__internal_8f08271533f0ee7ed3e3002002e90550e4c0f603add1955c33131674b8b70e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f08271533f0ee7ed3e3002002e90550e4c0f603add1955c33131674b8b70e99->enter($__internal_8f08271533f0ee7ed3e3002002e90550e4c0f603add1955c33131674b8b70e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CHQ.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bfbe253f2432e08d00aa085f509e4adac1be5cf7bea2a91fb1ff35476c3998->leave($__internal_f3bfbe253f2432e08d00aa085f509e4adac1be5cf7bea2a91fb1ff35476c3998_prof);

        
        $__internal_8f08271533f0ee7ed3e3002002e90550e4c0f603add1955c33131674b8b70e99->leave($__internal_8f08271533f0ee7ed3e3002002e90550e4c0f603add1955c33131674b8b70e99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1ad3dbbcb74d7b80de261090b2dba847ee0327cea75472c5fb6d9b61deca0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ad3dbbcb74d7b80de261090b2dba847ee0327cea75472c5fb6d9b61deca0dd->enter($__internal_f1ad3dbbcb74d7b80de261090b2dba847ee0327cea75472c5fb6d9b61deca0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7e00f0e67f00515bca9a274b1101524ceec0479c961e1d78ffb15b35310acb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e00f0e67f00515bca9a274b1101524ceec0479c961e1d78ffb15b35310acb2->enter($__internal_f7e00f0e67f00515bca9a274b1101524ceec0479c961e1d78ffb15b35310acb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Chèque";
        
        $__internal_f7e00f0e67f00515bca9a274b1101524ceec0479c961e1d78ffb15b35310acb2->leave($__internal_f7e00f0e67f00515bca9a274b1101524ceec0479c961e1d78ffb15b35310acb2_prof);

        
        $__internal_f1ad3dbbcb74d7b80de261090b2dba847ee0327cea75472c5fb6d9b61deca0dd->leave($__internal_f1ad3dbbcb74d7b80de261090b2dba847ee0327cea75472c5fb6d9b61deca0dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3644847203f0cc24d6a60e39246b1779d926aef7b2ea8845c346b2927b8e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3644847203f0cc24d6a60e39246b1779d926aef7b2ea8845c346b2927b8e50->enter($__internal_ab3644847203f0cc24d6a60e39246b1779d926aef7b2ea8845c346b2927b8e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_899f6125d242d690aa73e1f31a224adbaef787a405b98add040ff5731c311bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899f6125d242d690aa73e1f31a224adbaef787a405b98add040ff5731c311bef->enter($__internal_899f6125d242d690aa73e1f31a224adbaef787a405b98add040ff5731c311bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container-fluid\" id=\"don\">
        <div class=\"white-filter\">
            <div class=\"container\" id=\"block-chq\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                        <h3>Merci</h3>
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/don-blanc.svg"), "html", null, true);
        echo "\" width=\"65px\" height=\"65px\">
                        <p id=\"p-chq\">Veuillez envoyer votre chèque signé à l'ordre <strong>\"Nos Amis les Oiseaux\"</strong> à l'adresse suivante :</p>

                        <div id=\"block-info-asso\">
                            <p>Association Nos Amis Les Oiseaux<br>
                            La Plaine 05130 TALLARD</p>
                        </div>

                        <a id=\"btn-chq\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><button class=\"btn\"> Retour à l'accueil</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>     

";
        
        $__internal_899f6125d242d690aa73e1f31a224adbaef787a405b98add040ff5731c311bef->leave($__internal_899f6125d242d690aa73e1f31a224adbaef787a405b98add040ff5731c311bef_prof);

        
        $__internal_ab3644847203f0cc24d6a60e39246b1779d926aef7b2ea8845c346b2927b8e50->leave($__internal_ab3644847203f0cc24d6a60e39246b1779d926aef7b2ea8845c346b2927b8e50_prof);

    }

    public function getTemplateName()
    {
        return "Don/CHQ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Don - Chèque{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"don\">
        <div class=\"white-filter\">
            <div class=\"container\" id=\"block-chq\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                        <h3>Merci</h3>
                        <img src=\"{{ asset('build/img/don-blanc.svg') }}\" width=\"65px\" height=\"65px\">
                        <p id=\"p-chq\">Veuillez envoyer votre chèque signé à l'ordre <strong>\"Nos Amis les Oiseaux\"</strong> à l'adresse suivante :</p>

                        <div id=\"block-info-asso\">
                            <p>Association Nos Amis Les Oiseaux<br>
                            La Plaine 05130 TALLARD</p>
                        </div>

                        <a id=\"btn-chq\" href=\"{{ path('home') }}\"><button class=\"btn\"> Retour à l'accueil</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>     

{% endblock %}
", "Don/CHQ.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Don\\CHQ.html.twig");
    }
}
