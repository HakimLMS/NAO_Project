<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_652df5913a0ef875e3e870f126c6ca1aa41bd1306d188391deb4c748e9d6d1dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7605c97d442b64758cf99ed904b7de5962405243b193ec4824aa98563e4a283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7605c97d442b64758cf99ed904b7de5962405243b193ec4824aa98563e4a283->enter($__internal_b7605c97d442b64758cf99ed904b7de5962405243b193ec4824aa98563e4a283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d45154ccca7da9b03d996fe9826ad4c2a792c435e22916bff70183165aa94fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45154ccca7da9b03d996fe9826ad4c2a792c435e22916bff70183165aa94fb2->enter($__internal_d45154ccca7da9b03d996fe9826ad4c2a792c435e22916bff70183165aa94fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b7605c97d442b64758cf99ed904b7de5962405243b193ec4824aa98563e4a283->leave($__internal_b7605c97d442b64758cf99ed904b7de5962405243b193ec4824aa98563e4a283_prof);

        
        $__internal_d45154ccca7da9b03d996fe9826ad4c2a792c435e22916bff70183165aa94fb2->leave($__internal_d45154ccca7da9b03d996fe9826ad4c2a792c435e22916bff70183165aa94fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
