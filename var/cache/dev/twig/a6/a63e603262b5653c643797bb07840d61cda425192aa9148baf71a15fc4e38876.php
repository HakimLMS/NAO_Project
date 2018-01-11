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
        $__internal_c7070c0a42de69ff960904a8eebb70a32571b84cbd9772e525def9a15354fd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7070c0a42de69ff960904a8eebb70a32571b84cbd9772e525def9a15354fd5b->enter($__internal_c7070c0a42de69ff960904a8eebb70a32571b84cbd9772e525def9a15354fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_7c45170679f86cd46f50e000c39188ad60219e2177ae9da150d21bcf2948329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c45170679f86cd46f50e000c39188ad60219e2177ae9da150d21bcf2948329d->enter($__internal_7c45170679f86cd46f50e000c39188ad60219e2177ae9da150d21bcf2948329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c7070c0a42de69ff960904a8eebb70a32571b84cbd9772e525def9a15354fd5b->leave($__internal_c7070c0a42de69ff960904a8eebb70a32571b84cbd9772e525def9a15354fd5b_prof);

        
        $__internal_7c45170679f86cd46f50e000c39188ad60219e2177ae9da150d21bcf2948329d->leave($__internal_7c45170679f86cd46f50e000c39188ad60219e2177ae9da150d21bcf2948329d_prof);

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
