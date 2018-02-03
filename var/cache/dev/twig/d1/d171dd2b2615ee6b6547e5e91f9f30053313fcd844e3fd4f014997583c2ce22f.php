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
        $__internal_e9f3615185db04c1b937f29b4918da123e316602bea9194bf2968191da1684c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f3615185db04c1b937f29b4918da123e316602bea9194bf2968191da1684c3->enter($__internal_e9f3615185db04c1b937f29b4918da123e316602bea9194bf2968191da1684c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $__internal_f2322c6f44b1d5ac767103d0bb5e06fdb219c57926c61d0ba9ed73053f110636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2322c6f44b1d5ac767103d0bb5e06fdb219c57926c61d0ba9ed73053f110636->enter($__internal_f2322c6f44b1d5ac767103d0bb5e06fdb219c57926c61d0ba9ed73053f110636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9f3615185db04c1b937f29b4918da123e316602bea9194bf2968191da1684c3->leave($__internal_e9f3615185db04c1b937f29b4918da123e316602bea9194bf2968191da1684c3_prof);

        
        $__internal_f2322c6f44b1d5ac767103d0bb5e06fdb219c57926c61d0ba9ed73053f110636->leave($__internal_f2322c6f44b1d5ac767103d0bb5e06fdb219c57926c61d0ba9ed73053f110636_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7e2fdd36f9f129c4305df4df90e0f043bc25e7d3e4ee5c3ca17affbd4cdd5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e2fdd36f9f129c4305df4df90e0f043bc25e7d3e4ee5c3ca17affbd4cdd5de->enter($__internal_d7e2fdd36f9f129c4305df4df90e0f043bc25e7d3e4ee5c3ca17affbd4cdd5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ad16b51466b3323146901bc39141c9cd8ab6232ea9417f11d8031289a001b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad16b51466b3323146901bc39141c9cd8ab6232ea9417f11d8031289a001b99->enter($__internal_9ad16b51466b3323146901bc39141c9cd8ab6232ea9417f11d8031289a001b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Paiement";
        
        $__internal_9ad16b51466b3323146901bc39141c9cd8ab6232ea9417f11d8031289a001b99->leave($__internal_9ad16b51466b3323146901bc39141c9cd8ab6232ea9417f11d8031289a001b99_prof);

        
        $__internal_d7e2fdd36f9f129c4305df4df90e0f043bc25e7d3e4ee5c3ca17affbd4cdd5de->leave($__internal_d7e2fdd36f9f129c4305df4df90e0f043bc25e7d3e4ee5c3ca17affbd4cdd5de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebad5d602545accfd9883b8e898b1b1ca7fba8e08ba94952153381749a21ecfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebad5d602545accfd9883b8e898b1b1ca7fba8e08ba94952153381749a21ecfb->enter($__internal_ebad5d602545accfd9883b8e898b1b1ca7fba8e08ba94952153381749a21ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7694d27768b3b273105c78dc377e48eab6845bca3303247152c9282152641faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7694d27768b3b273105c78dc377e48eab6845bca3303247152c9282152641faa->enter($__internal_7694d27768b3b273105c78dc377e48eab6845bca3303247152c9282152641faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7694d27768b3b273105c78dc377e48eab6845bca3303247152c9282152641faa->leave($__internal_7694d27768b3b273105c78dc377e48eab6845bca3303247152c9282152641faa_prof);

        
        $__internal_ebad5d602545accfd9883b8e898b1b1ca7fba8e08ba94952153381749a21ecfb->leave($__internal_ebad5d602545accfd9883b8e898b1b1ca7fba8e08ba94952153381749a21ecfb_prof);

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
