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
        $__internal_d6a632f6aeb824b2f54d75bdd696aec95c141a94c53267c324818935d19d2adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a632f6aeb824b2f54d75bdd696aec95c141a94c53267c324818935d19d2adf->enter($__internal_d6a632f6aeb824b2f54d75bdd696aec95c141a94c53267c324818935d19d2adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e2556760df8d6c6709619c7021045cba87cdee4524da7c8c15e4e2508ece8bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2556760df8d6c6709619c7021045cba87cdee4524da7c8c15e4e2508ece8bc0->enter($__internal_e2556760df8d6c6709619c7021045cba87cdee4524da7c8c15e4e2508ece8bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d6a632f6aeb824b2f54d75bdd696aec95c141a94c53267c324818935d19d2adf->leave($__internal_d6a632f6aeb824b2f54d75bdd696aec95c141a94c53267c324818935d19d2adf_prof);

        
        $__internal_e2556760df8d6c6709619c7021045cba87cdee4524da7c8c15e4e2508ece8bc0->leave($__internal_e2556760df8d6c6709619c7021045cba87cdee4524da7c8c15e4e2508ece8bc0_prof);

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
