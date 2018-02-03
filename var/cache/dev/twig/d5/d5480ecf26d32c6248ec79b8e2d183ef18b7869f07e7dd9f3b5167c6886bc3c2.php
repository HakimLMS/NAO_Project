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
        $__internal_e732a881426ef42a4bc8cba5ff8b463979aebb1acdae128775a55c35ee7f6d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e732a881426ef42a4bc8cba5ff8b463979aebb1acdae128775a55c35ee7f6d4a->enter($__internal_e732a881426ef42a4bc8cba5ff8b463979aebb1acdae128775a55c35ee7f6d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4d4c924118ae8d6dad56ee2d4f33a8c2e02b00a4aab4d36ca08aaf8ff298f4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4c924118ae8d6dad56ee2d4f33a8c2e02b00a4aab4d36ca08aaf8ff298f4dc->enter($__internal_4d4c924118ae8d6dad56ee2d4f33a8c2e02b00a4aab4d36ca08aaf8ff298f4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e732a881426ef42a4bc8cba5ff8b463979aebb1acdae128775a55c35ee7f6d4a->leave($__internal_e732a881426ef42a4bc8cba5ff8b463979aebb1acdae128775a55c35ee7f6d4a_prof);

        
        $__internal_4d4c924118ae8d6dad56ee2d4f33a8c2e02b00a4aab4d36ca08aaf8ff298f4dc->leave($__internal_4d4c924118ae8d6dad56ee2d4f33a8c2e02b00a4aab4d36ca08aaf8ff298f4dc_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c373c0e4853b1c55d6b46dec00df8769cb47d0870b33df864e8fe4057f9fc702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c373c0e4853b1c55d6b46dec00df8769cb47d0870b33df864e8fe4057f9fc702->enter($__internal_c373c0e4853b1c55d6b46dec00df8769cb47d0870b33df864e8fe4057f9fc702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3df2819c17f7b63b8b17a65828606780ec413a0763c945eff38d456cb10f217f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df2819c17f7b63b8b17a65828606780ec413a0763c945eff38d456cb10f217f->enter($__internal_3df2819c17f7b63b8b17a65828606780ec413a0763c945eff38d456cb10f217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3df2819c17f7b63b8b17a65828606780ec413a0763c945eff38d456cb10f217f->leave($__internal_3df2819c17f7b63b8b17a65828606780ec413a0763c945eff38d456cb10f217f_prof);

        
        $__internal_c373c0e4853b1c55d6b46dec00df8769cb47d0870b33df864e8fe4057f9fc702->leave($__internal_c373c0e4853b1c55d6b46dec00df8769cb47d0870b33df864e8fe4057f9fc702_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12815f44e263db6414143342d3578c5a4c0cd8637a5ec63311197bbff12f1225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12815f44e263db6414143342d3578c5a4c0cd8637a5ec63311197bbff12f1225->enter($__internal_12815f44e263db6414143342d3578c5a4c0cd8637a5ec63311197bbff12f1225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_42df91ccd94da6d045a0fb30ace7778e3a1a58c15b0b1a325977968a127f670e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42df91ccd94da6d045a0fb30ace7778e3a1a58c15b0b1a325977968a127f670e->enter($__internal_42df91ccd94da6d045a0fb30ace7778e3a1a58c15b0b1a325977968a127f670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42df91ccd94da6d045a0fb30ace7778e3a1a58c15b0b1a325977968a127f670e->leave($__internal_42df91ccd94da6d045a0fb30ace7778e3a1a58c15b0b1a325977968a127f670e_prof);

        
        $__internal_12815f44e263db6414143342d3578c5a4c0cd8637a5ec63311197bbff12f1225->leave($__internal_12815f44e263db6414143342d3578c5a4c0cd8637a5ec63311197bbff12f1225_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_026a12d835107c069a18f8bfb27a12b97a70d5f27f34bbb79643d355d8b269a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026a12d835107c069a18f8bfb27a12b97a70d5f27f34bbb79643d355d8b269a8->enter($__internal_026a12d835107c069a18f8bfb27a12b97a70d5f27f34bbb79643d355d8b269a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1917bce6b379971ba99540cf645bc69def4eb705cf4ff8d7e3eaca178818ff05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1917bce6b379971ba99540cf645bc69def4eb705cf4ff8d7e3eaca178818ff05->enter($__internal_1917bce6b379971ba99540cf645bc69def4eb705cf4ff8d7e3eaca178818ff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1917bce6b379971ba99540cf645bc69def4eb705cf4ff8d7e3eaca178818ff05->leave($__internal_1917bce6b379971ba99540cf645bc69def4eb705cf4ff8d7e3eaca178818ff05_prof);

        
        $__internal_026a12d835107c069a18f8bfb27a12b97a70d5f27f34bbb79643d355d8b269a8->leave($__internal_026a12d835107c069a18f8bfb27a12b97a70d5f27f34bbb79643d355d8b269a8_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_935dac2a636aaa9a960b9f1468057d422af17202add1319024df4339adf25a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935dac2a636aaa9a960b9f1468057d422af17202add1319024df4339adf25a9e->enter($__internal_935dac2a636aaa9a960b9f1468057d422af17202add1319024df4339adf25a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a24efb99b02b1cda52a6092a1cfad263a65089504679f2cf4ccb1884e8bc7bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24efb99b02b1cda52a6092a1cfad263a65089504679f2cf4ccb1884e8bc7bc7->enter($__internal_a24efb99b02b1cda52a6092a1cfad263a65089504679f2cf4ccb1884e8bc7bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a24efb99b02b1cda52a6092a1cfad263a65089504679f2cf4ccb1884e8bc7bc7->leave($__internal_a24efb99b02b1cda52a6092a1cfad263a65089504679f2cf4ccb1884e8bc7bc7_prof);

        
        $__internal_935dac2a636aaa9a960b9f1468057d422af17202add1319024df4339adf25a9e->leave($__internal_935dac2a636aaa9a960b9f1468057d422af17202add1319024df4339adf25a9e_prof);

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
