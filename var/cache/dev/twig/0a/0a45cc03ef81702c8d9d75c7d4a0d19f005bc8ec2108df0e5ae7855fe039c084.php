<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c551e3336fcd8dcb9dc56daa5a568e8e82af37aca6fdb500b626416b87c4f659 extends Twig_Template
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
        $__internal_29f56bc15c9aa8eb44b6902efa0c8bf9a049dd8614e1ca70802ca1a8b45e70cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f56bc15c9aa8eb44b6902efa0c8bf9a049dd8614e1ca70802ca1a8b45e70cb->enter($__internal_29f56bc15c9aa8eb44b6902efa0c8bf9a049dd8614e1ca70802ca1a8b45e70cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1251c7530c715e981b086f9e4b0f13ea5a79c72fed11dcfa0f7a53b0e3983c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1251c7530c715e981b086f9e4b0f13ea5a79c72fed11dcfa0f7a53b0e3983c76->enter($__internal_1251c7530c715e981b086f9e4b0f13ea5a79c72fed11dcfa0f7a53b0e3983c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_29f56bc15c9aa8eb44b6902efa0c8bf9a049dd8614e1ca70802ca1a8b45e70cb->leave($__internal_29f56bc15c9aa8eb44b6902efa0c8bf9a049dd8614e1ca70802ca1a8b45e70cb_prof);

        
        $__internal_1251c7530c715e981b086f9e4b0f13ea5a79c72fed11dcfa0f7a53b0e3983c76->leave($__internal_1251c7530c715e981b086f9e4b0f13ea5a79c72fed11dcfa0f7a53b0e3983c76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
