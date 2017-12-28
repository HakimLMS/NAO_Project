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
        $__internal_6d0d3e80e832386aa77f7b8205cb718a5420ef12822b14afca278ac38e0b346c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0d3e80e832386aa77f7b8205cb718a5420ef12822b14afca278ac38e0b346c->enter($__internal_6d0d3e80e832386aa77f7b8205cb718a5420ef12822b14afca278ac38e0b346c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1267e6784224259d0c4678563e76c9a5ac350cebcbef6cf4f429bf80969e8141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1267e6784224259d0c4678563e76c9a5ac350cebcbef6cf4f429bf80969e8141->enter($__internal_1267e6784224259d0c4678563e76c9a5ac350cebcbef6cf4f429bf80969e8141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6d0d3e80e832386aa77f7b8205cb718a5420ef12822b14afca278ac38e0b346c->leave($__internal_6d0d3e80e832386aa77f7b8205cb718a5420ef12822b14afca278ac38e0b346c_prof);

        
        $__internal_1267e6784224259d0c4678563e76c9a5ac350cebcbef6cf4f429bf80969e8141->leave($__internal_1267e6784224259d0c4678563e76c9a5ac350cebcbef6cf4f429bf80969e8141_prof);

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
