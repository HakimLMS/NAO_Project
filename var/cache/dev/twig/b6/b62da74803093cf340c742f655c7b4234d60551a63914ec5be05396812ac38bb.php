<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d1fe3ee444453d5b7d6cf990657935fe67fed9ee07b2a5a51bfa6cba315f1a64 extends Twig_Template
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
        $__internal_e34ad7c1360d3935b64e49d0ef4facf4e3e71ef8bcc9c8931f4dc8d0e3bc07bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34ad7c1360d3935b64e49d0ef4facf4e3e71ef8bcc9c8931f4dc8d0e3bc07bb->enter($__internal_e34ad7c1360d3935b64e49d0ef4facf4e3e71ef8bcc9c8931f4dc8d0e3bc07bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_1ac3d2033dce6cfd31881a350a0562c30a672c3af0672d43890d9ef9e4d2722b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac3d2033dce6cfd31881a350a0562c30a672c3af0672d43890d9ef9e4d2722b->enter($__internal_1ac3d2033dce6cfd31881a350a0562c30a672c3af0672d43890d9ef9e4d2722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_e34ad7c1360d3935b64e49d0ef4facf4e3e71ef8bcc9c8931f4dc8d0e3bc07bb->leave($__internal_e34ad7c1360d3935b64e49d0ef4facf4e3e71ef8bcc9c8931f4dc8d0e3bc07bb_prof);

        
        $__internal_1ac3d2033dce6cfd31881a350a0562c30a672c3af0672d43890d9ef9e4d2722b->leave($__internal_1ac3d2033dce6cfd31881a350a0562c30a672c3af0672d43890d9ef9e4d2722b_prof);

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
