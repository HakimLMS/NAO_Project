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
        $__internal_ae87081cc3a3499af8494c67ff42806a32f954283c698cf6a5710724f3372fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae87081cc3a3499af8494c67ff42806a32f954283c698cf6a5710724f3372fa8->enter($__internal_ae87081cc3a3499af8494c67ff42806a32f954283c698cf6a5710724f3372fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f5c47df472662b0279ba1304eef92ab7eec396745dface0ade282c9b0fc12fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c47df472662b0279ba1304eef92ab7eec396745dface0ade282c9b0fc12fc2->enter($__internal_f5c47df472662b0279ba1304eef92ab7eec396745dface0ade282c9b0fc12fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ae87081cc3a3499af8494c67ff42806a32f954283c698cf6a5710724f3372fa8->leave($__internal_ae87081cc3a3499af8494c67ff42806a32f954283c698cf6a5710724f3372fa8_prof);

        
        $__internal_f5c47df472662b0279ba1304eef92ab7eec396745dface0ade282c9b0fc12fc2->leave($__internal_f5c47df472662b0279ba1304eef92ab7eec396745dface0ade282c9b0fc12fc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb669f0cd572f3a032064ccc656669d6d3c30ed0afa7ccf19a5114fbb0091ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb669f0cd572f3a032064ccc656669d6d3c30ed0afa7ccf19a5114fbb0091ad7->enter($__internal_cb669f0cd572f3a032064ccc656669d6d3c30ed0afa7ccf19a5114fbb0091ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_227b1b5ac54f636d96e7b3204597bd4eafaf70589669f864930889d34c7405e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227b1b5ac54f636d96e7b3204597bd4eafaf70589669f864930889d34c7405e1->enter($__internal_227b1b5ac54f636d96e7b3204597bd4eafaf70589669f864930889d34c7405e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_227b1b5ac54f636d96e7b3204597bd4eafaf70589669f864930889d34c7405e1->leave($__internal_227b1b5ac54f636d96e7b3204597bd4eafaf70589669f864930889d34c7405e1_prof);

        
        $__internal_cb669f0cd572f3a032064ccc656669d6d3c30ed0afa7ccf19a5114fbb0091ad7->leave($__internal_cb669f0cd572f3a032064ccc656669d6d3c30ed0afa7ccf19a5114fbb0091ad7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05894f7ac212b712715fe49667b3ccbfca3140fc1420789826635f3b51b234f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05894f7ac212b712715fe49667b3ccbfca3140fc1420789826635f3b51b234f3->enter($__internal_05894f7ac212b712715fe49667b3ccbfca3140fc1420789826635f3b51b234f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_18084e69d224e6be1544d4932d8c023c919452b2dec75790b0fdcc9f719a6283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18084e69d224e6be1544d4932d8c023c919452b2dec75790b0fdcc9f719a6283->enter($__internal_18084e69d224e6be1544d4932d8c023c919452b2dec75790b0fdcc9f719a6283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18084e69d224e6be1544d4932d8c023c919452b2dec75790b0fdcc9f719a6283->leave($__internal_18084e69d224e6be1544d4932d8c023c919452b2dec75790b0fdcc9f719a6283_prof);

        
        $__internal_05894f7ac212b712715fe49667b3ccbfca3140fc1420789826635f3b51b234f3->leave($__internal_05894f7ac212b712715fe49667b3ccbfca3140fc1420789826635f3b51b234f3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a01d2e3fc00398cb793b5d9c4f76e922736fe46c1ec23a60971dc77a223b081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a01d2e3fc00398cb793b5d9c4f76e922736fe46c1ec23a60971dc77a223b081->enter($__internal_1a01d2e3fc00398cb793b5d9c4f76e922736fe46c1ec23a60971dc77a223b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd5942171fb0a681a4305f093d8e67c0eec10b0367d80b095236cad517a9286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd5942171fb0a681a4305f093d8e67c0eec10b0367d80b095236cad517a9286->enter($__internal_edd5942171fb0a681a4305f093d8e67c0eec10b0367d80b095236cad517a9286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_edd5942171fb0a681a4305f093d8e67c0eec10b0367d80b095236cad517a9286->leave($__internal_edd5942171fb0a681a4305f093d8e67c0eec10b0367d80b095236cad517a9286_prof);

        
        $__internal_1a01d2e3fc00398cb793b5d9c4f76e922736fe46c1ec23a60971dc77a223b081->leave($__internal_1a01d2e3fc00398cb793b5d9c4f76e922736fe46c1ec23a60971dc77a223b081_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72f65df2de72daf83dfec59aff7fd3691266ce2ab454f190da500a3e523ea0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f65df2de72daf83dfec59aff7fd3691266ce2ab454f190da500a3e523ea0c6->enter($__internal_72f65df2de72daf83dfec59aff7fd3691266ce2ab454f190da500a3e523ea0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5f9079e95119a58f61406dfd9d785377b8ba7dcb9475b9b0b900fe413519be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f9079e95119a58f61406dfd9d785377b8ba7dcb9475b9b0b900fe413519be3->enter($__internal_c5f9079e95119a58f61406dfd9d785377b8ba7dcb9475b9b0b900fe413519be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5f9079e95119a58f61406dfd9d785377b8ba7dcb9475b9b0b900fe413519be3->leave($__internal_c5f9079e95119a58f61406dfd9d785377b8ba7dcb9475b9b0b900fe413519be3_prof);

        
        $__internal_72f65df2de72daf83dfec59aff7fd3691266ce2ab454f190da500a3e523ea0c6->leave($__internal_72f65df2de72daf83dfec59aff7fd3691266ce2ab454f190da500a3e523ea0c6_prof);

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
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
