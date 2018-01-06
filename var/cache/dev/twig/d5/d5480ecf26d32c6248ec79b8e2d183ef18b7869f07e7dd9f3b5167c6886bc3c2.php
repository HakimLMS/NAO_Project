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
        $__internal_52a1363e5d1594401da6f7c3651079d5560ae1a9d22eb5545932fde47e357f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a1363e5d1594401da6f7c3651079d5560ae1a9d22eb5545932fde47e357f8c->enter($__internal_52a1363e5d1594401da6f7c3651079d5560ae1a9d22eb5545932fde47e357f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_331eb367a51d87a90335c0f8a0d9178352058b8983686509a03f866320a5367e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331eb367a51d87a90335c0f8a0d9178352058b8983686509a03f866320a5367e->enter($__internal_331eb367a51d87a90335c0f8a0d9178352058b8983686509a03f866320a5367e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_52a1363e5d1594401da6f7c3651079d5560ae1a9d22eb5545932fde47e357f8c->leave($__internal_52a1363e5d1594401da6f7c3651079d5560ae1a9d22eb5545932fde47e357f8c_prof);

        
        $__internal_331eb367a51d87a90335c0f8a0d9178352058b8983686509a03f866320a5367e->leave($__internal_331eb367a51d87a90335c0f8a0d9178352058b8983686509a03f866320a5367e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cd14a6d4ee93f1d1ea10b005e663b952d8bd0afeafe18e33b3001802dd0ee61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd14a6d4ee93f1d1ea10b005e663b952d8bd0afeafe18e33b3001802dd0ee61->enter($__internal_3cd14a6d4ee93f1d1ea10b005e663b952d8bd0afeafe18e33b3001802dd0ee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f89878367d3871cf37a9e5d82e94b85cdce3f180a7c002accc85896c32f3baba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89878367d3871cf37a9e5d82e94b85cdce3f180a7c002accc85896c32f3baba->enter($__internal_f89878367d3871cf37a9e5d82e94b85cdce3f180a7c002accc85896c32f3baba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f89878367d3871cf37a9e5d82e94b85cdce3f180a7c002accc85896c32f3baba->leave($__internal_f89878367d3871cf37a9e5d82e94b85cdce3f180a7c002accc85896c32f3baba_prof);

        
        $__internal_3cd14a6d4ee93f1d1ea10b005e663b952d8bd0afeafe18e33b3001802dd0ee61->leave($__internal_3cd14a6d4ee93f1d1ea10b005e663b952d8bd0afeafe18e33b3001802dd0ee61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4d96f31dd1ce216404408c4504b42e70f4ebbe056df10e62cedc165e077137b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d96f31dd1ce216404408c4504b42e70f4ebbe056df10e62cedc165e077137b->enter($__internal_e4d96f31dd1ce216404408c4504b42e70f4ebbe056df10e62cedc165e077137b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a236a1fdfaaf3c874e51a726a3c57b6786d6aea33ac6e95288aebe23f1bc8160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a236a1fdfaaf3c874e51a726a3c57b6786d6aea33ac6e95288aebe23f1bc8160->enter($__internal_a236a1fdfaaf3c874e51a726a3c57b6786d6aea33ac6e95288aebe23f1bc8160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a236a1fdfaaf3c874e51a726a3c57b6786d6aea33ac6e95288aebe23f1bc8160->leave($__internal_a236a1fdfaaf3c874e51a726a3c57b6786d6aea33ac6e95288aebe23f1bc8160_prof);

        
        $__internal_e4d96f31dd1ce216404408c4504b42e70f4ebbe056df10e62cedc165e077137b->leave($__internal_e4d96f31dd1ce216404408c4504b42e70f4ebbe056df10e62cedc165e077137b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_78646678d5247a44eb5d92517f6f85ce7230b5f607daf29ba71fc7a71d071161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78646678d5247a44eb5d92517f6f85ce7230b5f607daf29ba71fc7a71d071161->enter($__internal_78646678d5247a44eb5d92517f6f85ce7230b5f607daf29ba71fc7a71d071161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_944dfab3515ea3f97476c5dc333c9b9c63e8e2e784703e42a5a02a79788496a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944dfab3515ea3f97476c5dc333c9b9c63e8e2e784703e42a5a02a79788496a4->enter($__internal_944dfab3515ea3f97476c5dc333c9b9c63e8e2e784703e42a5a02a79788496a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_944dfab3515ea3f97476c5dc333c9b9c63e8e2e784703e42a5a02a79788496a4->leave($__internal_944dfab3515ea3f97476c5dc333c9b9c63e8e2e784703e42a5a02a79788496a4_prof);

        
        $__internal_78646678d5247a44eb5d92517f6f85ce7230b5f607daf29ba71fc7a71d071161->leave($__internal_78646678d5247a44eb5d92517f6f85ce7230b5f607daf29ba71fc7a71d071161_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e1b1239e44b242f4084c1510b3ec9a6b459f886e23e9576836bcc58de0ab9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1b1239e44b242f4084c1510b3ec9a6b459f886e23e9576836bcc58de0ab9fd->enter($__internal_3e1b1239e44b242f4084c1510b3ec9a6b459f886e23e9576836bcc58de0ab9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_483cf8a0891fad27748688951ed100816332b142fed23c04cec0d2a2d54366ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483cf8a0891fad27748688951ed100816332b142fed23c04cec0d2a2d54366ea->enter($__internal_483cf8a0891fad27748688951ed100816332b142fed23c04cec0d2a2d54366ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_483cf8a0891fad27748688951ed100816332b142fed23c04cec0d2a2d54366ea->leave($__internal_483cf8a0891fad27748688951ed100816332b142fed23c04cec0d2a2d54366ea_prof);

        
        $__internal_3e1b1239e44b242f4084c1510b3ec9a6b459f886e23e9576836bcc58de0ab9fd->leave($__internal_3e1b1239e44b242f4084c1510b3ec9a6b459f886e23e9576836bcc58de0ab9fd_prof);

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
