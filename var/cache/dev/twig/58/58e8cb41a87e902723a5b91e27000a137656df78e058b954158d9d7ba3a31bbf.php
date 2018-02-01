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
        $__internal_5dfc40e981d99924d9093876358e5a439efac33f094a7bcb79ec8c7d25a6abb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfc40e981d99924d9093876358e5a439efac33f094a7bcb79ec8c7d25a6abb9->enter($__internal_5dfc40e981d99924d9093876358e5a439efac33f094a7bcb79ec8c7d25a6abb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9b41b6e155f1a0e04a087ed53242997d255068de254819e49883e32e1f9eb732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b41b6e155f1a0e04a087ed53242997d255068de254819e49883e32e1f9eb732->enter($__internal_9b41b6e155f1a0e04a087ed53242997d255068de254819e49883e32e1f9eb732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5dfc40e981d99924d9093876358e5a439efac33f094a7bcb79ec8c7d25a6abb9->leave($__internal_5dfc40e981d99924d9093876358e5a439efac33f094a7bcb79ec8c7d25a6abb9_prof);

        
        $__internal_9b41b6e155f1a0e04a087ed53242997d255068de254819e49883e32e1f9eb732->leave($__internal_9b41b6e155f1a0e04a087ed53242997d255068de254819e49883e32e1f9eb732_prof);

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
", "@Framework/Form/form_enctype.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
