<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c4f5e8aa8324904649d8a9824076283ed7b42a971f495831f1145adfe5303310 extends Twig_Template
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
        $__internal_33821284dc470ccf31494986413b3ce8796f2e3e455a3a0fb13c52b1fd02a1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33821284dc470ccf31494986413b3ce8796f2e3e455a3a0fb13c52b1fd02a1f0->enter($__internal_33821284dc470ccf31494986413b3ce8796f2e3e455a3a0fb13c52b1fd02a1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a8f24bc8139db5de3b5ccffb160b9f995a1d4999ea6fde6dda56cb23f8a65870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f24bc8139db5de3b5ccffb160b9f995a1d4999ea6fde6dda56cb23f8a65870->enter($__internal_a8f24bc8139db5de3b5ccffb160b9f995a1d4999ea6fde6dda56cb23f8a65870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_33821284dc470ccf31494986413b3ce8796f2e3e455a3a0fb13c52b1fd02a1f0->leave($__internal_33821284dc470ccf31494986413b3ce8796f2e3e455a3a0fb13c52b1fd02a1f0_prof);

        
        $__internal_a8f24bc8139db5de3b5ccffb160b9f995a1d4999ea6fde6dda56cb23f8a65870->leave($__internal_a8f24bc8139db5de3b5ccffb160b9f995a1d4999ea6fde6dda56cb23f8a65870_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
