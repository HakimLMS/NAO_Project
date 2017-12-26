<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_db91d81ab9081c4429041a833ecd86daf6b1e001efe8fe51148218b4ff202974 extends Twig_Template
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
        $__internal_22204e021232738f8c5cf75bdb96b0d080fd5a8c276386b9ce8832f523b3be5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22204e021232738f8c5cf75bdb96b0d080fd5a8c276386b9ce8832f523b3be5d->enter($__internal_22204e021232738f8c5cf75bdb96b0d080fd5a8c276386b9ce8832f523b3be5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e8949da22c9877cc3158badd8204419f5ea64aa6c8ec9a068a4a2f9ecd5e209c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8949da22c9877cc3158badd8204419f5ea64aa6c8ec9a068a4a2f9ecd5e209c->enter($__internal_e8949da22c9877cc3158badd8204419f5ea64aa6c8ec9a068a4a2f9ecd5e209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_22204e021232738f8c5cf75bdb96b0d080fd5a8c276386b9ce8832f523b3be5d->leave($__internal_22204e021232738f8c5cf75bdb96b0d080fd5a8c276386b9ce8832f523b3be5d_prof);

        
        $__internal_e8949da22c9877cc3158badd8204419f5ea64aa6c8ec9a068a4a2f9ecd5e209c->leave($__internal_e8949da22c9877cc3158badd8204419f5ea64aa6c8ec9a068a4a2f9ecd5e209c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
