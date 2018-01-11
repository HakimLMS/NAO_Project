<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f55db766d1463b2556b290d0956361c7098c61b5f4462088ec68d2da5182c513 extends Twig_Template
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
        $__internal_b94cd752045f814ff1720a472500dd4ca5cca9d236ab1da753205c2ebee02e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94cd752045f814ff1720a472500dd4ca5cca9d236ab1da753205c2ebee02e4b->enter($__internal_b94cd752045f814ff1720a472500dd4ca5cca9d236ab1da753205c2ebee02e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_21a232bc5e7333d17ed5f548289dc670a1a1c937631a41fdd1afb7d06d7b4ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a232bc5e7333d17ed5f548289dc670a1a1c937631a41fdd1afb7d06d7b4ffa->enter($__internal_21a232bc5e7333d17ed5f548289dc670a1a1c937631a41fdd1afb7d06d7b4ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b94cd752045f814ff1720a472500dd4ca5cca9d236ab1da753205c2ebee02e4b->leave($__internal_b94cd752045f814ff1720a472500dd4ca5cca9d236ab1da753205c2ebee02e4b_prof);

        
        $__internal_21a232bc5e7333d17ed5f548289dc670a1a1c937631a41fdd1afb7d06d7b4ffa->leave($__internal_21a232bc5e7333d17ed5f548289dc670a1a1c937631a41fdd1afb7d06d7b4ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
