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
        $__internal_1a519a3c3737baf19f7d6f487d48b01addf8642e2c91704be72e46ed67311a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a519a3c3737baf19f7d6f487d48b01addf8642e2c91704be72e46ed67311a8d->enter($__internal_1a519a3c3737baf19f7d6f487d48b01addf8642e2c91704be72e46ed67311a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_009cad24fb30cf0eddea6150b769105e668dcc0f57cb7b903fb95eac689fe3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009cad24fb30cf0eddea6150b769105e668dcc0f57cb7b903fb95eac689fe3b3->enter($__internal_009cad24fb30cf0eddea6150b769105e668dcc0f57cb7b903fb95eac689fe3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1a519a3c3737baf19f7d6f487d48b01addf8642e2c91704be72e46ed67311a8d->leave($__internal_1a519a3c3737baf19f7d6f487d48b01addf8642e2c91704be72e46ed67311a8d_prof);

        
        $__internal_009cad24fb30cf0eddea6150b769105e668dcc0f57cb7b903fb95eac689fe3b3->leave($__internal_009cad24fb30cf0eddea6150b769105e668dcc0f57cb7b903fb95eac689fe3b3_prof);

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
