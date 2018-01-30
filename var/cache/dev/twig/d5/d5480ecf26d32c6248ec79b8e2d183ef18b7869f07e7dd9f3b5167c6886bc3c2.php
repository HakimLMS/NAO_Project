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
        $__internal_90d793f367df3765e6c07608026d3a113fc873bc3c77aebd6f563f34313504c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d793f367df3765e6c07608026d3a113fc873bc3c77aebd6f563f34313504c4->enter($__internal_90d793f367df3765e6c07608026d3a113fc873bc3c77aebd6f563f34313504c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ec06007f7cec926eca9356b6c098039e514e311c0b3397cefda46529bc5ee03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec06007f7cec926eca9356b6c098039e514e311c0b3397cefda46529bc5ee03c->enter($__internal_ec06007f7cec926eca9356b6c098039e514e311c0b3397cefda46529bc5ee03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_90d793f367df3765e6c07608026d3a113fc873bc3c77aebd6f563f34313504c4->leave($__internal_90d793f367df3765e6c07608026d3a113fc873bc3c77aebd6f563f34313504c4_prof);

        
        $__internal_ec06007f7cec926eca9356b6c098039e514e311c0b3397cefda46529bc5ee03c->leave($__internal_ec06007f7cec926eca9356b6c098039e514e311c0b3397cefda46529bc5ee03c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c3b131ce6d0e50e190d87434328070fc57518bbe8208984939c1abb2e37f9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3b131ce6d0e50e190d87434328070fc57518bbe8208984939c1abb2e37f9c4->enter($__internal_7c3b131ce6d0e50e190d87434328070fc57518bbe8208984939c1abb2e37f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60a903310ee1ae61dc96b9dcb9cd59181e144833afb2c0c4aae5a73067ca6925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a903310ee1ae61dc96b9dcb9cd59181e144833afb2c0c4aae5a73067ca6925->enter($__internal_60a903310ee1ae61dc96b9dcb9cd59181e144833afb2c0c4aae5a73067ca6925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60a903310ee1ae61dc96b9dcb9cd59181e144833afb2c0c4aae5a73067ca6925->leave($__internal_60a903310ee1ae61dc96b9dcb9cd59181e144833afb2c0c4aae5a73067ca6925_prof);

        
        $__internal_7c3b131ce6d0e50e190d87434328070fc57518bbe8208984939c1abb2e37f9c4->leave($__internal_7c3b131ce6d0e50e190d87434328070fc57518bbe8208984939c1abb2e37f9c4_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc8dcc4f5dad19d66a887a85e3bf9950abe3d1dd4f71e844bbf59e0dfa2fdf83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8dcc4f5dad19d66a887a85e3bf9950abe3d1dd4f71e844bbf59e0dfa2fdf83->enter($__internal_dc8dcc4f5dad19d66a887a85e3bf9950abe3d1dd4f71e844bbf59e0dfa2fdf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dd4a13fe638c1c4402727c9781e2507646389123521796b4c203db0852db291a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4a13fe638c1c4402727c9781e2507646389123521796b4c203db0852db291a->enter($__internal_dd4a13fe638c1c4402727c9781e2507646389123521796b4c203db0852db291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dd4a13fe638c1c4402727c9781e2507646389123521796b4c203db0852db291a->leave($__internal_dd4a13fe638c1c4402727c9781e2507646389123521796b4c203db0852db291a_prof);

        
        $__internal_dc8dcc4f5dad19d66a887a85e3bf9950abe3d1dd4f71e844bbf59e0dfa2fdf83->leave($__internal_dc8dcc4f5dad19d66a887a85e3bf9950abe3d1dd4f71e844bbf59e0dfa2fdf83_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_56669424bc7753c6344b68d511bcf93431751e06645826ac1dee7c2edfde4579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56669424bc7753c6344b68d511bcf93431751e06645826ac1dee7c2edfde4579->enter($__internal_56669424bc7753c6344b68d511bcf93431751e06645826ac1dee7c2edfde4579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e457f58fa90019ab44a1deaeb9c84555ab2408e2ca6778b1d80018f41dd6f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e457f58fa90019ab44a1deaeb9c84555ab2408e2ca6778b1d80018f41dd6f6c->enter($__internal_8e457f58fa90019ab44a1deaeb9c84555ab2408e2ca6778b1d80018f41dd6f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e457f58fa90019ab44a1deaeb9c84555ab2408e2ca6778b1d80018f41dd6f6c->leave($__internal_8e457f58fa90019ab44a1deaeb9c84555ab2408e2ca6778b1d80018f41dd6f6c_prof);

        
        $__internal_56669424bc7753c6344b68d511bcf93431751e06645826ac1dee7c2edfde4579->leave($__internal_56669424bc7753c6344b68d511bcf93431751e06645826ac1dee7c2edfde4579_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8460b738fa872bfe1489b542f96728fe8b06f15252c6482e832d95dddadbbb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8460b738fa872bfe1489b542f96728fe8b06f15252c6482e832d95dddadbbb0d->enter($__internal_8460b738fa872bfe1489b542f96728fe8b06f15252c6482e832d95dddadbbb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbbaccaf63aa6ed7d146fb17750272c1e010b103f9215c30a4c6a1840f929087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbaccaf63aa6ed7d146fb17750272c1e010b103f9215c30a4c6a1840f929087->enter($__internal_cbbaccaf63aa6ed7d146fb17750272c1e010b103f9215c30a4c6a1840f929087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cbbaccaf63aa6ed7d146fb17750272c1e010b103f9215c30a4c6a1840f929087->leave($__internal_cbbaccaf63aa6ed7d146fb17750272c1e010b103f9215c30a4c6a1840f929087_prof);

        
        $__internal_8460b738fa872bfe1489b542f96728fe8b06f15252c6482e832d95dddadbbb0d->leave($__internal_8460b738fa872bfe1489b542f96728fe8b06f15252c6482e832d95dddadbbb0d_prof);

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
