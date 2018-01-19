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
        $__internal_45add5fa51d041fca49ecccc67226ccf7e677a3f742636044ff6866de836ed2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45add5fa51d041fca49ecccc67226ccf7e677a3f742636044ff6866de836ed2e->enter($__internal_45add5fa51d041fca49ecccc67226ccf7e677a3f742636044ff6866de836ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3cd504ff29351d9a533f5ce283eed411ad5491c6161fa48d5063a9e5b6fdb5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd504ff29351d9a533f5ce283eed411ad5491c6161fa48d5063a9e5b6fdb5b2->enter($__internal_3cd504ff29351d9a533f5ce283eed411ad5491c6161fa48d5063a9e5b6fdb5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <title>L'oiseau rare - ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>

    \t";
        // line 13
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_45add5fa51d041fca49ecccc67226ccf7e677a3f742636044ff6866de836ed2e->leave($__internal_45add5fa51d041fca49ecccc67226ccf7e677a3f742636044ff6866de836ed2e_prof);

        
        $__internal_3cd504ff29351d9a533f5ce283eed411ad5491c6161fa48d5063a9e5b6fdb5b2->leave($__internal_3cd504ff29351d9a533f5ce283eed411ad5491c6161fa48d5063a9e5b6fdb5b2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd2dffda420d1fe2525f73ac885dc58ef01e7bad4d8c7fa704b92ff787e58b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2dffda420d1fe2525f73ac885dc58ef01e7bad4d8c7fa704b92ff787e58b5a->enter($__internal_cd2dffda420d1fe2525f73ac885dc58ef01e7bad4d8c7fa704b92ff787e58b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a38d90b8dabf768e538fe0fcbc8b8e5915037107814a7947c4aee5f23151fb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38d90b8dabf768e538fe0fcbc8b8e5915037107814a7947c4aee5f23151fb00->enter($__internal_a38d90b8dabf768e538fe0fcbc8b8e5915037107814a7947c4aee5f23151fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a38d90b8dabf768e538fe0fcbc8b8e5915037107814a7947c4aee5f23151fb00->leave($__internal_a38d90b8dabf768e538fe0fcbc8b8e5915037107814a7947c4aee5f23151fb00_prof);

        
        $__internal_cd2dffda420d1fe2525f73ac885dc58ef01e7bad4d8c7fa704b92ff787e58b5a->leave($__internal_cd2dffda420d1fe2525f73ac885dc58ef01e7bad4d8c7fa704b92ff787e58b5a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23b15bb55b4a9f8de6edb810081220821d0ad9488d08c568072cc982be885554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b15bb55b4a9f8de6edb810081220821d0ad9488d08c568072cc982be885554->enter($__internal_23b15bb55b4a9f8de6edb810081220821d0ad9488d08c568072cc982be885554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d12532c425def47baf3f5cfdb6cfb9f4db81f3e61a0b9206b4c0f29dc8a4f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d12532c425def47baf3f5cfdb6cfb9f4db81f3e61a0b9206b4c0f29dc8a4f4e->enter($__internal_3d12532c425def47baf3f5cfdb6cfb9f4db81f3e61a0b9206b4c0f29dc8a4f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d12532c425def47baf3f5cfdb6cfb9f4db81f3e61a0b9206b4c0f29dc8a4f4e->leave($__internal_3d12532c425def47baf3f5cfdb6cfb9f4db81f3e61a0b9206b4c0f29dc8a4f4e_prof);

        
        $__internal_23b15bb55b4a9f8de6edb810081220821d0ad9488d08c568072cc982be885554->leave($__internal_23b15bb55b4a9f8de6edb810081220821d0ad9488d08c568072cc982be885554_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9ff708a9e9fcffd902d0284ce884291d0ed5528887be677c876b9892fea05c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ff708a9e9fcffd902d0284ce884291d0ed5528887be677c876b9892fea05c6->enter($__internal_f9ff708a9e9fcffd902d0284ce884291d0ed5528887be677c876b9892fea05c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f6871b0af7860ca7e4e3005a9523dca3567c2eb43871f34146f016733253ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6871b0af7860ca7e4e3005a9523dca3567c2eb43871f34146f016733253ef4->enter($__internal_5f6871b0af7860ca7e4e3005a9523dca3567c2eb43871f34146f016733253ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f6871b0af7860ca7e4e3005a9523dca3567c2eb43871f34146f016733253ef4->leave($__internal_5f6871b0af7860ca7e4e3005a9523dca3567c2eb43871f34146f016733253ef4_prof);

        
        $__internal_f9ff708a9e9fcffd902d0284ce884291d0ed5528887be677c876b9892fea05c6->leave($__internal_f9ff708a9e9fcffd902d0284ce884291d0ed5528887be677c876b9892fea05c6_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6bfc9791bfca5774db4ee84af3ce88ac96576322ec2dfe5e154ea220fb2cdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bfc9791bfca5774db4ee84af3ce88ac96576322ec2dfe5e154ea220fb2cdf9->enter($__internal_e6bfc9791bfca5774db4ee84af3ce88ac96576322ec2dfe5e154ea220fb2cdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59a542621f61efa6a73f7db9b8924e87706c5f846c3e485f93d558b329e623ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a542621f61efa6a73f7db9b8924e87706c5f846c3e485f93d558b329e623ad->enter($__internal_59a542621f61efa6a73f7db9b8924e87706c5f846c3e485f93d558b329e623ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_59a542621f61efa6a73f7db9b8924e87706c5f846c3e485f93d558b329e623ad->leave($__internal_59a542621f61efa6a73f7db9b8924e87706c5f846c3e485f93d558b329e623ad_prof);

        
        $__internal_e6bfc9791bfca5774db4ee84af3ce88ac96576322ec2dfe5e154ea220fb2cdf9->leave($__internal_e6bfc9791bfca5774db4ee84af3ce88ac96576322ec2dfe5e154ea220fb2cdf9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 23,  122 => 15,  105 => 9,  88 => 8,  76 => 24,  74 => 23,  70 => 22,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  47 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/app.css') }}\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>

    \t{{ include('header.html.twig') }}

        {% block body %}{% endblock %}

        {{ include('footer.html.twig') }}

        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('build/js/app.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
