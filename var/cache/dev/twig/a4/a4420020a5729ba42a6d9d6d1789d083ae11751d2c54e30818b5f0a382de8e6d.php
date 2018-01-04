<?php

/* base.html.twig */
class __TwigTemplate_9b82483fd9f189b036f072471c7129831d5df7a2101ce1d4c27fd63bbd10799e extends Twig_Template
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
        $__internal_0df6ef554f2aa7f0d2a94cbdd9b61b49fb690036b683fc1e8a6c12067b94ccc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df6ef554f2aa7f0d2a94cbdd9b61b49fb690036b683fc1e8a6c12067b94ccc9->enter($__internal_0df6ef554f2aa7f0d2a94cbdd9b61b49fb690036b683fc1e8a6c12067b94ccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c2705d52da36d17c3060ad1a76c4d7e8ec753a7f8e175098210e6a7f5f187729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2705d52da36d17c3060ad1a76c4d7e8ec753a7f8e175098210e6a7f5f187729->enter($__internal_c2705d52da36d17c3060ad1a76c4d7e8ec753a7f8e175098210e6a7f5f187729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_0df6ef554f2aa7f0d2a94cbdd9b61b49fb690036b683fc1e8a6c12067b94ccc9->leave($__internal_0df6ef554f2aa7f0d2a94cbdd9b61b49fb690036b683fc1e8a6c12067b94ccc9_prof);

        
        $__internal_c2705d52da36d17c3060ad1a76c4d7e8ec753a7f8e175098210e6a7f5f187729->leave($__internal_c2705d52da36d17c3060ad1a76c4d7e8ec753a7f8e175098210e6a7f5f187729_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_237caf024e4206e81b3a10fada8df3d35d1f5d46f9dcba0c7f7227fdfc7fea47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237caf024e4206e81b3a10fada8df3d35d1f5d46f9dcba0c7f7227fdfc7fea47->enter($__internal_237caf024e4206e81b3a10fada8df3d35d1f5d46f9dcba0c7f7227fdfc7fea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e05d2261046299b3979a6279d84a2867c8cca7aa29c935aa4ac6625fe473bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e05d2261046299b3979a6279d84a2867c8cca7aa29c935aa4ac6625fe473bda->enter($__internal_4e05d2261046299b3979a6279d84a2867c8cca7aa29c935aa4ac6625fe473bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4e05d2261046299b3979a6279d84a2867c8cca7aa29c935aa4ac6625fe473bda->leave($__internal_4e05d2261046299b3979a6279d84a2867c8cca7aa29c935aa4ac6625fe473bda_prof);

        
        $__internal_237caf024e4206e81b3a10fada8df3d35d1f5d46f9dcba0c7f7227fdfc7fea47->leave($__internal_237caf024e4206e81b3a10fada8df3d35d1f5d46f9dcba0c7f7227fdfc7fea47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e19486eeb1a8225405bf7220c79a88dbc411a66d161fb308870614b91d7690ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19486eeb1a8225405bf7220c79a88dbc411a66d161fb308870614b91d7690ae->enter($__internal_e19486eeb1a8225405bf7220c79a88dbc411a66d161fb308870614b91d7690ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_499007d86ed5351e15b3ba0d259ffea55545f93a30f4ee60d7334c991d78e009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499007d86ed5351e15b3ba0d259ffea55545f93a30f4ee60d7334c991d78e009->enter($__internal_499007d86ed5351e15b3ba0d259ffea55545f93a30f4ee60d7334c991d78e009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_499007d86ed5351e15b3ba0d259ffea55545f93a30f4ee60d7334c991d78e009->leave($__internal_499007d86ed5351e15b3ba0d259ffea55545f93a30f4ee60d7334c991d78e009_prof);

        
        $__internal_e19486eeb1a8225405bf7220c79a88dbc411a66d161fb308870614b91d7690ae->leave($__internal_e19486eeb1a8225405bf7220c79a88dbc411a66d161fb308870614b91d7690ae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e34521d0bae1819ad26bc45bfb321e3b532714b47387e5da5c4fd8a4527ccb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34521d0bae1819ad26bc45bfb321e3b532714b47387e5da5c4fd8a4527ccb06->enter($__internal_e34521d0bae1819ad26bc45bfb321e3b532714b47387e5da5c4fd8a4527ccb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1cee9e4d04a490352b79107a591494c9c19079d9b2b8a9caf003c1b0097b3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cee9e4d04a490352b79107a591494c9c19079d9b2b8a9caf003c1b0097b3eb->enter($__internal_f1cee9e4d04a490352b79107a591494c9c19079d9b2b8a9caf003c1b0097b3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1cee9e4d04a490352b79107a591494c9c19079d9b2b8a9caf003c1b0097b3eb->leave($__internal_f1cee9e4d04a490352b79107a591494c9c19079d9b2b8a9caf003c1b0097b3eb_prof);

        
        $__internal_e34521d0bae1819ad26bc45bfb321e3b532714b47387e5da5c4fd8a4527ccb06->leave($__internal_e34521d0bae1819ad26bc45bfb321e3b532714b47387e5da5c4fd8a4527ccb06_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34baf55e606aa5495bd8bd4dc032a00ff7f044bb13a31480fcd5e2fdc8b473de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34baf55e606aa5495bd8bd4dc032a00ff7f044bb13a31480fcd5e2fdc8b473de->enter($__internal_34baf55e606aa5495bd8bd4dc032a00ff7f044bb13a31480fcd5e2fdc8b473de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c2149a713cfec7d7d0eb300812b91bc0eb3d4eb78ab8b7087fb52ebfa5ea0126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2149a713cfec7d7d0eb300812b91bc0eb3d4eb78ab8b7087fb52ebfa5ea0126->enter($__internal_c2149a713cfec7d7d0eb300812b91bc0eb3d4eb78ab8b7087fb52ebfa5ea0126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c2149a713cfec7d7d0eb300812b91bc0eb3d4eb78ab8b7087fb52ebfa5ea0126->leave($__internal_c2149a713cfec7d7d0eb300812b91bc0eb3d4eb78ab8b7087fb52ebfa5ea0126_prof);

        
        $__internal_34baf55e606aa5495bd8bd4dc032a00ff7f044bb13a31480fcd5e2fdc8b473de->leave($__internal_34baf55e606aa5495bd8bd4dc032a00ff7f044bb13a31480fcd5e2fdc8b473de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  96 => 9,  79 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
