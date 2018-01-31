<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3bc09884a31fe565789c1d15cdc2d91a86bfe1b1acb7d7fcdb0f52722cb85fd5 extends Twig_Template
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
        $__internal_57ef3d2e43308c9c219d6baec53828991d2193fda91969bdade281cbae146219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ef3d2e43308c9c219d6baec53828991d2193fda91969bdade281cbae146219->enter($__internal_57ef3d2e43308c9c219d6baec53828991d2193fda91969bdade281cbae146219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_86f52c9d0baffba64820b7c8ec6f28d8e83662b13d778de6a2a51dfcf9283621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f52c9d0baffba64820b7c8ec6f28d8e83662b13d778de6a2a51dfcf9283621->enter($__internal_86f52c9d0baffba64820b7c8ec6f28d8e83662b13d778de6a2a51dfcf9283621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_57ef3d2e43308c9c219d6baec53828991d2193fda91969bdade281cbae146219->leave($__internal_57ef3d2e43308c9c219d6baec53828991d2193fda91969bdade281cbae146219_prof);

        
        $__internal_86f52c9d0baffba64820b7c8ec6f28d8e83662b13d778de6a2a51dfcf9283621->leave($__internal_86f52c9d0baffba64820b7c8ec6f28d8e83662b13d778de6a2a51dfcf9283621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
