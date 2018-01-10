<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_892acbedf91af7dd113482758559f9ddb842a9e76352593ee56c7734830ba08a extends Twig_Template
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
        $__internal_6d28886a48ad58175a1c0883e3ea33c62f348494da7167624491e258a7200917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d28886a48ad58175a1c0883e3ea33c62f348494da7167624491e258a7200917->enter($__internal_6d28886a48ad58175a1c0883e3ea33c62f348494da7167624491e258a7200917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_93787ff06bc4c1ab4c6d40deab4526e88d8481e1408ee4da42f22725aef95296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93787ff06bc4c1ab4c6d40deab4526e88d8481e1408ee4da42f22725aef95296->enter($__internal_93787ff06bc4c1ab4c6d40deab4526e88d8481e1408ee4da42f22725aef95296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6d28886a48ad58175a1c0883e3ea33c62f348494da7167624491e258a7200917->leave($__internal_6d28886a48ad58175a1c0883e3ea33c62f348494da7167624491e258a7200917_prof);

        
        $__internal_93787ff06bc4c1ab4c6d40deab4526e88d8481e1408ee4da42f22725aef95296->leave($__internal_93787ff06bc4c1ab4c6d40deab4526e88d8481e1408ee4da42f22725aef95296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
