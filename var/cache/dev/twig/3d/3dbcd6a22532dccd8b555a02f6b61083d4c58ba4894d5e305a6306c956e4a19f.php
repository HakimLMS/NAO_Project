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
        $__internal_86d88df5d8836798f188f0c385d510ea7814dbd113d6637173f205d3797fc68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d88df5d8836798f188f0c385d510ea7814dbd113d6637173f205d3797fc68e->enter($__internal_86d88df5d8836798f188f0c385d510ea7814dbd113d6637173f205d3797fc68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6e8590c6651e04c8decb980cc340421ce8d1a5cd45f578b82d9b6cc59dc99c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8590c6651e04c8decb980cc340421ce8d1a5cd45f578b82d9b6cc59dc99c9b->enter($__internal_6e8590c6651e04c8decb980cc340421ce8d1a5cd45f578b82d9b6cc59dc99c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_86d88df5d8836798f188f0c385d510ea7814dbd113d6637173f205d3797fc68e->leave($__internal_86d88df5d8836798f188f0c385d510ea7814dbd113d6637173f205d3797fc68e_prof);

        
        $__internal_6e8590c6651e04c8decb980cc340421ce8d1a5cd45f578b82d9b6cc59dc99c9b->leave($__internal_6e8590c6651e04c8decb980cc340421ce8d1a5cd45f578b82d9b6cc59dc99c9b_prof);

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
