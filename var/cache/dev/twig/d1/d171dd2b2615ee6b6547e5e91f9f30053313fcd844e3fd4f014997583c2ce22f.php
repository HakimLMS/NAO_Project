<?php

/* Don/CB.html.twig */
class __TwigTemplate_3052dab22070b8d14c9ae8eeb669ff5ebd4a03e790c83c0de3ee9c94943d048b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Don/CB.html.twig", 1);
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
        $__internal_f96b1fc3c867a8c11748754678fc4acf9eea1c04674406d1216be0013160a3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96b1fc3c867a8c11748754678fc4acf9eea1c04674406d1216be0013160a3e9->enter($__internal_f96b1fc3c867a8c11748754678fc4acf9eea1c04674406d1216be0013160a3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $__internal_d1eebc099412ba02d330fe613db72f736e4c9b923951ff671fc9e8dd90b72204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1eebc099412ba02d330fe613db72f736e4c9b923951ff671fc9e8dd90b72204->enter($__internal_d1eebc099412ba02d330fe613db72f736e4c9b923951ff671fc9e8dd90b72204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f96b1fc3c867a8c11748754678fc4acf9eea1c04674406d1216be0013160a3e9->leave($__internal_f96b1fc3c867a8c11748754678fc4acf9eea1c04674406d1216be0013160a3e9_prof);

        
        $__internal_d1eebc099412ba02d330fe613db72f736e4c9b923951ff671fc9e8dd90b72204->leave($__internal_d1eebc099412ba02d330fe613db72f736e4c9b923951ff671fc9e8dd90b72204_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf7b58d7fbe8cc41ae7d38569cbad3503e9b22c1ed035d8dadafcb46cdd8fde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7b58d7fbe8cc41ae7d38569cbad3503e9b22c1ed035d8dadafcb46cdd8fde8->enter($__internal_bf7b58d7fbe8cc41ae7d38569cbad3503e9b22c1ed035d8dadafcb46cdd8fde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f75399dcad1a24ed0a76e9ec676c042f374c393d6a724d954b6f8e30ab8d78d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75399dcad1a24ed0a76e9ec676c042f374c393d6a724d954b6f8e30ab8d78d5->enter($__internal_f75399dcad1a24ed0a76e9ec676c042f374c393d6a724d954b6f8e30ab8d78d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Paiement";
        
        $__internal_f75399dcad1a24ed0a76e9ec676c042f374c393d6a724d954b6f8e30ab8d78d5->leave($__internal_f75399dcad1a24ed0a76e9ec676c042f374c393d6a724d954b6f8e30ab8d78d5_prof);

        
        $__internal_bf7b58d7fbe8cc41ae7d38569cbad3503e9b22c1ed035d8dadafcb46cdd8fde8->leave($__internal_bf7b58d7fbe8cc41ae7d38569cbad3503e9b22c1ed035d8dadafcb46cdd8fde8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e76ac94544fbd14175dbe7b66ab54592fdc2491b0a0c213f69f6313124ccbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e76ac94544fbd14175dbe7b66ab54592fdc2491b0a0c213f69f6313124ccbaa->enter($__internal_7e76ac94544fbd14175dbe7b66ab54592fdc2491b0a0c213f69f6313124ccbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77685b6a012a9e94b0ee89a49e7d95cf19c30820d446c9005240a4b17364903a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77685b6a012a9e94b0ee89a49e7d95cf19c30820d446c9005240a4b17364903a->enter($__internal_77685b6a012a9e94b0ee89a49e7d95cf19c30820d446c9005240a4b17364903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <div class=\"container-fluid\" id=\"don\">
    <div class=\"white-filter\">
        <div class=\"container\" id=\"block-stripe\">
            <div class=\"row\">
                <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                    <h3>Faire un don</h3>
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/don-blanc.svg"), "html", null, true);
        echo "\" width=\"65px\" height=\"65px\">

                    <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CBcheckout");
        echo "\" method=\"POST\">
                        <script
                            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                            data-key=\"pk_test_oXH6tq7HnXdaNRJhNo3JCVDj\"
                            data-amount=";
        // line 19
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "amount", array()) * twig_replace_filter(100, array("." => ""))), "html", null, true);
        echo "
                            data-name=\"NAO\"
                            data-label=\"Valider mon don\"
                            data-locale=\"auto\"
                            data-currency=\"eur\"
                            data-email=";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "mail", array()), "html", null, true);
        echo "
                            data-image=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/logo-sans-texte.svg"), "html", null, true);
        echo "
                        >
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_77685b6a012a9e94b0ee89a49e7d95cf19c30820d446c9005240a4b17364903a->leave($__internal_77685b6a012a9e94b0ee89a49e7d95cf19c30820d446c9005240a4b17364903a_prof);

        
        $__internal_7e76ac94544fbd14175dbe7b66ab54592fdc2491b0a0c213f69f6313124ccbaa->leave($__internal_7e76ac94544fbd14175dbe7b66ab54592fdc2491b0a0c213f69f6313124ccbaa_prof);

    }

    public function getTemplateName()
    {
        return "Don/CB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  97 => 24,  89 => 19,  82 => 15,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Don - Paiement{% endblock %}

{% block body %}

 <div class=\"container-fluid\" id=\"don\">
    <div class=\"white-filter\">
        <div class=\"container\" id=\"block-stripe\">
            <div class=\"row\">
                <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                    <h3>Faire un don</h3>
                    <img src=\"{{ asset('build/img/don-blanc.svg') }}\" width=\"65px\" height=\"65px\">

                    <form action=\"{{ path('CBcheckout') }}\" method=\"POST\">
                        <script
                            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                            data-key=\"pk_test_oXH6tq7HnXdaNRJhNo3JCVDj\"
                            data-amount={{ app.session.get('don').amount *100|replace({'.':''}) }}
                            data-name=\"NAO\"
                            data-label=\"Valider mon don\"
                            data-locale=\"auto\"
                            data-currency=\"eur\"
                            data-email={{ app.session.get('don').mail }}
                            data-image={{ asset('build/img/logo-sans-texte.svg') }}
                        >
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

", "Don/CB.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Don\\CB.html.twig");
    }
}
