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
        $__internal_41305c5d5270720c19f179001a4384435a4e3fc8a5906e1c09747b7828624fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41305c5d5270720c19f179001a4384435a4e3fc8a5906e1c09747b7828624fcb->enter($__internal_41305c5d5270720c19f179001a4384435a4e3fc8a5906e1c09747b7828624fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2525df0608de6e9ea94036940dcfc92f038f1fd2025c461c987b601e4cb7f4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2525df0608de6e9ea94036940dcfc92f038f1fd2025c461c987b601e4cb7f4bf->enter($__internal_2525df0608de6e9ea94036940dcfc92f038f1fd2025c461c987b601e4cb7f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_41305c5d5270720c19f179001a4384435a4e3fc8a5906e1c09747b7828624fcb->leave($__internal_41305c5d5270720c19f179001a4384435a4e3fc8a5906e1c09747b7828624fcb_prof);

        
        $__internal_2525df0608de6e9ea94036940dcfc92f038f1fd2025c461c987b601e4cb7f4bf->leave($__internal_2525df0608de6e9ea94036940dcfc92f038f1fd2025c461c987b601e4cb7f4bf_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
