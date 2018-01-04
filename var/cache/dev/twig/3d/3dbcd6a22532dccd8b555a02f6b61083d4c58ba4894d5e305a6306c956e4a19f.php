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
        $__internal_a6ed84adf6dd4765366bff233ecd13a4bdadd122fc77af6e6daccdfd3b85a952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ed84adf6dd4765366bff233ecd13a4bdadd122fc77af6e6daccdfd3b85a952->enter($__internal_a6ed84adf6dd4765366bff233ecd13a4bdadd122fc77af6e6daccdfd3b85a952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e23af27ff026c59c3764f368ea0856ab51bf8cb0bde2f1a2e06c89634738bd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23af27ff026c59c3764f368ea0856ab51bf8cb0bde2f1a2e06c89634738bd81->enter($__internal_e23af27ff026c59c3764f368ea0856ab51bf8cb0bde2f1a2e06c89634738bd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a6ed84adf6dd4765366bff233ecd13a4bdadd122fc77af6e6daccdfd3b85a952->leave($__internal_a6ed84adf6dd4765366bff233ecd13a4bdadd122fc77af6e6daccdfd3b85a952_prof);

        
        $__internal_e23af27ff026c59c3764f368ea0856ab51bf8cb0bde2f1a2e06c89634738bd81->leave($__internal_e23af27ff026c59c3764f368ea0856ab51bf8cb0bde2f1a2e06c89634738bd81_prof);

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
