<?php

/* Don/CB.html.twig */
class __TwigTemplate_3052dab22070b8d14c9ae8eeb669ff5ebd4a03e790c83c0de3ee9c94943d048b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a794a9241540367c386f9de80c313cbc5115babb25544afeb77477ad36e1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a794a9241540367c386f9de80c313cbc5115babb25544afeb77477ad36e1c4->enter($__internal_a8a794a9241540367c386f9de80c313cbc5115babb25544afeb77477ad36e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $__internal_f58e7002e0256efaf5363bccabf57ba79ad1245eb29280431185f9bd3414ba2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58e7002e0256efaf5363bccabf57ba79ad1245eb29280431185f9bd3414ba2b->enter($__internal_f58e7002e0256efaf5363bccabf57ba79ad1245eb29280431185f9bd3414ba2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare • Don • CB";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_a8a794a9241540367c386f9de80c313cbc5115babb25544afeb77477ad36e1c4->leave($__internal_a8a794a9241540367c386f9de80c313cbc5115babb25544afeb77477ad36e1c4_prof);

        
        $__internal_f58e7002e0256efaf5363bccabf57ba79ad1245eb29280431185f9bd3414ba2b->leave($__internal_f58e7002e0256efaf5363bccabf57ba79ad1245eb29280431185f9bd3414ba2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f7c0b919cade405f30e77d6b553571705b6c952fbd13489273e4a9b21da2561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7c0b919cade405f30e77d6b553571705b6c952fbd13489273e4a9b21da2561->enter($__internal_5f7c0b919cade405f30e77d6b553571705b6c952fbd13489273e4a9b21da2561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e0f251e75b61d11c251dedd2e0e79fb1fb67585984155c8eba304746ad97c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0f251e75b61d11c251dedd2e0e79fb1fb67585984155c8eba304746ad97c94->enter($__internal_0e0f251e75b61d11c251dedd2e0e79fb1fb67585984155c8eba304746ad97c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0e0f251e75b61d11c251dedd2e0e79fb1fb67585984155c8eba304746ad97c94->leave($__internal_0e0f251e75b61d11c251dedd2e0e79fb1fb67585984155c8eba304746ad97c94_prof);

        
        $__internal_5f7c0b919cade405f30e77d6b553571705b6c952fbd13489273e4a9b21da2561->leave($__internal_5f7c0b919cade405f30e77d6b553571705b6c952fbd13489273e4a9b21da2561_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_83eca91c3fa86c22ff27374cd5d53a88d173017e51f40382aa2221da18b9ec28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83eca91c3fa86c22ff27374cd5d53a88d173017e51f40382aa2221da18b9ec28->enter($__internal_83eca91c3fa86c22ff27374cd5d53a88d173017e51f40382aa2221da18b9ec28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfc0d6c24fb7e6e2b21f045002df81d462de8f43400519f32329c1dbe5f4eff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc0d6c24fb7e6e2b21f045002df81d462de8f43400519f32329c1dbe5f4eff4->enter($__internal_dfc0d6c24fb7e6e2b21f045002df81d462de8f43400519f32329c1dbe5f4eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "        <div id=\"wrapper\">
            <div id=\"container\">
                <div id=\"welcome\">
                    <h1><span>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "lastname", array()), "html", null, true);
        echo "</span>Don à NAO</h1>
                </div>

                <div id=\"status\">
                    <p>
                        <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"<a href=\"<a href=\"URL_3WORG/2000/svg\"><a href=\"<a href=\"URL_3WORG/2000/svg\">URL_3WORG/2000/svg</a>\"><a href=\"URL_3WORG/2000/svg\">URL_3WORG.org/2000/svg</a></a></a>\"><a href=\"URL_3WORG/2000/svg\"><a href=\"URL_3WORG/2000/svg\"><a href=\"URL_3WORG/2000/svg\">URL_3WORG/2000/svg</a></a></a></a>\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"></path></svg>

                        Vous êtes sur le point faire un don de ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "amount", array()), "html", null, true);
        echo " €
                    <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CBcheckout");
        echo "\" method=\"POST\">
                        <script
                                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                                data-key=\"pk_test_oXH6tq7HnXdaNRJhNo3JCVDj\"
                                data-amount=";
        // line 24
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "amount", array()) * twig_replace_filter(100, array("." => ""))), "html", null, true);
        echo "
                                data-name=\"NAO\"
                        data-description=\"Don NAO\"
                        data-locale=\"auto\"
                        data-currency=\"eur\"
                        data-email=";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "don"), "method"), "mail", array()), "html", null, true);
        echo ">
                        </script>
                        </form>
                        </p>
                        </div>
                        </div>
                        </div>
        ";
        
        $__internal_dfc0d6c24fb7e6e2b21f045002df81d462de8f43400519f32329c1dbe5f4eff4->leave($__internal_dfc0d6c24fb7e6e2b21f045002df81d462de8f43400519f32329c1dbe5f4eff4_prof);

        
        $__internal_83eca91c3fa86c22ff27374cd5d53a88d173017e51f40382aa2221da18b9ec28->leave($__internal_83eca91c3fa86c22ff27374cd5d53a88d173017e51f40382aa2221da18b9ec28_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d04a5909cf5e020026c0a38b57e428b2981c918aa05b1a86a956bdb9bbfc33ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04a5909cf5e020026c0a38b57e428b2981c918aa05b1a86a956bdb9bbfc33ae->enter($__internal_d04a5909cf5e020026c0a38b57e428b2981c918aa05b1a86a956bdb9bbfc33ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4a70afeb03e6b9523de08cca7af06c580e6ce13d5ea105a500f862f599ef889f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a70afeb03e6b9523de08cca7af06c580e6ce13d5ea105a500f862f599ef889f->enter($__internal_4a70afeb03e6b9523de08cca7af06c580e6ce13d5ea105a500f862f599ef889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "                        <style>
                        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
                        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
                        h1 { font-size: 36px; }
                        h2 { font-size: 21px; margin-bottom: 1em; }
                        p { margin: 0 0 1em 0; }
                        a { color: #0000F0; }
                        a:hover { text-decoration: none; }
                        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
                        #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
                        }
                        </style>
        ";
        
        $__internal_4a70afeb03e6b9523de08cca7af06c580e6ce13d5ea105a500f862f599ef889f->leave($__internal_4a70afeb03e6b9523de08cca7af06c580e6ce13d5ea105a500f862f599ef889f_prof);

        
        $__internal_d04a5909cf5e020026c0a38b57e428b2981c918aa05b1a86a956bdb9bbfc33ae->leave($__internal_d04a5909cf5e020026c0a38b57e428b2981c918aa05b1a86a956bdb9bbfc33ae_prof);

    }

    public function getTemplateName()
    {
        return "Don/CB.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  139 => 38,  121 => 29,  113 => 24,  106 => 20,  102 => 19,  90 => 12,  85 => 9,  76 => 8,  59 => 5,  47 => 66,  45 => 38,  42 => 37,  40 => 8,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare • Don • CB{% block title %}{% endblock %}</title>
    </head>
    <body>
        {% block body %}
        <div id=\"wrapper\">
            <div id=\"container\">
                <div id=\"welcome\">
                    <h1><span>{{ app.session.get('don').firstname }} {{ app.session.get('don').lastname }}</span>Don à NAO</h1>
                </div>

                <div id=\"status\">
                    <p>
                        <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"<a href=\"<a href=\"URL_3WORG/2000/svg\"><a href=\"<a href=\"URL_3WORG/2000/svg\">URL_3WORG/2000/svg</a>\"><a href=\"URL_3WORG/2000/svg\">URL_3WORG.org/2000/svg</a></a></a>\"><a href=\"URL_3WORG/2000/svg\"><a href=\"URL_3WORG/2000/svg\"><a href=\"URL_3WORG/2000/svg\">URL_3WORG/2000/svg</a></a></a></a>\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"></path></svg>

                        Vous êtes sur le point faire un don de {{ app.session.get('don').amount }} €
                    <form action=\"{{ path('CBcheckout') }}\" method=\"POST\">
                        <script
                                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                                data-key=\"pk_test_oXH6tq7HnXdaNRJhNo3JCVDj\"
                                data-amount={{ app.session.get('don').amount *100|replace({'.':''}) }}
                                data-name=\"NAO\"
                        data-description=\"Don NAO\"
                        data-locale=\"auto\"
                        data-currency=\"eur\"
                        data-email={{ app.session.get('don').mail }}>
                        </script>
                        </form>
                        </p>
                        </div>
                        </div>
                        </div>
        {% endblock %}

        {% block stylesheets %}
                        <style>
                        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
                        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
                        h1 { font-size: 36px; }
                        h2 { font-size: 21px; margin-bottom: 1em; }
                        p { margin: 0 0 1em 0; }
                        a { color: #0000F0; }
                        a:hover { text-decoration: none; }
                        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
                        #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
                        }
                        </style>
        {% endblock %}
    </body>
</html>
", "Don/CB.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Don\\CB.html.twig");
    }
}
