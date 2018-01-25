<?php

/* Administration/UserDashboard.html.twig */
class __TwigTemplate_2d7d3df62af0ba662b89f636341e771aba407f6287752f4e9946bdff3d097df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/UserDashboard.html.twig", 1);
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
        $__internal_c0de3fcd59e00eac51e800403e8c461f2b6b76ec8021a3a025e02b5010766447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0de3fcd59e00eac51e800403e8c461f2b6b76ec8021a3a025e02b5010766447->enter($__internal_c0de3fcd59e00eac51e800403e8c461f2b6b76ec8021a3a025e02b5010766447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_f640eeeffd51e069f46cd6b696bc7f79519ee8af01e5bec5e4e70ab8bbcbb39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f640eeeffd51e069f46cd6b696bc7f79519ee8af01e5bec5e4e70ab8bbcbb39c->enter($__internal_f640eeeffd51e069f46cd6b696bc7f79519ee8af01e5bec5e4e70ab8bbcbb39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0de3fcd59e00eac51e800403e8c461f2b6b76ec8021a3a025e02b5010766447->leave($__internal_c0de3fcd59e00eac51e800403e8c461f2b6b76ec8021a3a025e02b5010766447_prof);

        
        $__internal_f640eeeffd51e069f46cd6b696bc7f79519ee8af01e5bec5e4e70ab8bbcbb39c->leave($__internal_f640eeeffd51e069f46cd6b696bc7f79519ee8af01e5bec5e4e70ab8bbcbb39c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b008d4d7ebe9759d4a1b63f380aaa0b95bc6db36fcc0c8f65fa9ecb96d644e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b008d4d7ebe9759d4a1b63f380aaa0b95bc6db36fcc0c8f65fa9ecb96d644e00->enter($__internal_b008d4d7ebe9759d4a1b63f380aaa0b95bc6db36fcc0c8f65fa9ecb96d644e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e61160682a914832cd2d1d9f899f50e87f7e368a5bc188a9086ace05c958c0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61160682a914832cd2d1d9f899f50e87f7e368a5bc188a9086ace05c958c0aa->enter($__internal_e61160682a914832cd2d1d9f899f50e87f7e368a5bc188a9086ace05c958c0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifyuser");
        echo "\"><img class=\"card-img-top\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_e61160682a914832cd2d1d9f899f50e87f7e368a5bc188a9086ace05c958c0aa->leave($__internal_e61160682a914832cd2d1d9f899f50e87f7e368a5bc188a9086ace05c958c0aa_prof);

        
        $__internal_b008d4d7ebe9759d4a1b63f380aaa0b95bc6db36fcc0c8f65fa9ecb96d644e00->leave($__internal_b008d4d7ebe9759d4a1b63f380aaa0b95bc6db36fcc0c8f65fa9ecb96d644e00_prof);

    }

    public function getTemplateName()
    {
        return "Administration/UserDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
                <a href=\"{{path('modifyuser')}}\"><img class=\"card-img-top\" src=\"{{asset('build/img/'~user.image)}}\" alt=\"{{user.firstname}}\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>
        </div>
    </div>
{%endblock%}", "Administration/UserDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\UserDashboard.html.twig");
    }
}
