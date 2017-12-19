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
        $__internal_6db2110af26db97566035dc2fa7f79aede1e58e289dcf6e2072dea96dcc9c47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db2110af26db97566035dc2fa7f79aede1e58e289dcf6e2072dea96dcc9c47b->enter($__internal_6db2110af26db97566035dc2fa7f79aede1e58e289dcf6e2072dea96dcc9c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b6a07f7074f95551512a7fd1a3cf04553a96443398845c11b1b8c16d29cb696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a07f7074f95551512a7fd1a3cf04553a96443398845c11b1b8c16d29cb696c->enter($__internal_b6a07f7074f95551512a7fd1a3cf04553a96443398845c11b1b8c16d29cb696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6db2110af26db97566035dc2fa7f79aede1e58e289dcf6e2072dea96dcc9c47b->leave($__internal_6db2110af26db97566035dc2fa7f79aede1e58e289dcf6e2072dea96dcc9c47b_prof);

        
        $__internal_b6a07f7074f95551512a7fd1a3cf04553a96443398845c11b1b8c16d29cb696c->leave($__internal_b6a07f7074f95551512a7fd1a3cf04553a96443398845c11b1b8c16d29cb696c_prof);

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
