<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4b04693d21d1d7c94ccef85af49161a537f117327e5fcbb56ad1585693af0178 extends Twig_Template
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
        $__internal_251c0a9cc63cd0d8a158c2a3e130d96a125844fa67c8154acfc978f4595dd566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251c0a9cc63cd0d8a158c2a3e130d96a125844fa67c8154acfc978f4595dd566->enter($__internal_251c0a9cc63cd0d8a158c2a3e130d96a125844fa67c8154acfc978f4595dd566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_28ddd8de25e3ea1b688a9a397d542093be2fc023a59db1bce0050520b49e6067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ddd8de25e3ea1b688a9a397d542093be2fc023a59db1bce0050520b49e6067->enter($__internal_28ddd8de25e3ea1b688a9a397d542093be2fc023a59db1bce0050520b49e6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_251c0a9cc63cd0d8a158c2a3e130d96a125844fa67c8154acfc978f4595dd566->leave($__internal_251c0a9cc63cd0d8a158c2a3e130d96a125844fa67c8154acfc978f4595dd566_prof);

        
        $__internal_28ddd8de25e3ea1b688a9a397d542093be2fc023a59db1bce0050520b49e6067->leave($__internal_28ddd8de25e3ea1b688a9a397d542093be2fc023a59db1bce0050520b49e6067_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
