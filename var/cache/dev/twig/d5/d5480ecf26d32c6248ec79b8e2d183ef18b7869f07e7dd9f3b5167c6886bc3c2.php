<?php

/* base.html.twig */
class __TwigTemplate_d677415250fbbc5080c07cd04424ba36e94a88114f6a364184b7ca339428e8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_599c4198732f56ff648a3e6078ddcb359e1a92d49497b65bf5d18dea69327499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599c4198732f56ff648a3e6078ddcb359e1a92d49497b65bf5d18dea69327499->enter($__internal_599c4198732f56ff648a3e6078ddcb359e1a92d49497b65bf5d18dea69327499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_096f0e1cff39c664bd5b40e83b4c40032d2f409dc4ee2fe37763812ad54232a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096f0e1cff39c664bd5b40e83b4c40032d2f409dc4ee2fe37763812ad54232a4->enter($__internal_096f0e1cff39c664bd5b40e83b4c40032d2f409dc4ee2fe37763812ad54232a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_599c4198732f56ff648a3e6078ddcb359e1a92d49497b65bf5d18dea69327499->leave($__internal_599c4198732f56ff648a3e6078ddcb359e1a92d49497b65bf5d18dea69327499_prof);

        
        $__internal_096f0e1cff39c664bd5b40e83b4c40032d2f409dc4ee2fe37763812ad54232a4->leave($__internal_096f0e1cff39c664bd5b40e83b4c40032d2f409dc4ee2fe37763812ad54232a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f181b172223e84cdb837e52801a40491915c3776ce2214128a7ee9ff1f9a71f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f181b172223e84cdb837e52801a40491915c3776ce2214128a7ee9ff1f9a71f3->enter($__internal_f181b172223e84cdb837e52801a40491915c3776ce2214128a7ee9ff1f9a71f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4ffefbec1963df4aec81c0b3ae857de73f7fe6a889f1809c336c20a00a3cc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ffefbec1963df4aec81c0b3ae857de73f7fe6a889f1809c336c20a00a3cc45->enter($__internal_d4ffefbec1963df4aec81c0b3ae857de73f7fe6a889f1809c336c20a00a3cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d4ffefbec1963df4aec81c0b3ae857de73f7fe6a889f1809c336c20a00a3cc45->leave($__internal_d4ffefbec1963df4aec81c0b3ae857de73f7fe6a889f1809c336c20a00a3cc45_prof);

        
        $__internal_f181b172223e84cdb837e52801a40491915c3776ce2214128a7ee9ff1f9a71f3->leave($__internal_f181b172223e84cdb837e52801a40491915c3776ce2214128a7ee9ff1f9a71f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_481a1d309a1ed40c7d163f616cf01d4cddd1ae27c8e8142d475132d1a340fea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481a1d309a1ed40c7d163f616cf01d4cddd1ae27c8e8142d475132d1a340fea8->enter($__internal_481a1d309a1ed40c7d163f616cf01d4cddd1ae27c8e8142d475132d1a340fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_69a65894841e0f0c36717bcd9b9570d4ad010a4292f242fbb09bd39f1f9c8fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a65894841e0f0c36717bcd9b9570d4ad010a4292f242fbb09bd39f1f9c8fe6->enter($__internal_69a65894841e0f0c36717bcd9b9570d4ad010a4292f242fbb09bd39f1f9c8fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_69a65894841e0f0c36717bcd9b9570d4ad010a4292f242fbb09bd39f1f9c8fe6->leave($__internal_69a65894841e0f0c36717bcd9b9570d4ad010a4292f242fbb09bd39f1f9c8fe6_prof);

        
        $__internal_481a1d309a1ed40c7d163f616cf01d4cddd1ae27c8e8142d475132d1a340fea8->leave($__internal_481a1d309a1ed40c7d163f616cf01d4cddd1ae27c8e8142d475132d1a340fea8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_926005bf1db23998b987663778b714a9fb68da0b846631c38c9bfaef84d283d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926005bf1db23998b987663778b714a9fb68da0b846631c38c9bfaef84d283d6->enter($__internal_926005bf1db23998b987663778b714a9fb68da0b846631c38c9bfaef84d283d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f07ce8de1070ca4e9812e774b32c5da36647c139cc63b3258a1a7b4765f5bdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07ce8de1070ca4e9812e774b32c5da36647c139cc63b3258a1a7b4765f5bdfe->enter($__internal_f07ce8de1070ca4e9812e774b32c5da36647c139cc63b3258a1a7b4765f5bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f07ce8de1070ca4e9812e774b32c5da36647c139cc63b3258a1a7b4765f5bdfe->leave($__internal_f07ce8de1070ca4e9812e774b32c5da36647c139cc63b3258a1a7b4765f5bdfe_prof);

        
        $__internal_926005bf1db23998b987663778b714a9fb68da0b846631c38c9bfaef84d283d6->leave($__internal_926005bf1db23998b987663778b714a9fb68da0b846631c38c9bfaef84d283d6_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67a96cdf86890a73dfb45677c28a1ed8468aeb8e745262ecfeaa40dfc3c225de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a96cdf86890a73dfb45677c28a1ed8468aeb8e745262ecfeaa40dfc3c225de->enter($__internal_67a96cdf86890a73dfb45677c28a1ed8468aeb8e745262ecfeaa40dfc3c225de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_514d7a8caeca65498c4263ffb8a53b64e1d7d6e30b9f86a51855054da4f9f432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514d7a8caeca65498c4263ffb8a53b64e1d7d6e30b9f86a51855054da4f9f432->enter($__internal_514d7a8caeca65498c4263ffb8a53b64e1d7d6e30b9f86a51855054da4f9f432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_514d7a8caeca65498c4263ffb8a53b64e1d7d6e30b9f86a51855054da4f9f432->leave($__internal_514d7a8caeca65498c4263ffb8a53b64e1d7d6e30b9f86a51855054da4f9f432_prof);

        
        $__internal_67a96cdf86890a73dfb45677c28a1ed8468aeb8e745262ecfeaa40dfc3c225de->leave($__internal_67a96cdf86890a73dfb45677c28a1ed8468aeb8e745262ecfeaa40dfc3c225de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  96 => 9,  79 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
