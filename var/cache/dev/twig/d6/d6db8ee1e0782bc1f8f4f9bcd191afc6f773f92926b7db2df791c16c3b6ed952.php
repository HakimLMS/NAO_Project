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
        $__internal_bc1edbc04b7483cfdfa2979dc327b1e43530d5f61699b4081182ac4de54dfcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1edbc04b7483cfdfa2979dc327b1e43530d5f61699b4081182ac4de54dfcf3->enter($__internal_bc1edbc04b7483cfdfa2979dc327b1e43530d5f61699b4081182ac4de54dfcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ff8776ce037b7fce974deee60abe9d0f4860d0df5ecd131e45c9f83bdb9e6b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8776ce037b7fce974deee60abe9d0f4860d0df5ecd131e45c9f83bdb9e6b49->enter($__internal_ff8776ce037b7fce974deee60abe9d0f4860d0df5ecd131e45c9f83bdb9e6b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_bc1edbc04b7483cfdfa2979dc327b1e43530d5f61699b4081182ac4de54dfcf3->leave($__internal_bc1edbc04b7483cfdfa2979dc327b1e43530d5f61699b4081182ac4de54dfcf3_prof);

        
        $__internal_ff8776ce037b7fce974deee60abe9d0f4860d0df5ecd131e45c9f83bdb9e6b49->leave($__internal_ff8776ce037b7fce974deee60abe9d0f4860d0df5ecd131e45c9f83bdb9e6b49_prof);

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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
