<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7d872e39280b01d7dc949f0caa13537b5f322e7a8883c69114ee9ee1c8b9e5b2 extends Twig_Template
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
        $__internal_677058e3636c31a98c73d5e715670442e41d827ecdbc7763c254c3efba9feab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677058e3636c31a98c73d5e715670442e41d827ecdbc7763c254c3efba9feab6->enter($__internal_677058e3636c31a98c73d5e715670442e41d827ecdbc7763c254c3efba9feab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a8fe63e00691c44b690731243225779064ce3655ab94326c85044cde3e3a006d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fe63e00691c44b690731243225779064ce3655ab94326c85044cde3e3a006d->enter($__internal_a8fe63e00691c44b690731243225779064ce3655ab94326c85044cde3e3a006d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_677058e3636c31a98c73d5e715670442e41d827ecdbc7763c254c3efba9feab6->leave($__internal_677058e3636c31a98c73d5e715670442e41d827ecdbc7763c254c3efba9feab6_prof);

        
        $__internal_a8fe63e00691c44b690731243225779064ce3655ab94326c85044cde3e3a006d->leave($__internal_a8fe63e00691c44b690731243225779064ce3655ab94326c85044cde3e3a006d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
