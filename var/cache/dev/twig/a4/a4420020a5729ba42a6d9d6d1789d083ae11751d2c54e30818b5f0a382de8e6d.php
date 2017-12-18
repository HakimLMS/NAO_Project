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
        $__internal_a9b0bda67b1045542dfe74ac0657276a4d007ff5edc73eab8c22849c924f4bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b0bda67b1045542dfe74ac0657276a4d007ff5edc73eab8c22849c924f4bd8->enter($__internal_a9b0bda67b1045542dfe74ac0657276a4d007ff5edc73eab8c22849c924f4bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d1320f0b9dbd8947758eeedbe9774b8eaef0aead3697b00d02539cc5dbe6dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1320f0b9dbd8947758eeedbe9774b8eaef0aead3697b00d02539cc5dbe6dfe->enter($__internal_7d1320f0b9dbd8947758eeedbe9774b8eaef0aead3697b00d02539cc5dbe6dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
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
        
        $__internal_a9b0bda67b1045542dfe74ac0657276a4d007ff5edc73eab8c22849c924f4bd8->leave($__internal_a9b0bda67b1045542dfe74ac0657276a4d007ff5edc73eab8c22849c924f4bd8_prof);

        
        $__internal_7d1320f0b9dbd8947758eeedbe9774b8eaef0aead3697b00d02539cc5dbe6dfe->leave($__internal_7d1320f0b9dbd8947758eeedbe9774b8eaef0aead3697b00d02539cc5dbe6dfe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2a504b77d1b65f87d00f50c69ee08b577ea769a4c271cc66ce1ae48e3a8bdcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a504b77d1b65f87d00f50c69ee08b577ea769a4c271cc66ce1ae48e3a8bdcb->enter($__internal_d2a504b77d1b65f87d00f50c69ee08b577ea769a4c271cc66ce1ae48e3a8bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f031cf85289636c18863b0642277a5f64257b2976aa07d59333f064c5d0f19ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f031cf85289636c18863b0642277a5f64257b2976aa07d59333f064c5d0f19ea->enter($__internal_f031cf85289636c18863b0642277a5f64257b2976aa07d59333f064c5d0f19ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f031cf85289636c18863b0642277a5f64257b2976aa07d59333f064c5d0f19ea->leave($__internal_f031cf85289636c18863b0642277a5f64257b2976aa07d59333f064c5d0f19ea_prof);

        
        $__internal_d2a504b77d1b65f87d00f50c69ee08b577ea769a4c271cc66ce1ae48e3a8bdcb->leave($__internal_d2a504b77d1b65f87d00f50c69ee08b577ea769a4c271cc66ce1ae48e3a8bdcb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_765706d98e3b23b1f76c4c24568000acdc5a1dae56e239c42bd1016d0c2b3c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765706d98e3b23b1f76c4c24568000acdc5a1dae56e239c42bd1016d0c2b3c4d->enter($__internal_765706d98e3b23b1f76c4c24568000acdc5a1dae56e239c42bd1016d0c2b3c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5b440c2d7d99fc4c07591551fff180138be124f17cd6393934a3dc3ab0f61f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b440c2d7d99fc4c07591551fff180138be124f17cd6393934a3dc3ab0f61f1->enter($__internal_e5b440c2d7d99fc4c07591551fff180138be124f17cd6393934a3dc3ab0f61f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5b440c2d7d99fc4c07591551fff180138be124f17cd6393934a3dc3ab0f61f1->leave($__internal_e5b440c2d7d99fc4c07591551fff180138be124f17cd6393934a3dc3ab0f61f1_prof);

        
        $__internal_765706d98e3b23b1f76c4c24568000acdc5a1dae56e239c42bd1016d0c2b3c4d->leave($__internal_765706d98e3b23b1f76c4c24568000acdc5a1dae56e239c42bd1016d0c2b3c4d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d965a88f19e8844fda7f0cc53fa8c47c0facb326f8881d72d1df1ccb387c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d965a88f19e8844fda7f0cc53fa8c47c0facb326f8881d72d1df1ccb387c04->enter($__internal_65d965a88f19e8844fda7f0cc53fa8c47c0facb326f8881d72d1df1ccb387c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fd877c39327179c4945ef30532f8d72796f5cea0ba4abb70ef37996fdef8e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd877c39327179c4945ef30532f8d72796f5cea0ba4abb70ef37996fdef8e1e->enter($__internal_4fd877c39327179c4945ef30532f8d72796f5cea0ba4abb70ef37996fdef8e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4fd877c39327179c4945ef30532f8d72796f5cea0ba4abb70ef37996fdef8e1e->leave($__internal_4fd877c39327179c4945ef30532f8d72796f5cea0ba4abb70ef37996fdef8e1e_prof);

        
        $__internal_65d965a88f19e8844fda7f0cc53fa8c47c0facb326f8881d72d1df1ccb387c04->leave($__internal_65d965a88f19e8844fda7f0cc53fa8c47c0facb326f8881d72d1df1ccb387c04_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dfa111efecd382345c96db70678ccdc2c0faa4779a895694228712f8ea105bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfa111efecd382345c96db70678ccdc2c0faa4779a895694228712f8ea105bc->enter($__internal_7dfa111efecd382345c96db70678ccdc2c0faa4779a895694228712f8ea105bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00ac789a89663cebc2364bbf5ce326d35b19994b1d6e363bc22eaf269d26c489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ac789a89663cebc2364bbf5ce326d35b19994b1d6e363bc22eaf269d26c489->enter($__internal_00ac789a89663cebc2364bbf5ce326d35b19994b1d6e363bc22eaf269d26c489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_00ac789a89663cebc2364bbf5ce326d35b19994b1d6e363bc22eaf269d26c489->leave($__internal_00ac789a89663cebc2364bbf5ce326d35b19994b1d6e363bc22eaf269d26c489_prof);

        
        $__internal_7dfa111efecd382345c96db70678ccdc2c0faa4779a895694228712f8ea105bc->leave($__internal_7dfa111efecd382345c96db70678ccdc2c0faa4779a895694228712f8ea105bc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
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
