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
        $__internal_40ba401056f29bbf887c0e2cb1066682c68cd1d4a2b624cb32b076cc1cad1c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ba401056f29bbf887c0e2cb1066682c68cd1d4a2b624cb32b076cc1cad1c39->enter($__internal_40ba401056f29bbf887c0e2cb1066682c68cd1d4a2b624cb32b076cc1cad1c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5194b4f79925550081a083dc4733e0266005dead668c16e85e8bdf2faa713422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5194b4f79925550081a083dc4733e0266005dead668c16e85e8bdf2faa713422->enter($__internal_5194b4f79925550081a083dc4733e0266005dead668c16e85e8bdf2faa713422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_40ba401056f29bbf887c0e2cb1066682c68cd1d4a2b624cb32b076cc1cad1c39->leave($__internal_40ba401056f29bbf887c0e2cb1066682c68cd1d4a2b624cb32b076cc1cad1c39_prof);

        
        $__internal_5194b4f79925550081a083dc4733e0266005dead668c16e85e8bdf2faa713422->leave($__internal_5194b4f79925550081a083dc4733e0266005dead668c16e85e8bdf2faa713422_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa71ab9a4cbc875df616125c1368bfe5ff86ad186044bad7bbe056f3cefd6819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa71ab9a4cbc875df616125c1368bfe5ff86ad186044bad7bbe056f3cefd6819->enter($__internal_aa71ab9a4cbc875df616125c1368bfe5ff86ad186044bad7bbe056f3cefd6819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_220f6e096c4f0e6d4101295655849c51a8ed7583c02f0b10a62cf8f6363f01d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220f6e096c4f0e6d4101295655849c51a8ed7583c02f0b10a62cf8f6363f01d2->enter($__internal_220f6e096c4f0e6d4101295655849c51a8ed7583c02f0b10a62cf8f6363f01d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_220f6e096c4f0e6d4101295655849c51a8ed7583c02f0b10a62cf8f6363f01d2->leave($__internal_220f6e096c4f0e6d4101295655849c51a8ed7583c02f0b10a62cf8f6363f01d2_prof);

        
        $__internal_aa71ab9a4cbc875df616125c1368bfe5ff86ad186044bad7bbe056f3cefd6819->leave($__internal_aa71ab9a4cbc875df616125c1368bfe5ff86ad186044bad7bbe056f3cefd6819_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4f15e61dbd6363935bf59876f5a2810b7b0279f06f229661c2fc9c851f8f08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f15e61dbd6363935bf59876f5a2810b7b0279f06f229661c2fc9c851f8f08f->enter($__internal_b4f15e61dbd6363935bf59876f5a2810b7b0279f06f229661c2fc9c851f8f08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77af26d755b17b36bf246370694ab5f2e836c165554f6e1f4597d381b768bc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77af26d755b17b36bf246370694ab5f2e836c165554f6e1f4597d381b768bc6b->enter($__internal_77af26d755b17b36bf246370694ab5f2e836c165554f6e1f4597d381b768bc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77af26d755b17b36bf246370694ab5f2e836c165554f6e1f4597d381b768bc6b->leave($__internal_77af26d755b17b36bf246370694ab5f2e836c165554f6e1f4597d381b768bc6b_prof);

        
        $__internal_b4f15e61dbd6363935bf59876f5a2810b7b0279f06f229661c2fc9c851f8f08f->leave($__internal_b4f15e61dbd6363935bf59876f5a2810b7b0279f06f229661c2fc9c851f8f08f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_69d32fc4550fc3166d82ab1570dfec48838a8e2f1c91eb3cc18dc9d412241786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d32fc4550fc3166d82ab1570dfec48838a8e2f1c91eb3cc18dc9d412241786->enter($__internal_69d32fc4550fc3166d82ab1570dfec48838a8e2f1c91eb3cc18dc9d412241786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60df4561015df7825a7a8ca2de2a9f50a8468a3e12c3e2c255879c3cde07f6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60df4561015df7825a7a8ca2de2a9f50a8468a3e12c3e2c255879c3cde07f6d4->enter($__internal_60df4561015df7825a7a8ca2de2a9f50a8468a3e12c3e2c255879c3cde07f6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60df4561015df7825a7a8ca2de2a9f50a8468a3e12c3e2c255879c3cde07f6d4->leave($__internal_60df4561015df7825a7a8ca2de2a9f50a8468a3e12c3e2c255879c3cde07f6d4_prof);

        
        $__internal_69d32fc4550fc3166d82ab1570dfec48838a8e2f1c91eb3cc18dc9d412241786->leave($__internal_69d32fc4550fc3166d82ab1570dfec48838a8e2f1c91eb3cc18dc9d412241786_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9b136301cd8a27c45dd360126570058135f284d4c80e83e5055bf4c81d7d0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b136301cd8a27c45dd360126570058135f284d4c80e83e5055bf4c81d7d0ca->enter($__internal_a9b136301cd8a27c45dd360126570058135f284d4c80e83e5055bf4c81d7d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ffbe8398b47fe928aa0d5d57e9bffe0440e234f6f436f8434b455980214543ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbe8398b47fe928aa0d5d57e9bffe0440e234f6f436f8434b455980214543ac->enter($__internal_ffbe8398b47fe928aa0d5d57e9bffe0440e234f6f436f8434b455980214543ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ffbe8398b47fe928aa0d5d57e9bffe0440e234f6f436f8434b455980214543ac->leave($__internal_ffbe8398b47fe928aa0d5d57e9bffe0440e234f6f436f8434b455980214543ac_prof);

        
        $__internal_a9b136301cd8a27c45dd360126570058135f284d4c80e83e5055bf4c81d7d0ca->leave($__internal_a9b136301cd8a27c45dd360126570058135f284d4c80e83e5055bf4c81d7d0ca_prof);

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
