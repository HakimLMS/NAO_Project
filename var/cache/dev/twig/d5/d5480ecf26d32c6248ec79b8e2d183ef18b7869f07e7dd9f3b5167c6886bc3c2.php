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
        $__internal_c9324d60644dfb6cbe89a1e74898f484d01db0dfb68dea66bf0260e5a4d35334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9324d60644dfb6cbe89a1e74898f484d01db0dfb68dea66bf0260e5a4d35334->enter($__internal_c9324d60644dfb6cbe89a1e74898f484d01db0dfb68dea66bf0260e5a4d35334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_087eb87b3e2168680f279c8fecac834980b02a7853a64f5b19085527e1e9e365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087eb87b3e2168680f279c8fecac834980b02a7853a64f5b19085527e1e9e365->enter($__internal_087eb87b3e2168680f279c8fecac834980b02a7853a64f5b19085527e1e9e365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c9324d60644dfb6cbe89a1e74898f484d01db0dfb68dea66bf0260e5a4d35334->leave($__internal_c9324d60644dfb6cbe89a1e74898f484d01db0dfb68dea66bf0260e5a4d35334_prof);

        
        $__internal_087eb87b3e2168680f279c8fecac834980b02a7853a64f5b19085527e1e9e365->leave($__internal_087eb87b3e2168680f279c8fecac834980b02a7853a64f5b19085527e1e9e365_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ec330dd9668ab7c3dd704fdd5b56553f2a7ccb04829cf2d1de5fbecc85da970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec330dd9668ab7c3dd704fdd5b56553f2a7ccb04829cf2d1de5fbecc85da970->enter($__internal_0ec330dd9668ab7c3dd704fdd5b56553f2a7ccb04829cf2d1de5fbecc85da970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62e93aa2e9ab04f7f10ca669cc1af3804680e0b00fe06e1d30e59f331ba07e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e93aa2e9ab04f7f10ca669cc1af3804680e0b00fe06e1d30e59f331ba07e98->enter($__internal_62e93aa2e9ab04f7f10ca669cc1af3804680e0b00fe06e1d30e59f331ba07e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_62e93aa2e9ab04f7f10ca669cc1af3804680e0b00fe06e1d30e59f331ba07e98->leave($__internal_62e93aa2e9ab04f7f10ca669cc1af3804680e0b00fe06e1d30e59f331ba07e98_prof);

        
        $__internal_0ec330dd9668ab7c3dd704fdd5b56553f2a7ccb04829cf2d1de5fbecc85da970->leave($__internal_0ec330dd9668ab7c3dd704fdd5b56553f2a7ccb04829cf2d1de5fbecc85da970_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66b427e870313c61c1066b8537c47e4175794f1e12acae7508d646f510baed96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b427e870313c61c1066b8537c47e4175794f1e12acae7508d646f510baed96->enter($__internal_66b427e870313c61c1066b8537c47e4175794f1e12acae7508d646f510baed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c85b897f5c54a02d8cff70f2eced8cc202ba3a55a1f0a6dc88f793c5c624c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c85b897f5c54a02d8cff70f2eced8cc202ba3a55a1f0a6dc88f793c5c624c1b->enter($__internal_7c85b897f5c54a02d8cff70f2eced8cc202ba3a55a1f0a6dc88f793c5c624c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c85b897f5c54a02d8cff70f2eced8cc202ba3a55a1f0a6dc88f793c5c624c1b->leave($__internal_7c85b897f5c54a02d8cff70f2eced8cc202ba3a55a1f0a6dc88f793c5c624c1b_prof);

        
        $__internal_66b427e870313c61c1066b8537c47e4175794f1e12acae7508d646f510baed96->leave($__internal_66b427e870313c61c1066b8537c47e4175794f1e12acae7508d646f510baed96_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f637304fdbbd5f5aabaa88fef191e0597f57237dda072a10aa600de07274bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f637304fdbbd5f5aabaa88fef191e0597f57237dda072a10aa600de07274bb->enter($__internal_c6f637304fdbbd5f5aabaa88fef191e0597f57237dda072a10aa600de07274bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77f96c46389b41041e521a3d5af72c8bdb4ef680e398b78746464ae3a662af08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f96c46389b41041e521a3d5af72c8bdb4ef680e398b78746464ae3a662af08->enter($__internal_77f96c46389b41041e521a3d5af72c8bdb4ef680e398b78746464ae3a662af08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77f96c46389b41041e521a3d5af72c8bdb4ef680e398b78746464ae3a662af08->leave($__internal_77f96c46389b41041e521a3d5af72c8bdb4ef680e398b78746464ae3a662af08_prof);

        
        $__internal_c6f637304fdbbd5f5aabaa88fef191e0597f57237dda072a10aa600de07274bb->leave($__internal_c6f637304fdbbd5f5aabaa88fef191e0597f57237dda072a10aa600de07274bb_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_185dfea87762a32cba7b8214942df94ba4151ce1720d13cfcd3d3d137c8b98a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185dfea87762a32cba7b8214942df94ba4151ce1720d13cfcd3d3d137c8b98a3->enter($__internal_185dfea87762a32cba7b8214942df94ba4151ce1720d13cfcd3d3d137c8b98a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19b8d8c09a4c8103f2edf0479a2193bc6297ed327993d191b7a7e72fe5f9857d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b8d8c09a4c8103f2edf0479a2193bc6297ed327993d191b7a7e72fe5f9857d->enter($__internal_19b8d8c09a4c8103f2edf0479a2193bc6297ed327993d191b7a7e72fe5f9857d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19b8d8c09a4c8103f2edf0479a2193bc6297ed327993d191b7a7e72fe5f9857d->leave($__internal_19b8d8c09a4c8103f2edf0479a2193bc6297ed327993d191b7a7e72fe5f9857d_prof);

        
        $__internal_185dfea87762a32cba7b8214942df94ba4151ce1720d13cfcd3d3d137c8b98a3->leave($__internal_185dfea87762a32cba7b8214942df94ba4151ce1720d13cfcd3d3d137c8b98a3_prof);

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
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
