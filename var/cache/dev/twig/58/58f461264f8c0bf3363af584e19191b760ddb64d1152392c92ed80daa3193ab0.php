<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_282989014d51c432269a37484b0f8e2316f4b5df1edf1e3d7410e312b744513d extends Twig_Template
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
        $__internal_41ff4f867f104478ff148d2f7e6ad7839dff78ed481330df64db1b7e40c5ac51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ff4f867f104478ff148d2f7e6ad7839dff78ed481330df64db1b7e40c5ac51->enter($__internal_41ff4f867f104478ff148d2f7e6ad7839dff78ed481330df64db1b7e40c5ac51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6a8bf4af2059d46c7def37217417e67970dfd3a85ba8cbfc19a1051beceb43f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8bf4af2059d46c7def37217417e67970dfd3a85ba8cbfc19a1051beceb43f8->enter($__internal_6a8bf4af2059d46c7def37217417e67970dfd3a85ba8cbfc19a1051beceb43f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_41ff4f867f104478ff148d2f7e6ad7839dff78ed481330df64db1b7e40c5ac51->leave($__internal_41ff4f867f104478ff148d2f7e6ad7839dff78ed481330df64db1b7e40c5ac51_prof);

        
        $__internal_6a8bf4af2059d46c7def37217417e67970dfd3a85ba8cbfc19a1051beceb43f8->leave($__internal_6a8bf4af2059d46c7def37217417e67970dfd3a85ba8cbfc19a1051beceb43f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
