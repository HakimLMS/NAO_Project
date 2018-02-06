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
        $__internal_10278b1dc5e9edc9adfcd5f4eb11ac8cdc1f5d87ddb88a048b3fc9ceaf7ce8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10278b1dc5e9edc9adfcd5f4eb11ac8cdc1f5d87ddb88a048b3fc9ceaf7ce8b8->enter($__internal_10278b1dc5e9edc9adfcd5f4eb11ac8cdc1f5d87ddb88a048b3fc9ceaf7ce8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_999a4816c3c4a7604a1a9bea0af1a26f5e7e748d7e9840644d028a8c7771ca6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999a4816c3c4a7604a1a9bea0af1a26f5e7e748d7e9840644d028a8c7771ca6e->enter($__internal_999a4816c3c4a7604a1a9bea0af1a26f5e7e748d7e9840644d028a8c7771ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_10278b1dc5e9edc9adfcd5f4eb11ac8cdc1f5d87ddb88a048b3fc9ceaf7ce8b8->leave($__internal_10278b1dc5e9edc9adfcd5f4eb11ac8cdc1f5d87ddb88a048b3fc9ceaf7ce8b8_prof);

        
        $__internal_999a4816c3c4a7604a1a9bea0af1a26f5e7e748d7e9840644d028a8c7771ca6e->leave($__internal_999a4816c3c4a7604a1a9bea0af1a26f5e7e748d7e9840644d028a8c7771ca6e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_70fced704c7c2d93a6d6b41182108cbb014413ae924743db233da6a3b2b16676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fced704c7c2d93a6d6b41182108cbb014413ae924743db233da6a3b2b16676->enter($__internal_70fced704c7c2d93a6d6b41182108cbb014413ae924743db233da6a3b2b16676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ae683641263249f062bd7ed4a68a2bf5c41ab4008fcd3083279066d8f88977d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae683641263249f062bd7ed4a68a2bf5c41ab4008fcd3083279066d8f88977d->enter($__internal_1ae683641263249f062bd7ed4a68a2bf5c41ab4008fcd3083279066d8f88977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1ae683641263249f062bd7ed4a68a2bf5c41ab4008fcd3083279066d8f88977d->leave($__internal_1ae683641263249f062bd7ed4a68a2bf5c41ab4008fcd3083279066d8f88977d_prof);

        
        $__internal_70fced704c7c2d93a6d6b41182108cbb014413ae924743db233da6a3b2b16676->leave($__internal_70fced704c7c2d93a6d6b41182108cbb014413ae924743db233da6a3b2b16676_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e24ae1bbf4b53f92a8d110d40124651fe6ef9c73bfd32237a3905b26309a807a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24ae1bbf4b53f92a8d110d40124651fe6ef9c73bfd32237a3905b26309a807a->enter($__internal_e24ae1bbf4b53f92a8d110d40124651fe6ef9c73bfd32237a3905b26309a807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_364654a69b38f30d822a8cf0a85cf309e34f7e47e715dc7903825b58a3f1c5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364654a69b38f30d822a8cf0a85cf309e34f7e47e715dc7903825b58a3f1c5df->enter($__internal_364654a69b38f30d822a8cf0a85cf309e34f7e47e715dc7903825b58a3f1c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_364654a69b38f30d822a8cf0a85cf309e34f7e47e715dc7903825b58a3f1c5df->leave($__internal_364654a69b38f30d822a8cf0a85cf309e34f7e47e715dc7903825b58a3f1c5df_prof);

        
        $__internal_e24ae1bbf4b53f92a8d110d40124651fe6ef9c73bfd32237a3905b26309a807a->leave($__internal_e24ae1bbf4b53f92a8d110d40124651fe6ef9c73bfd32237a3905b26309a807a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_700e081913cdc0dad27e73bb0a7e5f38f374fda42aaa86a82f51e4a1fdc941d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700e081913cdc0dad27e73bb0a7e5f38f374fda42aaa86a82f51e4a1fdc941d3->enter($__internal_700e081913cdc0dad27e73bb0a7e5f38f374fda42aaa86a82f51e4a1fdc941d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_282d22f3846021893e33dfc4199f0a7900be2a5ac04e93df6f07696401336dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282d22f3846021893e33dfc4199f0a7900be2a5ac04e93df6f07696401336dd5->enter($__internal_282d22f3846021893e33dfc4199f0a7900be2a5ac04e93df6f07696401336dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_282d22f3846021893e33dfc4199f0a7900be2a5ac04e93df6f07696401336dd5->leave($__internal_282d22f3846021893e33dfc4199f0a7900be2a5ac04e93df6f07696401336dd5_prof);

        
        $__internal_700e081913cdc0dad27e73bb0a7e5f38f374fda42aaa86a82f51e4a1fdc941d3->leave($__internal_700e081913cdc0dad27e73bb0a7e5f38f374fda42aaa86a82f51e4a1fdc941d3_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98baaf0f44e121329a3e14571eecb5b5de8d74f4b9b5630c08ea4831fb062112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98baaf0f44e121329a3e14571eecb5b5de8d74f4b9b5630c08ea4831fb062112->enter($__internal_98baaf0f44e121329a3e14571eecb5b5de8d74f4b9b5630c08ea4831fb062112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_877303b9b3fae2f862b6caecb7e82a5f9c34663a175d319ce481a6d5734b470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877303b9b3fae2f862b6caecb7e82a5f9c34663a175d319ce481a6d5734b470a->enter($__internal_877303b9b3fae2f862b6caecb7e82a5f9c34663a175d319ce481a6d5734b470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_877303b9b3fae2f862b6caecb7e82a5f9c34663a175d319ce481a6d5734b470a->leave($__internal_877303b9b3fae2f862b6caecb7e82a5f9c34663a175d319ce481a6d5734b470a_prof);

        
        $__internal_98baaf0f44e121329a3e14571eecb5b5de8d74f4b9b5630c08ea4831fb062112->leave($__internal_98baaf0f44e121329a3e14571eecb5b5de8d74f4b9b5630c08ea4831fb062112_prof);

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
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
