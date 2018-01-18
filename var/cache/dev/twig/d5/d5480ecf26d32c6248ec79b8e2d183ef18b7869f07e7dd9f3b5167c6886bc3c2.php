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
        $__internal_1badc842b916ae38e8e5315db0b236337e6e310d693af58a8ef14e698ddb8986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1badc842b916ae38e8e5315db0b236337e6e310d693af58a8ef14e698ddb8986->enter($__internal_1badc842b916ae38e8e5315db0b236337e6e310d693af58a8ef14e698ddb8986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a09409d10418d47170927b66746bb4aed7b1f66f0b5e23eab0a19dd07c2c70ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09409d10418d47170927b66746bb4aed7b1f66f0b5e23eab0a19dd07c2c70ce->enter($__internal_a09409d10418d47170927b66746bb4aed7b1f66f0b5e23eab0a19dd07c2c70ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1badc842b916ae38e8e5315db0b236337e6e310d693af58a8ef14e698ddb8986->leave($__internal_1badc842b916ae38e8e5315db0b236337e6e310d693af58a8ef14e698ddb8986_prof);

        
        $__internal_a09409d10418d47170927b66746bb4aed7b1f66f0b5e23eab0a19dd07c2c70ce->leave($__internal_a09409d10418d47170927b66746bb4aed7b1f66f0b5e23eab0a19dd07c2c70ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_093b20770ecd14b717354e522562fb320b13a938daf0fdbba9384ad466243504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093b20770ecd14b717354e522562fb320b13a938daf0fdbba9384ad466243504->enter($__internal_093b20770ecd14b717354e522562fb320b13a938daf0fdbba9384ad466243504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82b30aeeeceeecfc7876c09cc6b0bb2469993069d8b355abb1e5d01bf6f4d994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b30aeeeceeecfc7876c09cc6b0bb2469993069d8b355abb1e5d01bf6f4d994->enter($__internal_82b30aeeeceeecfc7876c09cc6b0bb2469993069d8b355abb1e5d01bf6f4d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_82b30aeeeceeecfc7876c09cc6b0bb2469993069d8b355abb1e5d01bf6f4d994->leave($__internal_82b30aeeeceeecfc7876c09cc6b0bb2469993069d8b355abb1e5d01bf6f4d994_prof);

        
        $__internal_093b20770ecd14b717354e522562fb320b13a938daf0fdbba9384ad466243504->leave($__internal_093b20770ecd14b717354e522562fb320b13a938daf0fdbba9384ad466243504_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19f09b1051f1e210100bf67929016508692c2508c7f8551c4f5d966afe248e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f09b1051f1e210100bf67929016508692c2508c7f8551c4f5d966afe248e70->enter($__internal_19f09b1051f1e210100bf67929016508692c2508c7f8551c4f5d966afe248e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac967263f4fb3a95399b1daaabf80b42ee6fcd74c98428219a1121e1320cc57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac967263f4fb3a95399b1daaabf80b42ee6fcd74c98428219a1121e1320cc57b->enter($__internal_ac967263f4fb3a95399b1daaabf80b42ee6fcd74c98428219a1121e1320cc57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac967263f4fb3a95399b1daaabf80b42ee6fcd74c98428219a1121e1320cc57b->leave($__internal_ac967263f4fb3a95399b1daaabf80b42ee6fcd74c98428219a1121e1320cc57b_prof);

        
        $__internal_19f09b1051f1e210100bf67929016508692c2508c7f8551c4f5d966afe248e70->leave($__internal_19f09b1051f1e210100bf67929016508692c2508c7f8551c4f5d966afe248e70_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e816396e53a5e109b3c3ce312243b102c1b1ffa8601da53433bc9d1f44d6556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e816396e53a5e109b3c3ce312243b102c1b1ffa8601da53433bc9d1f44d6556->enter($__internal_4e816396e53a5e109b3c3ce312243b102c1b1ffa8601da53433bc9d1f44d6556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d2c86fa65c1e77a4abb70f0961c556633f09070ffd433bfd45d6344299e4f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2c86fa65c1e77a4abb70f0961c556633f09070ffd433bfd45d6344299e4f95->enter($__internal_4d2c86fa65c1e77a4abb70f0961c556633f09070ffd433bfd45d6344299e4f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d2c86fa65c1e77a4abb70f0961c556633f09070ffd433bfd45d6344299e4f95->leave($__internal_4d2c86fa65c1e77a4abb70f0961c556633f09070ffd433bfd45d6344299e4f95_prof);

        
        $__internal_4e816396e53a5e109b3c3ce312243b102c1b1ffa8601da53433bc9d1f44d6556->leave($__internal_4e816396e53a5e109b3c3ce312243b102c1b1ffa8601da53433bc9d1f44d6556_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71f4543016d05f09729debef2e06dad7798665b5ead6723a4e467f4aa12f41fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f4543016d05f09729debef2e06dad7798665b5ead6723a4e467f4aa12f41fb->enter($__internal_71f4543016d05f09729debef2e06dad7798665b5ead6723a4e467f4aa12f41fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da31c5e18222605c4119d5aadc3f0e40ec36bc648ab82ea5ae6046747ca8d3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da31c5e18222605c4119d5aadc3f0e40ec36bc648ab82ea5ae6046747ca8d3b4->enter($__internal_da31c5e18222605c4119d5aadc3f0e40ec36bc648ab82ea5ae6046747ca8d3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da31c5e18222605c4119d5aadc3f0e40ec36bc648ab82ea5ae6046747ca8d3b4->leave($__internal_da31c5e18222605c4119d5aadc3f0e40ec36bc648ab82ea5ae6046747ca8d3b4_prof);

        
        $__internal_71f4543016d05f09729debef2e06dad7798665b5ead6723a4e467f4aa12f41fb->leave($__internal_71f4543016d05f09729debef2e06dad7798665b5ead6723a4e467f4aa12f41fb_prof);

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
