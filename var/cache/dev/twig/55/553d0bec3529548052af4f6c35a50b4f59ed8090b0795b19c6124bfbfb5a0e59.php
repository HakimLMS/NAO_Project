<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_afa1a892f2097b2e148133ea89cdc2c0f6a677118a66aa8ddd6234a06ac03516 extends Twig_Template
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
        $__internal_00c366ea4f7531daaaf6465edc9e8dc177c1e1452f4eed25261d5d1e99aacd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c366ea4f7531daaaf6465edc9e8dc177c1e1452f4eed25261d5d1e99aacd79->enter($__internal_00c366ea4f7531daaaf6465edc9e8dc177c1e1452f4eed25261d5d1e99aacd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2be042a45168ded4c56a574b7376eb71a8839b914085c405d4df871bd13b6081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be042a45168ded4c56a574b7376eb71a8839b914085c405d4df871bd13b6081->enter($__internal_2be042a45168ded4c56a574b7376eb71a8839b914085c405d4df871bd13b6081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_00c366ea4f7531daaaf6465edc9e8dc177c1e1452f4eed25261d5d1e99aacd79->leave($__internal_00c366ea4f7531daaaf6465edc9e8dc177c1e1452f4eed25261d5d1e99aacd79_prof);

        
        $__internal_2be042a45168ded4c56a574b7376eb71a8839b914085c405d4df871bd13b6081->leave($__internal_2be042a45168ded4c56a574b7376eb71a8839b914085c405d4df871bd13b6081_prof);

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
