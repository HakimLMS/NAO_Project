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
        $__internal_b34c97eb6426372f5304b4d9c0bca7e4cd56bd88323b7263e1546b76452633b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34c97eb6426372f5304b4d9c0bca7e4cd56bd88323b7263e1546b76452633b5->enter($__internal_b34c97eb6426372f5304b4d9c0bca7e4cd56bd88323b7263e1546b76452633b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9a88f5ae2b5bfcb4851900df94c2eef2e5e00b24c66add2323cdc48b682ba04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a88f5ae2b5bfcb4851900df94c2eef2e5e00b24c66add2323cdc48b682ba04f->enter($__internal_9a88f5ae2b5bfcb4851900df94c2eef2e5e00b24c66add2323cdc48b682ba04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b34c97eb6426372f5304b4d9c0bca7e4cd56bd88323b7263e1546b76452633b5->leave($__internal_b34c97eb6426372f5304b4d9c0bca7e4cd56bd88323b7263e1546b76452633b5_prof);

        
        $__internal_9a88f5ae2b5bfcb4851900df94c2eef2e5e00b24c66add2323cdc48b682ba04f->leave($__internal_9a88f5ae2b5bfcb4851900df94c2eef2e5e00b24c66add2323cdc48b682ba04f_prof);

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
", "@Framework/Form/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
