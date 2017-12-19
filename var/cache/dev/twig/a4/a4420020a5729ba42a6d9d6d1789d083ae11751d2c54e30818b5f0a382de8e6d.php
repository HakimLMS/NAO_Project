<?php

/* base.html.twig */
class __TwigTemplate_9b82483fd9f189b036f072471c7129831d5df7a2101ce1d4c27fd63bbd10799e extends Twig_Template
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
        $__internal_411d0c39de74067eb9769f052b25f7157cfa024615428d50e2d5838c08866f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411d0c39de74067eb9769f052b25f7157cfa024615428d50e2d5838c08866f5f->enter($__internal_411d0c39de74067eb9769f052b25f7157cfa024615428d50e2d5838c08866f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_445f1c912c804bd21d97f347b30ce2de968dc1f58c2d7d3eb6a9f020eb6358bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445f1c912c804bd21d97f347b30ce2de968dc1f58c2d7d3eb6a9f020eb6358bb->enter($__internal_445f1c912c804bd21d97f347b30ce2de968dc1f58c2d7d3eb6a9f020eb6358bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
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
        
        $__internal_411d0c39de74067eb9769f052b25f7157cfa024615428d50e2d5838c08866f5f->leave($__internal_411d0c39de74067eb9769f052b25f7157cfa024615428d50e2d5838c08866f5f_prof);

        
        $__internal_445f1c912c804bd21d97f347b30ce2de968dc1f58c2d7d3eb6a9f020eb6358bb->leave($__internal_445f1c912c804bd21d97f347b30ce2de968dc1f58c2d7d3eb6a9f020eb6358bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08aa1a7d405064f949926c4401b57954f153ab781300060b919168615ee60af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08aa1a7d405064f949926c4401b57954f153ab781300060b919168615ee60af8->enter($__internal_08aa1a7d405064f949926c4401b57954f153ab781300060b919168615ee60af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26bcdfb315f7a6d7575f739ce6c70d31c8ebdd8f1b9cf062c701aa85f277ea7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bcdfb315f7a6d7575f739ce6c70d31c8ebdd8f1b9cf062c701aa85f277ea7c->enter($__internal_26bcdfb315f7a6d7575f739ce6c70d31c8ebdd8f1b9cf062c701aa85f277ea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26bcdfb315f7a6d7575f739ce6c70d31c8ebdd8f1b9cf062c701aa85f277ea7c->leave($__internal_26bcdfb315f7a6d7575f739ce6c70d31c8ebdd8f1b9cf062c701aa85f277ea7c_prof);

        
        $__internal_08aa1a7d405064f949926c4401b57954f153ab781300060b919168615ee60af8->leave($__internal_08aa1a7d405064f949926c4401b57954f153ab781300060b919168615ee60af8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77ffa36f228cab37a5bc2d6b7bcb1726616b6e9c6ff5320e1c5626a938e9407a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ffa36f228cab37a5bc2d6b7bcb1726616b6e9c6ff5320e1c5626a938e9407a->enter($__internal_77ffa36f228cab37a5bc2d6b7bcb1726616b6e9c6ff5320e1c5626a938e9407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ebeccf76c8ffa01d7e1d90e61a4c5b41826fbc431633030da3106aff3fe65840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebeccf76c8ffa01d7e1d90e61a4c5b41826fbc431633030da3106aff3fe65840->enter($__internal_ebeccf76c8ffa01d7e1d90e61a4c5b41826fbc431633030da3106aff3fe65840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ebeccf76c8ffa01d7e1d90e61a4c5b41826fbc431633030da3106aff3fe65840->leave($__internal_ebeccf76c8ffa01d7e1d90e61a4c5b41826fbc431633030da3106aff3fe65840_prof);

        
        $__internal_77ffa36f228cab37a5bc2d6b7bcb1726616b6e9c6ff5320e1c5626a938e9407a->leave($__internal_77ffa36f228cab37a5bc2d6b7bcb1726616b6e9c6ff5320e1c5626a938e9407a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf94c678431517c05c6d01feae8029c74b0050f2fd3b593289c7cea5fc3e66a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf94c678431517c05c6d01feae8029c74b0050f2fd3b593289c7cea5fc3e66a9->enter($__internal_bf94c678431517c05c6d01feae8029c74b0050f2fd3b593289c7cea5fc3e66a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6469ca031c18af2399dcb48f07ec32716810195586cdfcf67a4fee60c996ff7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6469ca031c18af2399dcb48f07ec32716810195586cdfcf67a4fee60c996ff7e->enter($__internal_6469ca031c18af2399dcb48f07ec32716810195586cdfcf67a4fee60c996ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6469ca031c18af2399dcb48f07ec32716810195586cdfcf67a4fee60c996ff7e->leave($__internal_6469ca031c18af2399dcb48f07ec32716810195586cdfcf67a4fee60c996ff7e_prof);

        
        $__internal_bf94c678431517c05c6d01feae8029c74b0050f2fd3b593289c7cea5fc3e66a9->leave($__internal_bf94c678431517c05c6d01feae8029c74b0050f2fd3b593289c7cea5fc3e66a9_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26190d917ab87b8812f786f68debb2d4f7d399775ec115ca190ae526bc375eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26190d917ab87b8812f786f68debb2d4f7d399775ec115ca190ae526bc375eb6->enter($__internal_26190d917ab87b8812f786f68debb2d4f7d399775ec115ca190ae526bc375eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9230bb5f6ae9fa18ad42a287a1b876728acaae0ec81ab1b27233a11e456156c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9230bb5f6ae9fa18ad42a287a1b876728acaae0ec81ab1b27233a11e456156c8->enter($__internal_9230bb5f6ae9fa18ad42a287a1b876728acaae0ec81ab1b27233a11e456156c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9230bb5f6ae9fa18ad42a287a1b876728acaae0ec81ab1b27233a11e456156c8->leave($__internal_9230bb5f6ae9fa18ad42a287a1b876728acaae0ec81ab1b27233a11e456156c8_prof);

        
        $__internal_26190d917ab87b8812f786f68debb2d4f7d399775ec115ca190ae526bc375eb6->leave($__internal_26190d917ab87b8812f786f68debb2d4f7d399775ec115ca190ae526bc375eb6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
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
