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
        $__internal_4887bbc0863561b9d8f4b0730d896a8f924264fd1acce1499b4a446b03565db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4887bbc0863561b9d8f4b0730d896a8f924264fd1acce1499b4a446b03565db1->enter($__internal_4887bbc0863561b9d8f4b0730d896a8f924264fd1acce1499b4a446b03565db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CHQ.html.twig"));

        $__internal_b0042ddddedc7c32fdcd936620da5a87154d3b2e97e937ec425a93122bc3c336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0042ddddedc7c32fdcd936620da5a87154d3b2e97e937ec425a93122bc3c336->enter($__internal_b0042ddddedc7c32fdcd936620da5a87154d3b2e97e937ec425a93122bc3c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CHQ.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4887bbc0863561b9d8f4b0730d896a8f924264fd1acce1499b4a446b03565db1->leave($__internal_4887bbc0863561b9d8f4b0730d896a8f924264fd1acce1499b4a446b03565db1_prof);

        
        $__internal_b0042ddddedc7c32fdcd936620da5a87154d3b2e97e937ec425a93122bc3c336->leave($__internal_b0042ddddedc7c32fdcd936620da5a87154d3b2e97e937ec425a93122bc3c336_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa7e33a8b96be1a965eb8676f50311fda4cebe05fc81c870180cdc90505068b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7e33a8b96be1a965eb8676f50311fda4cebe05fc81c870180cdc90505068b4->enter($__internal_aa7e33a8b96be1a965eb8676f50311fda4cebe05fc81c870180cdc90505068b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_666136d467ea4955c5c2d57423ce57aab1d8176f5e29ade42f8afc2229b68b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666136d467ea4955c5c2d57423ce57aab1d8176f5e29ade42f8afc2229b68b3f->enter($__internal_666136d467ea4955c5c2d57423ce57aab1d8176f5e29ade42f8afc2229b68b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Chèque";
        
        $__internal_666136d467ea4955c5c2d57423ce57aab1d8176f5e29ade42f8afc2229b68b3f->leave($__internal_666136d467ea4955c5c2d57423ce57aab1d8176f5e29ade42f8afc2229b68b3f_prof);

        
        $__internal_aa7e33a8b96be1a965eb8676f50311fda4cebe05fc81c870180cdc90505068b4->leave($__internal_aa7e33a8b96be1a965eb8676f50311fda4cebe05fc81c870180cdc90505068b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e93003d6ae793f68a5d19af4d769c148c8caffd71f4983c5e92d19093eb240c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e93003d6ae793f68a5d19af4d769c148c8caffd71f4983c5e92d19093eb240c->enter($__internal_7e93003d6ae793f68a5d19af4d769c148c8caffd71f4983c5e92d19093eb240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_052172c91f8fd520bb8a03b53e00e537bcb9926cc25b7803c6a63a77a75e1f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052172c91f8fd520bb8a03b53e00e537bcb9926cc25b7803c6a63a77a75e1f6f->enter($__internal_052172c91f8fd520bb8a03b53e00e537bcb9926cc25b7803c6a63a77a75e1f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_052172c91f8fd520bb8a03b53e00e537bcb9926cc25b7803c6a63a77a75e1f6f->leave($__internal_052172c91f8fd520bb8a03b53e00e537bcb9926cc25b7803c6a63a77a75e1f6f_prof);

        
        $__internal_7e93003d6ae793f68a5d19af4d769c148c8caffd71f4983c5e92d19093eb240c->leave($__internal_7e93003d6ae793f68a5d19af4d769c148c8caffd71f4983c5e92d19093eb240c_prof);

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
