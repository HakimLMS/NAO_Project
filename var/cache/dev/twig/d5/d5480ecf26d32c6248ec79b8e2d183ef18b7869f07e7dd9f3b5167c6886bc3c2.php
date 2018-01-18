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
        $__internal_0740aef3a935dcdf24fcb6db1509b35c2d3a2b7a3b7c09837996e8f068f40394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0740aef3a935dcdf24fcb6db1509b35c2d3a2b7a3b7c09837996e8f068f40394->enter($__internal_0740aef3a935dcdf24fcb6db1509b35c2d3a2b7a3b7c09837996e8f068f40394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_09fa991e08811a82360313611f30621bf8a92e3bd3a4629843dce07659c5647d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fa991e08811a82360313611f30621bf8a92e3bd3a4629843dce07659c5647d->enter($__internal_09fa991e08811a82360313611f30621bf8a92e3bd3a4629843dce07659c5647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0740aef3a935dcdf24fcb6db1509b35c2d3a2b7a3b7c09837996e8f068f40394->leave($__internal_0740aef3a935dcdf24fcb6db1509b35c2d3a2b7a3b7c09837996e8f068f40394_prof);

        
        $__internal_09fa991e08811a82360313611f30621bf8a92e3bd3a4629843dce07659c5647d->leave($__internal_09fa991e08811a82360313611f30621bf8a92e3bd3a4629843dce07659c5647d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c85af10b65ce21af9e111298d2edf1821a57e2c76e6c8e21327dc8faec50130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c85af10b65ce21af9e111298d2edf1821a57e2c76e6c8e21327dc8faec50130->enter($__internal_0c85af10b65ce21af9e111298d2edf1821a57e2c76e6c8e21327dc8faec50130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_daf538067eec97b5cb36389d3a9d9008c1da8900f81646e7bab254463cdd1fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf538067eec97b5cb36389d3a9d9008c1da8900f81646e7bab254463cdd1fa9->enter($__internal_daf538067eec97b5cb36389d3a9d9008c1da8900f81646e7bab254463cdd1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_daf538067eec97b5cb36389d3a9d9008c1da8900f81646e7bab254463cdd1fa9->leave($__internal_daf538067eec97b5cb36389d3a9d9008c1da8900f81646e7bab254463cdd1fa9_prof);

        
        $__internal_0c85af10b65ce21af9e111298d2edf1821a57e2c76e6c8e21327dc8faec50130->leave($__internal_0c85af10b65ce21af9e111298d2edf1821a57e2c76e6c8e21327dc8faec50130_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd9491e73f4d5d10ecabbeae8e274fc2d7c99e17918ac040f9ae662e8ad55515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9491e73f4d5d10ecabbeae8e274fc2d7c99e17918ac040f9ae662e8ad55515->enter($__internal_fd9491e73f4d5d10ecabbeae8e274fc2d7c99e17918ac040f9ae662e8ad55515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4eb0e2ce64c87f0ec99fed22a2ced306886e870ce38bdd9a152ff7ceaec8527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4eb0e2ce64c87f0ec99fed22a2ced306886e870ce38bdd9a152ff7ceaec8527->enter($__internal_a4eb0e2ce64c87f0ec99fed22a2ced306886e870ce38bdd9a152ff7ceaec8527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4eb0e2ce64c87f0ec99fed22a2ced306886e870ce38bdd9a152ff7ceaec8527->leave($__internal_a4eb0e2ce64c87f0ec99fed22a2ced306886e870ce38bdd9a152ff7ceaec8527_prof);

        
        $__internal_fd9491e73f4d5d10ecabbeae8e274fc2d7c99e17918ac040f9ae662e8ad55515->leave($__internal_fd9491e73f4d5d10ecabbeae8e274fc2d7c99e17918ac040f9ae662e8ad55515_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_874589b5ac3c16ff3edd37ce3d368bd351aea06a8c1c24aa1c3790d6334e2979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874589b5ac3c16ff3edd37ce3d368bd351aea06a8c1c24aa1c3790d6334e2979->enter($__internal_874589b5ac3c16ff3edd37ce3d368bd351aea06a8c1c24aa1c3790d6334e2979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79f2aaaf15e07da37b79ca7b52786269b96ca491a7004947e5cb7e82226190a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f2aaaf15e07da37b79ca7b52786269b96ca491a7004947e5cb7e82226190a3->enter($__internal_79f2aaaf15e07da37b79ca7b52786269b96ca491a7004947e5cb7e82226190a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79f2aaaf15e07da37b79ca7b52786269b96ca491a7004947e5cb7e82226190a3->leave($__internal_79f2aaaf15e07da37b79ca7b52786269b96ca491a7004947e5cb7e82226190a3_prof);

        
        $__internal_874589b5ac3c16ff3edd37ce3d368bd351aea06a8c1c24aa1c3790d6334e2979->leave($__internal_874589b5ac3c16ff3edd37ce3d368bd351aea06a8c1c24aa1c3790d6334e2979_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a6a9a3c025129d5f1caeace7806543aa71e5d3c6c05b9c31a2a82ce17f3a825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6a9a3c025129d5f1caeace7806543aa71e5d3c6c05b9c31a2a82ce17f3a825->enter($__internal_5a6a9a3c025129d5f1caeace7806543aa71e5d3c6c05b9c31a2a82ce17f3a825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5635bb84c38449a931807315abc7920f40ae2de1c831adec09ce389ac9d2fbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5635bb84c38449a931807315abc7920f40ae2de1c831adec09ce389ac9d2fbfb->enter($__internal_5635bb84c38449a931807315abc7920f40ae2de1c831adec09ce389ac9d2fbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5635bb84c38449a931807315abc7920f40ae2de1c831adec09ce389ac9d2fbfb->leave($__internal_5635bb84c38449a931807315abc7920f40ae2de1c831adec09ce389ac9d2fbfb_prof);

        
        $__internal_5a6a9a3c025129d5f1caeace7806543aa71e5d3c6c05b9c31a2a82ce17f3a825->leave($__internal_5a6a9a3c025129d5f1caeace7806543aa71e5d3c6c05b9c31a2a82ce17f3a825_prof);

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
