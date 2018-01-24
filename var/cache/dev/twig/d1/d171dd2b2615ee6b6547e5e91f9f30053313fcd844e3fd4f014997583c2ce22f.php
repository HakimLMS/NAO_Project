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
        $__internal_26ab70e3cd25fd93227e557a20077857da516cadfc2c6e8105c778358fbe05c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ab70e3cd25fd93227e557a20077857da516cadfc2c6e8105c778358fbe05c9->enter($__internal_26ab70e3cd25fd93227e557a20077857da516cadfc2c6e8105c778358fbe05c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

        $__internal_7a1cb6b2b28369aa8f374577b50a93d75d63d774360ca61601f100ac4dd569c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1cb6b2b28369aa8f374577b50a93d75d63d774360ca61601f100ac4dd569c8->enter($__internal_7a1cb6b2b28369aa8f374577b50a93d75d63d774360ca61601f100ac4dd569c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/CB.html.twig"));

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
        
        $__internal_26ab70e3cd25fd93227e557a20077857da516cadfc2c6e8105c778358fbe05c9->leave($__internal_26ab70e3cd25fd93227e557a20077857da516cadfc2c6e8105c778358fbe05c9_prof);

        
        $__internal_7a1cb6b2b28369aa8f374577b50a93d75d63d774360ca61601f100ac4dd569c8->leave($__internal_7a1cb6b2b28369aa8f374577b50a93d75d63d774360ca61601f100ac4dd569c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_919391cb4ee95bd220b335fcf134d821300fc7f05327ae74a3581ac60c8c2b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919391cb4ee95bd220b335fcf134d821300fc7f05327ae74a3581ac60c8c2b2f->enter($__internal_919391cb4ee95bd220b335fcf134d821300fc7f05327ae74a3581ac60c8c2b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ebb74b1d78f6e3095dea4daa3f66acb3fe4eec742650dbb3505f3509b317ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebb74b1d78f6e3095dea4daa3f66acb3fe4eec742650dbb3505f3509b317ce5->enter($__internal_3ebb74b1d78f6e3095dea4daa3f66acb3fe4eec742650dbb3505f3509b317ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ebb74b1d78f6e3095dea4daa3f66acb3fe4eec742650dbb3505f3509b317ce5->leave($__internal_3ebb74b1d78f6e3095dea4daa3f66acb3fe4eec742650dbb3505f3509b317ce5_prof);

        
        $__internal_919391cb4ee95bd220b335fcf134d821300fc7f05327ae74a3581ac60c8c2b2f->leave($__internal_919391cb4ee95bd220b335fcf134d821300fc7f05327ae74a3581ac60c8c2b2f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ec28506557b053daf6c4db67dcc9af16a020f9039be85ed35b78467acca02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ec28506557b053daf6c4db67dcc9af16a020f9039be85ed35b78467acca02d->enter($__internal_87ec28506557b053daf6c4db67dcc9af16a020f9039be85ed35b78467acca02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2b1b3747bb49be5951b645cc6b54fc24329b40d308f4abc877575947490098a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b1b3747bb49be5951b645cc6b54fc24329b40d308f4abc877575947490098a->enter($__internal_f2b1b3747bb49be5951b645cc6b54fc24329b40d308f4abc877575947490098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2b1b3747bb49be5951b645cc6b54fc24329b40d308f4abc877575947490098a->leave($__internal_f2b1b3747bb49be5951b645cc6b54fc24329b40d308f4abc877575947490098a_prof);

        
        $__internal_87ec28506557b053daf6c4db67dcc9af16a020f9039be85ed35b78467acca02d->leave($__internal_87ec28506557b053daf6c4db67dcc9af16a020f9039be85ed35b78467acca02d_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a4d9cad52ef7a0c447d20ec08b99a16694277cffe7e894b12d4eebe88c6e3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4d9cad52ef7a0c447d20ec08b99a16694277cffe7e894b12d4eebe88c6e3e4->enter($__internal_5a4d9cad52ef7a0c447d20ec08b99a16694277cffe7e894b12d4eebe88c6e3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_65f1b2bb9ee7c3518f45524b82ccfa9df796f06b6f77e4c7d63b120d782e072e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f1b2bb9ee7c3518f45524b82ccfa9df796f06b6f77e4c7d63b120d782e072e->enter($__internal_65f1b2bb9ee7c3518f45524b82ccfa9df796f06b6f77e4c7d63b120d782e072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_65f1b2bb9ee7c3518f45524b82ccfa9df796f06b6f77e4c7d63b120d782e072e->leave($__internal_65f1b2bb9ee7c3518f45524b82ccfa9df796f06b6f77e4c7d63b120d782e072e_prof);

        
        $__internal_5a4d9cad52ef7a0c447d20ec08b99a16694277cffe7e894b12d4eebe88c6e3e4->leave($__internal_5a4d9cad52ef7a0c447d20ec08b99a16694277cffe7e894b12d4eebe88c6e3e4_prof);

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
", "Don/CB.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Don\\CB.html.twig");
    }
}
