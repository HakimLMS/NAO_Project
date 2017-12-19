<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ef9d984b538bd3d84bfaeb12c283505a90dbfee1eab9b0aee8dabeb4d3a327a extends Twig_Template
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
        $__internal_ca03d50585ae34adb0c8aad518fcbb3bcb14f55721d7cc471f9461eeb1484ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca03d50585ae34adb0c8aad518fcbb3bcb14f55721d7cc471f9461eeb1484ee8->enter($__internal_ca03d50585ae34adb0c8aad518fcbb3bcb14f55721d7cc471f9461eeb1484ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8243689fd0f85d1f2a7337cdec4bf0241749760df1de0cf492bb6232841db36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8243689fd0f85d1f2a7337cdec4bf0241749760df1de0cf492bb6232841db36a->enter($__internal_8243689fd0f85d1f2a7337cdec4bf0241749760df1de0cf492bb6232841db36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca03d50585ae34adb0c8aad518fcbb3bcb14f55721d7cc471f9461eeb1484ee8->leave($__internal_ca03d50585ae34adb0c8aad518fcbb3bcb14f55721d7cc471f9461eeb1484ee8_prof);

        
        $__internal_8243689fd0f85d1f2a7337cdec4bf0241749760df1de0cf492bb6232841db36a->leave($__internal_8243689fd0f85d1f2a7337cdec4bf0241749760df1de0cf492bb6232841db36a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
