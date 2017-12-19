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
        $__internal_16f3dec7c3697ac4ed48836e597f766fe3cc19872c28d063bafdef2de6a94365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f3dec7c3697ac4ed48836e597f766fe3cc19872c28d063bafdef2de6a94365->enter($__internal_16f3dec7c3697ac4ed48836e597f766fe3cc19872c28d063bafdef2de6a94365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b6acba0ae965960f119b7f1d5bc2369e94b87d6e02a7f5491020a2ff2ad26e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6acba0ae965960f119b7f1d5bc2369e94b87d6e02a7f5491020a2ff2ad26e5a->enter($__internal_b6acba0ae965960f119b7f1d5bc2369e94b87d6e02a7f5491020a2ff2ad26e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_16f3dec7c3697ac4ed48836e597f766fe3cc19872c28d063bafdef2de6a94365->leave($__internal_16f3dec7c3697ac4ed48836e597f766fe3cc19872c28d063bafdef2de6a94365_prof);

        
        $__internal_b6acba0ae965960f119b7f1d5bc2369e94b87d6e02a7f5491020a2ff2ad26e5a->leave($__internal_b6acba0ae965960f119b7f1d5bc2369e94b87d6e02a7f5491020a2ff2ad26e5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a5f84df9bfd92426d15b6afa8b19d5164c7c072c03d076f7c8a012e05132ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5f84df9bfd92426d15b6afa8b19d5164c7c072c03d076f7c8a012e05132ac2->enter($__internal_3a5f84df9bfd92426d15b6afa8b19d5164c7c072c03d076f7c8a012e05132ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f5d5d0633de626d8cec290325855ecf6b97ff14efc9107053f3d9919a3f77f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5d5d0633de626d8cec290325855ecf6b97ff14efc9107053f3d9919a3f77f9->enter($__internal_0f5d5d0633de626d8cec290325855ecf6b97ff14efc9107053f3d9919a3f77f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f5d5d0633de626d8cec290325855ecf6b97ff14efc9107053f3d9919a3f77f9->leave($__internal_0f5d5d0633de626d8cec290325855ecf6b97ff14efc9107053f3d9919a3f77f9_prof);

        
        $__internal_3a5f84df9bfd92426d15b6afa8b19d5164c7c072c03d076f7c8a012e05132ac2->leave($__internal_3a5f84df9bfd92426d15b6afa8b19d5164c7c072c03d076f7c8a012e05132ac2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4103dc39161e51e769437bf71e12ace4b73f1acc1054ac28ff96c65a0ac7341b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4103dc39161e51e769437bf71e12ace4b73f1acc1054ac28ff96c65a0ac7341b->enter($__internal_4103dc39161e51e769437bf71e12ace4b73f1acc1054ac28ff96c65a0ac7341b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3ac15916ef82e3be69186d1e25eed225d2b5b35d8ee4cf9db073fc6b969eb3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac15916ef82e3be69186d1e25eed225d2b5b35d8ee4cf9db073fc6b969eb3fd->enter($__internal_3ac15916ef82e3be69186d1e25eed225d2b5b35d8ee4cf9db073fc6b969eb3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ac15916ef82e3be69186d1e25eed225d2b5b35d8ee4cf9db073fc6b969eb3fd->leave($__internal_3ac15916ef82e3be69186d1e25eed225d2b5b35d8ee4cf9db073fc6b969eb3fd_prof);

        
        $__internal_4103dc39161e51e769437bf71e12ace4b73f1acc1054ac28ff96c65a0ac7341b->leave($__internal_4103dc39161e51e769437bf71e12ace4b73f1acc1054ac28ff96c65a0ac7341b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a7ca85d9e7ee15bcdc90f9e855d85b42214db0f6647645eb0f4906fe866a58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7ca85d9e7ee15bcdc90f9e855d85b42214db0f6647645eb0f4906fe866a58e->enter($__internal_4a7ca85d9e7ee15bcdc90f9e855d85b42214db0f6647645eb0f4906fe866a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05f7b5f1afa892cc50840545dbfd4ffafabe2d67f33e52fae1e2fd5c776a4cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f7b5f1afa892cc50840545dbfd4ffafabe2d67f33e52fae1e2fd5c776a4cd1->enter($__internal_05f7b5f1afa892cc50840545dbfd4ffafabe2d67f33e52fae1e2fd5c776a4cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05f7b5f1afa892cc50840545dbfd4ffafabe2d67f33e52fae1e2fd5c776a4cd1->leave($__internal_05f7b5f1afa892cc50840545dbfd4ffafabe2d67f33e52fae1e2fd5c776a4cd1_prof);

        
        $__internal_4a7ca85d9e7ee15bcdc90f9e855d85b42214db0f6647645eb0f4906fe866a58e->leave($__internal_4a7ca85d9e7ee15bcdc90f9e855d85b42214db0f6647645eb0f4906fe866a58e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29381ae56f6f3b4adc007468a57a15a9358245c5667b1d505b0f97bc95aa2a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29381ae56f6f3b4adc007468a57a15a9358245c5667b1d505b0f97bc95aa2a0e->enter($__internal_29381ae56f6f3b4adc007468a57a15a9358245c5667b1d505b0f97bc95aa2a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2fe26c15fcd519513967b1ce337454f6e55ce47b52226c60d0c1cd8217433023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe26c15fcd519513967b1ce337454f6e55ce47b52226c60d0c1cd8217433023->enter($__internal_2fe26c15fcd519513967b1ce337454f6e55ce47b52226c60d0c1cd8217433023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fe26c15fcd519513967b1ce337454f6e55ce47b52226c60d0c1cd8217433023->leave($__internal_2fe26c15fcd519513967b1ce337454f6e55ce47b52226c60d0c1cd8217433023_prof);

        
        $__internal_29381ae56f6f3b4adc007468a57a15a9358245c5667b1d505b0f97bc95aa2a0e->leave($__internal_29381ae56f6f3b4adc007468a57a15a9358245c5667b1d505b0f97bc95aa2a0e_prof);

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
