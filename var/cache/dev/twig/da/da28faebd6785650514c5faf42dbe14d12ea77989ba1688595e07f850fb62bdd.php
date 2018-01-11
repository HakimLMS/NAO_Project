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
        $__internal_5ea5b783d311ac2894cf8776d201573372af711f8b5b9ad6c637339887175b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea5b783d311ac2894cf8776d201573372af711f8b5b9ad6c637339887175b7e->enter($__internal_5ea5b783d311ac2894cf8776d201573372af711f8b5b9ad6c637339887175b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d5e3e86b4efd36bf2cef7d2d2ec60c14f92300f10f8bd2fed377b4f1a6562788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3e86b4efd36bf2cef7d2d2ec60c14f92300f10f8bd2fed377b4f1a6562788->enter($__internal_d5e3e86b4efd36bf2cef7d2d2ec60c14f92300f10f8bd2fed377b4f1a6562788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5ea5b783d311ac2894cf8776d201573372af711f8b5b9ad6c637339887175b7e->leave($__internal_5ea5b783d311ac2894cf8776d201573372af711f8b5b9ad6c637339887175b7e_prof);

        
        $__internal_d5e3e86b4efd36bf2cef7d2d2ec60c14f92300f10f8bd2fed377b4f1a6562788->leave($__internal_d5e3e86b4efd36bf2cef7d2d2ec60c14f92300f10f8bd2fed377b4f1a6562788_prof);

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
