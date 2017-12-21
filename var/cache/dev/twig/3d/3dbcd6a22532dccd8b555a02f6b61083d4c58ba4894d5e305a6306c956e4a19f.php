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
        $__internal_ca8908db5809073e668cb7cd39939d2b4086c6b33c9d9881e66d47f52082e2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8908db5809073e668cb7cd39939d2b4086c6b33c9d9881e66d47f52082e2cd->enter($__internal_ca8908db5809073e668cb7cd39939d2b4086c6b33c9d9881e66d47f52082e2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cf4c097d28ebc729f1d01ae785d9ef16bc8376853197355c30474264c1fb0efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4c097d28ebc729f1d01ae785d9ef16bc8376853197355c30474264c1fb0efa->enter($__internal_cf4c097d28ebc729f1d01ae785d9ef16bc8376853197355c30474264c1fb0efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ca8908db5809073e668cb7cd39939d2b4086c6b33c9d9881e66d47f52082e2cd->leave($__internal_ca8908db5809073e668cb7cd39939d2b4086c6b33c9d9881e66d47f52082e2cd_prof);

        
        $__internal_cf4c097d28ebc729f1d01ae785d9ef16bc8376853197355c30474264c1fb0efa->leave($__internal_cf4c097d28ebc729f1d01ae785d9ef16bc8376853197355c30474264c1fb0efa_prof);

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
