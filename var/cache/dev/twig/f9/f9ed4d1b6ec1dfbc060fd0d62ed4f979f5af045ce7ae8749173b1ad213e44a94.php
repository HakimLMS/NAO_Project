<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_16fea8c7a10e961a6bdf5042d9a6dfb9a9f6f4296d80ad37c451ab7809277217 extends Twig_Template
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
        $__internal_3e6b30567349da8eba8f836a1b6877ea155dd7ff8edf60e235526d6ed1c2010c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6b30567349da8eba8f836a1b6877ea155dd7ff8edf60e235526d6ed1c2010c->enter($__internal_3e6b30567349da8eba8f836a1b6877ea155dd7ff8edf60e235526d6ed1c2010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_3d58c4c518d6e507b83b2f7346629af84e5bd03cabca522c450a29e9fced11b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d58c4c518d6e507b83b2f7346629af84e5bd03cabca522c450a29e9fced11b1->enter($__internal_3d58c4c518d6e507b83b2f7346629af84e5bd03cabca522c450a29e9fced11b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_3e6b30567349da8eba8f836a1b6877ea155dd7ff8edf60e235526d6ed1c2010c->leave($__internal_3e6b30567349da8eba8f836a1b6877ea155dd7ff8edf60e235526d6ed1c2010c_prof);

        
        $__internal_3d58c4c518d6e507b83b2f7346629af84e5bd03cabca522c450a29e9fced11b1->leave($__internal_3d58c4c518d6e507b83b2f7346629af84e5bd03cabca522c450a29e9fced11b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
