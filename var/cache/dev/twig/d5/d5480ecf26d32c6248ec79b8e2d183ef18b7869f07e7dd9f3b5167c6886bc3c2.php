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
        $__internal_a903a0f18923ea5be84259e9efe4f29f29283501c1a7a8fd8697de25fbe8d9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a903a0f18923ea5be84259e9efe4f29f29283501c1a7a8fd8697de25fbe8d9e2->enter($__internal_a903a0f18923ea5be84259e9efe4f29f29283501c1a7a8fd8697de25fbe8d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_683c94430a7eb104fc6771692dd712abf3340eab182eddd933a11fa691204fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683c94430a7eb104fc6771692dd712abf3340eab182eddd933a11fa691204fdf->enter($__internal_683c94430a7eb104fc6771692dd712abf3340eab182eddd933a11fa691204fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a903a0f18923ea5be84259e9efe4f29f29283501c1a7a8fd8697de25fbe8d9e2->leave($__internal_a903a0f18923ea5be84259e9efe4f29f29283501c1a7a8fd8697de25fbe8d9e2_prof);

        
        $__internal_683c94430a7eb104fc6771692dd712abf3340eab182eddd933a11fa691204fdf->leave($__internal_683c94430a7eb104fc6771692dd712abf3340eab182eddd933a11fa691204fdf_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b49f7daea5f69d007187e5688c05a7b84c12746efaffa4f3572c9da2341a814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b49f7daea5f69d007187e5688c05a7b84c12746efaffa4f3572c9da2341a814->enter($__internal_5b49f7daea5f69d007187e5688c05a7b84c12746efaffa4f3572c9da2341a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55efc1d68979319794cfd13d2e8edb91ea22950c498faf9a19e2641a189ddc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55efc1d68979319794cfd13d2e8edb91ea22950c498faf9a19e2641a189ddc6d->enter($__internal_55efc1d68979319794cfd13d2e8edb91ea22950c498faf9a19e2641a189ddc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_55efc1d68979319794cfd13d2e8edb91ea22950c498faf9a19e2641a189ddc6d->leave($__internal_55efc1d68979319794cfd13d2e8edb91ea22950c498faf9a19e2641a189ddc6d_prof);

        
        $__internal_5b49f7daea5f69d007187e5688c05a7b84c12746efaffa4f3572c9da2341a814->leave($__internal_5b49f7daea5f69d007187e5688c05a7b84c12746efaffa4f3572c9da2341a814_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7da0aaae7cf5413bd1d2cdb64e29caa92fd6d735c586981558070a7829e7dfac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da0aaae7cf5413bd1d2cdb64e29caa92fd6d735c586981558070a7829e7dfac->enter($__internal_7da0aaae7cf5413bd1d2cdb64e29caa92fd6d735c586981558070a7829e7dfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9c262ee61dbf57ac9199aacf59150aae87466037becdcc9ca3c3e26ca9ff251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c262ee61dbf57ac9199aacf59150aae87466037becdcc9ca3c3e26ca9ff251->enter($__internal_e9c262ee61dbf57ac9199aacf59150aae87466037becdcc9ca3c3e26ca9ff251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9c262ee61dbf57ac9199aacf59150aae87466037becdcc9ca3c3e26ca9ff251->leave($__internal_e9c262ee61dbf57ac9199aacf59150aae87466037becdcc9ca3c3e26ca9ff251_prof);

        
        $__internal_7da0aaae7cf5413bd1d2cdb64e29caa92fd6d735c586981558070a7829e7dfac->leave($__internal_7da0aaae7cf5413bd1d2cdb64e29caa92fd6d735c586981558070a7829e7dfac_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_27012c4445e3b14891f472ea99b92c92b8b886820cece2def60fc5a2f7a3a768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27012c4445e3b14891f472ea99b92c92b8b886820cece2def60fc5a2f7a3a768->enter($__internal_27012c4445e3b14891f472ea99b92c92b8b886820cece2def60fc5a2f7a3a768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5bd2ec38d5b97faaeec397023a5b7cec796009573655d8259aeba28873f9a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bd2ec38d5b97faaeec397023a5b7cec796009573655d8259aeba28873f9a37->enter($__internal_f5bd2ec38d5b97faaeec397023a5b7cec796009573655d8259aeba28873f9a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5bd2ec38d5b97faaeec397023a5b7cec796009573655d8259aeba28873f9a37->leave($__internal_f5bd2ec38d5b97faaeec397023a5b7cec796009573655d8259aeba28873f9a37_prof);

        
        $__internal_27012c4445e3b14891f472ea99b92c92b8b886820cece2def60fc5a2f7a3a768->leave($__internal_27012c4445e3b14891f472ea99b92c92b8b886820cece2def60fc5a2f7a3a768_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcb43ff7fb9b8c0863dd04eb9fdc922c64fd9c91e6dcb5c997bab46834542131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb43ff7fb9b8c0863dd04eb9fdc922c64fd9c91e6dcb5c997bab46834542131->enter($__internal_bcb43ff7fb9b8c0863dd04eb9fdc922c64fd9c91e6dcb5c997bab46834542131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b48d8ef6532d8284eac22a915be0e6aa9a797277e102033eea5f8857c39b7902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48d8ef6532d8284eac22a915be0e6aa9a797277e102033eea5f8857c39b7902->enter($__internal_b48d8ef6532d8284eac22a915be0e6aa9a797277e102033eea5f8857c39b7902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b48d8ef6532d8284eac22a915be0e6aa9a797277e102033eea5f8857c39b7902->leave($__internal_b48d8ef6532d8284eac22a915be0e6aa9a797277e102033eea5f8857c39b7902_prof);

        
        $__internal_bcb43ff7fb9b8c0863dd04eb9fdc922c64fd9c91e6dcb5c997bab46834542131->leave($__internal_bcb43ff7fb9b8c0863dd04eb9fdc922c64fd9c91e6dcb5c997bab46834542131_prof);

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
