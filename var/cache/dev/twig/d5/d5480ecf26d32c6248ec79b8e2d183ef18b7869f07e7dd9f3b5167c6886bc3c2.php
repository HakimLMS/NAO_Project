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
        $__internal_7e32bbab0010dd61c2eeda2b53bf4829bbd1db44d33372d5406d008615a482e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e32bbab0010dd61c2eeda2b53bf4829bbd1db44d33372d5406d008615a482e6->enter($__internal_7e32bbab0010dd61c2eeda2b53bf4829bbd1db44d33372d5406d008615a482e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_637424092ca7458e2f6b11668547f62ce90b99fdb8ad0e8867a2ceeb542be503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637424092ca7458e2f6b11668547f62ce90b99fdb8ad0e8867a2ceeb542be503->enter($__internal_637424092ca7458e2f6b11668547f62ce90b99fdb8ad0e8867a2ceeb542be503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7e32bbab0010dd61c2eeda2b53bf4829bbd1db44d33372d5406d008615a482e6->leave($__internal_7e32bbab0010dd61c2eeda2b53bf4829bbd1db44d33372d5406d008615a482e6_prof);

        
        $__internal_637424092ca7458e2f6b11668547f62ce90b99fdb8ad0e8867a2ceeb542be503->leave($__internal_637424092ca7458e2f6b11668547f62ce90b99fdb8ad0e8867a2ceeb542be503_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_69546698985b772ab6a4562b0a23f1c1f576e990aa38fa14da318057e62e1ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69546698985b772ab6a4562b0a23f1c1f576e990aa38fa14da318057e62e1ded->enter($__internal_69546698985b772ab6a4562b0a23f1c1f576e990aa38fa14da318057e62e1ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b10f98373872c699aca2211be3bd69066f1e9306f6897d65205f693a1d0eb3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10f98373872c699aca2211be3bd69066f1e9306f6897d65205f693a1d0eb3aa->enter($__internal_b10f98373872c699aca2211be3bd69066f1e9306f6897d65205f693a1d0eb3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b10f98373872c699aca2211be3bd69066f1e9306f6897d65205f693a1d0eb3aa->leave($__internal_b10f98373872c699aca2211be3bd69066f1e9306f6897d65205f693a1d0eb3aa_prof);

        
        $__internal_69546698985b772ab6a4562b0a23f1c1f576e990aa38fa14da318057e62e1ded->leave($__internal_69546698985b772ab6a4562b0a23f1c1f576e990aa38fa14da318057e62e1ded_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cda02b2884610556682191f4548b1ecf2e133188d783465eaeddc452f8f4af9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda02b2884610556682191f4548b1ecf2e133188d783465eaeddc452f8f4af9f->enter($__internal_cda02b2884610556682191f4548b1ecf2e133188d783465eaeddc452f8f4af9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3024a376c9bb61151b6e54e4153d2426d9e7b72cce4bed6580ed05eba36fb026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3024a376c9bb61151b6e54e4153d2426d9e7b72cce4bed6580ed05eba36fb026->enter($__internal_3024a376c9bb61151b6e54e4153d2426d9e7b72cce4bed6580ed05eba36fb026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3024a376c9bb61151b6e54e4153d2426d9e7b72cce4bed6580ed05eba36fb026->leave($__internal_3024a376c9bb61151b6e54e4153d2426d9e7b72cce4bed6580ed05eba36fb026_prof);

        
        $__internal_cda02b2884610556682191f4548b1ecf2e133188d783465eaeddc452f8f4af9f->leave($__internal_cda02b2884610556682191f4548b1ecf2e133188d783465eaeddc452f8f4af9f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_007c46d8fb8ced2004120ad70d37418f618ccadbfa6baaa954487038fbf1c3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007c46d8fb8ced2004120ad70d37418f618ccadbfa6baaa954487038fbf1c3f4->enter($__internal_007c46d8fb8ced2004120ad70d37418f618ccadbfa6baaa954487038fbf1c3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99656a836d80ac9285c12473a5c23cfa4a1a2ef5362f4fccf3e818c792ca1cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99656a836d80ac9285c12473a5c23cfa4a1a2ef5362f4fccf3e818c792ca1cd9->enter($__internal_99656a836d80ac9285c12473a5c23cfa4a1a2ef5362f4fccf3e818c792ca1cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99656a836d80ac9285c12473a5c23cfa4a1a2ef5362f4fccf3e818c792ca1cd9->leave($__internal_99656a836d80ac9285c12473a5c23cfa4a1a2ef5362f4fccf3e818c792ca1cd9_prof);

        
        $__internal_007c46d8fb8ced2004120ad70d37418f618ccadbfa6baaa954487038fbf1c3f4->leave($__internal_007c46d8fb8ced2004120ad70d37418f618ccadbfa6baaa954487038fbf1c3f4_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_481208e2094cc194cbc7ab7cc01a51c7687280d388ddbcd06e468469c6159c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481208e2094cc194cbc7ab7cc01a51c7687280d388ddbcd06e468469c6159c11->enter($__internal_481208e2094cc194cbc7ab7cc01a51c7687280d388ddbcd06e468469c6159c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96a5917691cd72259bf29db380f73eb2fc6fc492d7f79ba15547bdd1a44a0506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a5917691cd72259bf29db380f73eb2fc6fc492d7f79ba15547bdd1a44a0506->enter($__internal_96a5917691cd72259bf29db380f73eb2fc6fc492d7f79ba15547bdd1a44a0506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96a5917691cd72259bf29db380f73eb2fc6fc492d7f79ba15547bdd1a44a0506->leave($__internal_96a5917691cd72259bf29db380f73eb2fc6fc492d7f79ba15547bdd1a44a0506_prof);

        
        $__internal_481208e2094cc194cbc7ab7cc01a51c7687280d388ddbcd06e468469c6159c11->leave($__internal_481208e2094cc194cbc7ab7cc01a51c7687280d388ddbcd06e468469c6159c11_prof);

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
