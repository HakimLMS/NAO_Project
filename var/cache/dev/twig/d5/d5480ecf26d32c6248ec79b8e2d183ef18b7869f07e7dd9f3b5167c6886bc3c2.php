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
        $__internal_40c613cc0350e8668e339dcaf6e0df1e3969e70a65ce2d7c99f12bdfc7d6719f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c613cc0350e8668e339dcaf6e0df1e3969e70a65ce2d7c99f12bdfc7d6719f->enter($__internal_40c613cc0350e8668e339dcaf6e0df1e3969e70a65ce2d7c99f12bdfc7d6719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6a875faa43caff4b14c410c59d73ac20717b0c485d89cf105244f432bab4a43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a875faa43caff4b14c410c59d73ac20717b0c485d89cf105244f432bab4a43d->enter($__internal_6a875faa43caff4b14c410c59d73ac20717b0c485d89cf105244f432bab4a43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_40c613cc0350e8668e339dcaf6e0df1e3969e70a65ce2d7c99f12bdfc7d6719f->leave($__internal_40c613cc0350e8668e339dcaf6e0df1e3969e70a65ce2d7c99f12bdfc7d6719f_prof);

        
        $__internal_6a875faa43caff4b14c410c59d73ac20717b0c485d89cf105244f432bab4a43d->leave($__internal_6a875faa43caff4b14c410c59d73ac20717b0c485d89cf105244f432bab4a43d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eedf52947a0ff0cbc6f625ae402e6a251258388ba9003a57dfdc882eda52800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eedf52947a0ff0cbc6f625ae402e6a251258388ba9003a57dfdc882eda52800->enter($__internal_1eedf52947a0ff0cbc6f625ae402e6a251258388ba9003a57dfdc882eda52800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2b59b48cc21ceff6a8210819761f7535128415f5cdc81baa246c5171dc4efb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b59b48cc21ceff6a8210819761f7535128415f5cdc81baa246c5171dc4efb2->enter($__internal_e2b59b48cc21ceff6a8210819761f7535128415f5cdc81baa246c5171dc4efb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e2b59b48cc21ceff6a8210819761f7535128415f5cdc81baa246c5171dc4efb2->leave($__internal_e2b59b48cc21ceff6a8210819761f7535128415f5cdc81baa246c5171dc4efb2_prof);

        
        $__internal_1eedf52947a0ff0cbc6f625ae402e6a251258388ba9003a57dfdc882eda52800->leave($__internal_1eedf52947a0ff0cbc6f625ae402e6a251258388ba9003a57dfdc882eda52800_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa2c82ed627798673986d0c9b5ed2bab4104de546c77277b3e52c0789552b921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2c82ed627798673986d0c9b5ed2bab4104de546c77277b3e52c0789552b921->enter($__internal_fa2c82ed627798673986d0c9b5ed2bab4104de546c77277b3e52c0789552b921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1035c42eea5e6af85cbaafe247ec3ed779b3405c586849df589c67a7663dde09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1035c42eea5e6af85cbaafe247ec3ed779b3405c586849df589c67a7663dde09->enter($__internal_1035c42eea5e6af85cbaafe247ec3ed779b3405c586849df589c67a7663dde09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1035c42eea5e6af85cbaafe247ec3ed779b3405c586849df589c67a7663dde09->leave($__internal_1035c42eea5e6af85cbaafe247ec3ed779b3405c586849df589c67a7663dde09_prof);

        
        $__internal_fa2c82ed627798673986d0c9b5ed2bab4104de546c77277b3e52c0789552b921->leave($__internal_fa2c82ed627798673986d0c9b5ed2bab4104de546c77277b3e52c0789552b921_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce7be3c4a65fd0ed8dcfb92eed5791e0df293aa09c392fc445bbc5441b4735f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7be3c4a65fd0ed8dcfb92eed5791e0df293aa09c392fc445bbc5441b4735f4->enter($__internal_ce7be3c4a65fd0ed8dcfb92eed5791e0df293aa09c392fc445bbc5441b4735f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_004c4b017f89932c5f1406e03397187dcb2b78012167d28d7043fda2c4b7e373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004c4b017f89932c5f1406e03397187dcb2b78012167d28d7043fda2c4b7e373->enter($__internal_004c4b017f89932c5f1406e03397187dcb2b78012167d28d7043fda2c4b7e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_004c4b017f89932c5f1406e03397187dcb2b78012167d28d7043fda2c4b7e373->leave($__internal_004c4b017f89932c5f1406e03397187dcb2b78012167d28d7043fda2c4b7e373_prof);

        
        $__internal_ce7be3c4a65fd0ed8dcfb92eed5791e0df293aa09c392fc445bbc5441b4735f4->leave($__internal_ce7be3c4a65fd0ed8dcfb92eed5791e0df293aa09c392fc445bbc5441b4735f4_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_157a8b4442d767985a44d6ecb2ecb81fffd34ef4b6ed9c6ef2bb15a7b568b386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157a8b4442d767985a44d6ecb2ecb81fffd34ef4b6ed9c6ef2bb15a7b568b386->enter($__internal_157a8b4442d767985a44d6ecb2ecb81fffd34ef4b6ed9c6ef2bb15a7b568b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4291510f39503d5d521f977845d42dbe02d9a3121e08e7cafa7a212de490ff57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4291510f39503d5d521f977845d42dbe02d9a3121e08e7cafa7a212de490ff57->enter($__internal_4291510f39503d5d521f977845d42dbe02d9a3121e08e7cafa7a212de490ff57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4291510f39503d5d521f977845d42dbe02d9a3121e08e7cafa7a212de490ff57->leave($__internal_4291510f39503d5d521f977845d42dbe02d9a3121e08e7cafa7a212de490ff57_prof);

        
        $__internal_157a8b4442d767985a44d6ecb2ecb81fffd34ef4b6ed9c6ef2bb15a7b568b386->leave($__internal_157a8b4442d767985a44d6ecb2ecb81fffd34ef4b6ed9c6ef2bb15a7b568b386_prof);

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
