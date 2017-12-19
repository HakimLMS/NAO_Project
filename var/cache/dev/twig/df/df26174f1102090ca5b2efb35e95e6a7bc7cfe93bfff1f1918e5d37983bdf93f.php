<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_387d620f790e93f8f352e880ceaaca8558df6b21f00dc4e2cfeb1883acbd56c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387d620f790e93f8f352e880ceaaca8558df6b21f00dc4e2cfeb1883acbd56c8->enter($__internal_387d620f790e93f8f352e880ceaaca8558df6b21f00dc4e2cfeb1883acbd56c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_14e7ce4a74c26241e38335ed39d656bab9ab3616278a7a5eb997777e9fe5d363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e7ce4a74c26241e38335ed39d656bab9ab3616278a7a5eb997777e9fe5d363->enter($__internal_14e7ce4a74c26241e38335ed39d656bab9ab3616278a7a5eb997777e9fe5d363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_387d620f790e93f8f352e880ceaaca8558df6b21f00dc4e2cfeb1883acbd56c8->leave($__internal_387d620f790e93f8f352e880ceaaca8558df6b21f00dc4e2cfeb1883acbd56c8_prof);

        
        $__internal_14e7ce4a74c26241e38335ed39d656bab9ab3616278a7a5eb997777e9fe5d363->leave($__internal_14e7ce4a74c26241e38335ed39d656bab9ab3616278a7a5eb997777e9fe5d363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
