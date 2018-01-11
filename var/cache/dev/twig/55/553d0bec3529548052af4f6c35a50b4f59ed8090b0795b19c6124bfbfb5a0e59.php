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
        $__internal_186ab6187433d782cc2e1d5802ff43156fe214a6f8b41f51d1cbd90ef92eb051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186ab6187433d782cc2e1d5802ff43156fe214a6f8b41f51d1cbd90ef92eb051->enter($__internal_186ab6187433d782cc2e1d5802ff43156fe214a6f8b41f51d1cbd90ef92eb051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c82cf87570be394667f339072d61a0f739c41273e905f3cde2a85cfad885ac7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82cf87570be394667f339072d61a0f739c41273e905f3cde2a85cfad885ac7c->enter($__internal_c82cf87570be394667f339072d61a0f739c41273e905f3cde2a85cfad885ac7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_186ab6187433d782cc2e1d5802ff43156fe214a6f8b41f51d1cbd90ef92eb051->leave($__internal_186ab6187433d782cc2e1d5802ff43156fe214a6f8b41f51d1cbd90ef92eb051_prof);

        
        $__internal_c82cf87570be394667f339072d61a0f739c41273e905f3cde2a85cfad885ac7c->leave($__internal_c82cf87570be394667f339072d61a0f739c41273e905f3cde2a85cfad885ac7c_prof);

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
