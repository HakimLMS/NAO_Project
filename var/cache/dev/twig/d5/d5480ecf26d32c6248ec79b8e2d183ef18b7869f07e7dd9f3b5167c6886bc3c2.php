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
        $__internal_7612e9e11fd33ef5617c39a37836ce1add2e49ddba93c60592b49bc3e87c8c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7612e9e11fd33ef5617c39a37836ce1add2e49ddba93c60592b49bc3e87c8c8f->enter($__internal_7612e9e11fd33ef5617c39a37836ce1add2e49ddba93c60592b49bc3e87c8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a64f891893c11a5686a14e27f66a72375252b9ec2c7065684cf63c19bc955a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64f891893c11a5686a14e27f66a72375252b9ec2c7065684cf63c19bc955a79->enter($__internal_a64f891893c11a5686a14e27f66a72375252b9ec2c7065684cf63c19bc955a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7612e9e11fd33ef5617c39a37836ce1add2e49ddba93c60592b49bc3e87c8c8f->leave($__internal_7612e9e11fd33ef5617c39a37836ce1add2e49ddba93c60592b49bc3e87c8c8f_prof);

        
        $__internal_a64f891893c11a5686a14e27f66a72375252b9ec2c7065684cf63c19bc955a79->leave($__internal_a64f891893c11a5686a14e27f66a72375252b9ec2c7065684cf63c19bc955a79_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_71e751cfbee3e494499e49a62fe203e66850104ca607f1ffec53fb8cf40a690f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e751cfbee3e494499e49a62fe203e66850104ca607f1ffec53fb8cf40a690f->enter($__internal_71e751cfbee3e494499e49a62fe203e66850104ca607f1ffec53fb8cf40a690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62d8ce582d7c215f3613dbbd633a9baa24d74332cae9d23443126860cb95c91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d8ce582d7c215f3613dbbd633a9baa24d74332cae9d23443126860cb95c91c->enter($__internal_62d8ce582d7c215f3613dbbd633a9baa24d74332cae9d23443126860cb95c91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_62d8ce582d7c215f3613dbbd633a9baa24d74332cae9d23443126860cb95c91c->leave($__internal_62d8ce582d7c215f3613dbbd633a9baa24d74332cae9d23443126860cb95c91c_prof);

        
        $__internal_71e751cfbee3e494499e49a62fe203e66850104ca607f1ffec53fb8cf40a690f->leave($__internal_71e751cfbee3e494499e49a62fe203e66850104ca607f1ffec53fb8cf40a690f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7647d1e40bb3ded490acd95ed162d4519d7b5319fd2424499ba346d3ff733ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7647d1e40bb3ded490acd95ed162d4519d7b5319fd2424499ba346d3ff733ae3->enter($__internal_7647d1e40bb3ded490acd95ed162d4519d7b5319fd2424499ba346d3ff733ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dce13c0d4879585be19b4823db2c59f3b5814407d4515c048deb28b100f67201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce13c0d4879585be19b4823db2c59f3b5814407d4515c048deb28b100f67201->enter($__internal_dce13c0d4879585be19b4823db2c59f3b5814407d4515c048deb28b100f67201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dce13c0d4879585be19b4823db2c59f3b5814407d4515c048deb28b100f67201->leave($__internal_dce13c0d4879585be19b4823db2c59f3b5814407d4515c048deb28b100f67201_prof);

        
        $__internal_7647d1e40bb3ded490acd95ed162d4519d7b5319fd2424499ba346d3ff733ae3->leave($__internal_7647d1e40bb3ded490acd95ed162d4519d7b5319fd2424499ba346d3ff733ae3_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cc9681284600622d14016d3f5906951f8cbb341df027afc44a64eeea7b562ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc9681284600622d14016d3f5906951f8cbb341df027afc44a64eeea7b562ab->enter($__internal_0cc9681284600622d14016d3f5906951f8cbb341df027afc44a64eeea7b562ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3ca64ecc2a50dc2958f9797acb4fbbc993eed76eb1d48e66c7da2d84f6e5ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ca64ecc2a50dc2958f9797acb4fbbc993eed76eb1d48e66c7da2d84f6e5ef3->enter($__internal_e3ca64ecc2a50dc2958f9797acb4fbbc993eed76eb1d48e66c7da2d84f6e5ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3ca64ecc2a50dc2958f9797acb4fbbc993eed76eb1d48e66c7da2d84f6e5ef3->leave($__internal_e3ca64ecc2a50dc2958f9797acb4fbbc993eed76eb1d48e66c7da2d84f6e5ef3_prof);

        
        $__internal_0cc9681284600622d14016d3f5906951f8cbb341df027afc44a64eeea7b562ab->leave($__internal_0cc9681284600622d14016d3f5906951f8cbb341df027afc44a64eeea7b562ab_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b765503d36d143e538a1c42b46c7e12a751ad97e83f3de526a5585ea80f4ce83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b765503d36d143e538a1c42b46c7e12a751ad97e83f3de526a5585ea80f4ce83->enter($__internal_b765503d36d143e538a1c42b46c7e12a751ad97e83f3de526a5585ea80f4ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e6748cf0719c5191919c7c4640c0a1c9fa5b217f138ef6dd2ba3576dc88776e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6748cf0719c5191919c7c4640c0a1c9fa5b217f138ef6dd2ba3576dc88776e2->enter($__internal_e6748cf0719c5191919c7c4640c0a1c9fa5b217f138ef6dd2ba3576dc88776e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e6748cf0719c5191919c7c4640c0a1c9fa5b217f138ef6dd2ba3576dc88776e2->leave($__internal_e6748cf0719c5191919c7c4640c0a1c9fa5b217f138ef6dd2ba3576dc88776e2_prof);

        
        $__internal_b765503d36d143e538a1c42b46c7e12a751ad97e83f3de526a5585ea80f4ce83->leave($__internal_b765503d36d143e538a1c42b46c7e12a751ad97e83f3de526a5585ea80f4ce83_prof);

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
