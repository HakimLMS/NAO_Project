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
        $__internal_a9ec7a58e0f2f56b7c7248412304a10ccfdb70c2c8198c8fde2ade0d55e279fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ec7a58e0f2f56b7c7248412304a10ccfdb70c2c8198c8fde2ade0d55e279fc->enter($__internal_a9ec7a58e0f2f56b7c7248412304a10ccfdb70c2c8198c8fde2ade0d55e279fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8fd7fb7442562cb4fccdb73f1e80a992419b2d4d1306fdae38865709d9ed5a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd7fb7442562cb4fccdb73f1e80a992419b2d4d1306fdae38865709d9ed5a90->enter($__internal_8fd7fb7442562cb4fccdb73f1e80a992419b2d4d1306fdae38865709d9ed5a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a9ec7a58e0f2f56b7c7248412304a10ccfdb70c2c8198c8fde2ade0d55e279fc->leave($__internal_a9ec7a58e0f2f56b7c7248412304a10ccfdb70c2c8198c8fde2ade0d55e279fc_prof);

        
        $__internal_8fd7fb7442562cb4fccdb73f1e80a992419b2d4d1306fdae38865709d9ed5a90->leave($__internal_8fd7fb7442562cb4fccdb73f1e80a992419b2d4d1306fdae38865709d9ed5a90_prof);

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
