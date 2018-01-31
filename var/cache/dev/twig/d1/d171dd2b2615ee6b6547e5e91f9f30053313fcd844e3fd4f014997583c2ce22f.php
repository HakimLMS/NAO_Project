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
        $__internal_6b78f8f909da5601a673bae6dc88e0561252fba716b681d11b77b00298aaaa76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b78f8f909da5601a673bae6dc88e0561252fba716b681d11b77b00298aaaa76->enter($__internal_6b78f8f909da5601a673bae6dc88e0561252fba716b681d11b77b00298aaaa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $__internal_0fa6e8e9ae91941e59971f04d3adcafc30692bd30d89cf9c2ea32e8e38c3b4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa6e8e9ae91941e59971f04d3adcafc30692bd30d89cf9c2ea32e8e38c3b4c9->enter($__internal_0fa6e8e9ae91941e59971f04d3adcafc30692bd30d89cf9c2ea32e8e38c3b4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b78f8f909da5601a673bae6dc88e0561252fba716b681d11b77b00298aaaa76->leave($__internal_6b78f8f909da5601a673bae6dc88e0561252fba716b681d11b77b00298aaaa76_prof);

        
        $__internal_0fa6e8e9ae91941e59971f04d3adcafc30692bd30d89cf9c2ea32e8e38c3b4c9->leave($__internal_0fa6e8e9ae91941e59971f04d3adcafc30692bd30d89cf9c2ea32e8e38c3b4c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a35a2cc627ecc9c5e3a9b0d24a0cd5893674c98ae3e97606432deefaf9ae67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a35a2cc627ecc9c5e3a9b0d24a0cd5893674c98ae3e97606432deefaf9ae67->enter($__internal_10a35a2cc627ecc9c5e3a9b0d24a0cd5893674c98ae3e97606432deefaf9ae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_690c0007c6994df8ffc1685b17275d7d75683c0613482a57cf93ff29a3dd9204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690c0007c6994df8ffc1685b17275d7d75683c0613482a57cf93ff29a3dd9204->enter($__internal_690c0007c6994df8ffc1685b17275d7d75683c0613482a57cf93ff29a3dd9204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Paiement";
        
        $__internal_690c0007c6994df8ffc1685b17275d7d75683c0613482a57cf93ff29a3dd9204->leave($__internal_690c0007c6994df8ffc1685b17275d7d75683c0613482a57cf93ff29a3dd9204_prof);

        
        $__internal_10a35a2cc627ecc9c5e3a9b0d24a0cd5893674c98ae3e97606432deefaf9ae67->leave($__internal_10a35a2cc627ecc9c5e3a9b0d24a0cd5893674c98ae3e97606432deefaf9ae67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d85f82019b367b287a1892fad88b85e48764915da9281506891ee159d064b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d85f82019b367b287a1892fad88b85e48764915da9281506891ee159d064b3c->enter($__internal_2d85f82019b367b287a1892fad88b85e48764915da9281506891ee159d064b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11832e6a2c690f894d4e21bfe656ab42bd020c1ef361143ba26b7b0355beb244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11832e6a2c690f894d4e21bfe656ab42bd020c1ef361143ba26b7b0355beb244->enter($__internal_11832e6a2c690f894d4e21bfe656ab42bd020c1ef361143ba26b7b0355beb244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11832e6a2c690f894d4e21bfe656ab42bd020c1ef361143ba26b7b0355beb244->leave($__internal_11832e6a2c690f894d4e21bfe656ab42bd020c1ef361143ba26b7b0355beb244_prof);

        
        $__internal_2d85f82019b367b287a1892fad88b85e48764915da9281506891ee159d064b3c->leave($__internal_2d85f82019b367b287a1892fad88b85e48764915da9281506891ee159d064b3c_prof);

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
