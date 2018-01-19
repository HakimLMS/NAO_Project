<?php

/* security/login.html.twig */
class __TwigTemplate_3381ac27e39b0d4545c00bb3d47651507a974b4c6783b5d0c3a42d76fa446b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
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
        $__internal_0f744b27f3fafd624e3abb6baa48277f53ce822feb7dc9a12d71ea176aa12a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f744b27f3fafd624e3abb6baa48277f53ce822feb7dc9a12d71ea176aa12a17->enter($__internal_0f744b27f3fafd624e3abb6baa48277f53ce822feb7dc9a12d71ea176aa12a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_1a05873a83b54135caf55779e26dcd10fcd13ea36b614706fe85def8155427c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a05873a83b54135caf55779e26dcd10fcd13ea36b614706fe85def8155427c7->enter($__internal_1a05873a83b54135caf55779e26dcd10fcd13ea36b614706fe85def8155427c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f744b27f3fafd624e3abb6baa48277f53ce822feb7dc9a12d71ea176aa12a17->leave($__internal_0f744b27f3fafd624e3abb6baa48277f53ce822feb7dc9a12d71ea176aa12a17_prof);

        
        $__internal_1a05873a83b54135caf55779e26dcd10fcd13ea36b614706fe85def8155427c7->leave($__internal_1a05873a83b54135caf55779e26dcd10fcd13ea36b614706fe85def8155427c7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ab8a63384dbc5c24d6c800a07c5b7134673ac4405920717e6e4093ca9576c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ab8a63384dbc5c24d6c800a07c5b7134673ac4405920717e6e4093ca9576c8->enter($__internal_24ab8a63384dbc5c24d6c800a07c5b7134673ac4405920717e6e4093ca9576c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c46f6ab449ffed480603a5746539e87a39bd41ffdc7d48e711ead438bfd0ea6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46f6ab449ffed480603a5746539e87a39bd41ffdc7d48e711ead438bfd0ea6e->enter($__internal_c46f6ab449ffed480603a5746539e87a39bd41ffdc7d48e711ead438bfd0ea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    <div>
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Mail</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\">Connexion</button>
    </form>
        <a id=\"notsubyet\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribe");
        echo "\"> Pas encore de compte ?</a>    
    </div>
";
        
        $__internal_c46f6ab449ffed480603a5746539e87a39bd41ffdc7d48e711ead438bfd0ea6e->leave($__internal_c46f6ab449ffed480603a5746539e87a39bd41ffdc7d48e711ead438bfd0ea6e_prof);

        
        $__internal_24ab8a63384dbc5c24d6c800a07c5b7134673ac4405920717e6e4093ca9576c8->leave($__internal_24ab8a63384dbc5c24d6c800a07c5b7134673ac4405920717e6e4093ca9576c8_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 16,  66 => 11,  61 => 9,  58 => 8,  52 => 6,  49 => 5,  40 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# templates/security/login.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div>
    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Mail</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <input type=\"hidden\" name=\"_csrf_token\"
        value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\">Connexion</button>
    </form>
        <a id=\"notsubyet\" href=\"{{ path('subscribe')}}\"> Pas encore de compte ?</a>    
    </div>
{% endblock %}
", "security/login.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\security\\login.html.twig");
    }
}
