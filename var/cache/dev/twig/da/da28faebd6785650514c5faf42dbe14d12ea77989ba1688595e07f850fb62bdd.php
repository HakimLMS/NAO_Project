<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5c42180c9f1242cc4c0650eb787b65994635d69cc26a9098d6fcc24850b82eb6 extends Twig_Template
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
        $__internal_a502f0ff6a73c9deb583b7f01c0f0203273ebfef3c9526287fe71d3859e270ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a502f0ff6a73c9deb583b7f01c0f0203273ebfef3c9526287fe71d3859e270ae->enter($__internal_a502f0ff6a73c9deb583b7f01c0f0203273ebfef3c9526287fe71d3859e270ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_fda16dddfe9fbc2567e82df2429fd29aa69975603b89bbe1ef998689cd66d8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda16dddfe9fbc2567e82df2429fd29aa69975603b89bbe1ef998689cd66d8ad->enter($__internal_fda16dddfe9fbc2567e82df2429fd29aa69975603b89bbe1ef998689cd66d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_a502f0ff6a73c9deb583b7f01c0f0203273ebfef3c9526287fe71d3859e270ae->leave($__internal_a502f0ff6a73c9deb583b7f01c0f0203273ebfef3c9526287fe71d3859e270ae_prof);

        
        $__internal_fda16dddfe9fbc2567e82df2429fd29aa69975603b89bbe1ef998689cd66d8ad->leave($__internal_fda16dddfe9fbc2567e82df2429fd29aa69975603b89bbe1ef998689cd66d8ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
