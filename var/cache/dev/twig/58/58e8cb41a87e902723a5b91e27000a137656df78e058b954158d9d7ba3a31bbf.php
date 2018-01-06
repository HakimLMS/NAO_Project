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
        $__internal_be712161048ad7d95efcf435d11751c201e56ee518e80ac60c93be761a10a210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be712161048ad7d95efcf435d11751c201e56ee518e80ac60c93be761a10a210->enter($__internal_be712161048ad7d95efcf435d11751c201e56ee518e80ac60c93be761a10a210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a016c8da0f6c6bb3ce8503a16e5d389c4707445613fed9c1216e462f5cb41f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a016c8da0f6c6bb3ce8503a16e5d389c4707445613fed9c1216e462f5cb41f67->enter($__internal_a016c8da0f6c6bb3ce8503a16e5d389c4707445613fed9c1216e462f5cb41f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_be712161048ad7d95efcf435d11751c201e56ee518e80ac60c93be761a10a210->leave($__internal_be712161048ad7d95efcf435d11751c201e56ee518e80ac60c93be761a10a210_prof);

        
        $__internal_a016c8da0f6c6bb3ce8503a16e5d389c4707445613fed9c1216e462f5cb41f67->leave($__internal_a016c8da0f6c6bb3ce8503a16e5d389c4707445613fed9c1216e462f5cb41f67_prof);

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
