<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c29d398a3421eaf002eaacdc953f52e87d8c7dbd58c185c1a02e5c564da0f444 extends Twig_Template
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
        $__internal_5f4dc77bb1a1267232c2470486d10c84f3c6545d2aee467066ebe4cdabad23da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4dc77bb1a1267232c2470486d10c84f3c6545d2aee467066ebe4cdabad23da->enter($__internal_5f4dc77bb1a1267232c2470486d10c84f3c6545d2aee467066ebe4cdabad23da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3ab097c77b0a1f69f1d27243cae674c557b340b9b070fab439df8f4bbef23026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab097c77b0a1f69f1d27243cae674c557b340b9b070fab439df8f4bbef23026->enter($__internal_3ab097c77b0a1f69f1d27243cae674c557b340b9b070fab439df8f4bbef23026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5f4dc77bb1a1267232c2470486d10c84f3c6545d2aee467066ebe4cdabad23da->leave($__internal_5f4dc77bb1a1267232c2470486d10c84f3c6545d2aee467066ebe4cdabad23da_prof);

        
        $__internal_3ab097c77b0a1f69f1d27243cae674c557b340b9b070fab439df8f4bbef23026->leave($__internal_3ab097c77b0a1f69f1d27243cae674c557b340b9b070fab439df8f4bbef23026_prof);

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
