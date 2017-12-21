<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8650b72a1ec7ea62a5949e37ef016045d418089dfa6f6d7d5477fe967774573a extends Twig_Template
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
        $__internal_3fc2e9f24d619208d5692400a3274b8a85144026a441b5809f9161d9b97fe182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc2e9f24d619208d5692400a3274b8a85144026a441b5809f9161d9b97fe182->enter($__internal_3fc2e9f24d619208d5692400a3274b8a85144026a441b5809f9161d9b97fe182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_0b47b674a56ea8627b05c35642d1f2a284b1fd2b1c20f9ece9fa226e3f2a3e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b47b674a56ea8627b05c35642d1f2a284b1fd2b1c20f9ece9fa226e3f2a3e75->enter($__internal_0b47b674a56ea8627b05c35642d1f2a284b1fd2b1c20f9ece9fa226e3f2a3e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3fc2e9f24d619208d5692400a3274b8a85144026a441b5809f9161d9b97fe182->leave($__internal_3fc2e9f24d619208d5692400a3274b8a85144026a441b5809f9161d9b97fe182_prof);

        
        $__internal_0b47b674a56ea8627b05c35642d1f2a284b1fd2b1c20f9ece9fa226e3f2a3e75->leave($__internal_0b47b674a56ea8627b05c35642d1f2a284b1fd2b1c20f9ece9fa226e3f2a3e75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
