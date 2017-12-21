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
        $__internal_a874b09b8c2de97868321a67ac6d0545e47529c4cddb0ec027fa8653fa34563d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a874b09b8c2de97868321a67ac6d0545e47529c4cddb0ec027fa8653fa34563d->enter($__internal_a874b09b8c2de97868321a67ac6d0545e47529c4cddb0ec027fa8653fa34563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_70238963d03fbf7906a2db465b4ccafb08f42ad4fdbfbad9733aac9710ecd0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70238963d03fbf7906a2db465b4ccafb08f42ad4fdbfbad9733aac9710ecd0b4->enter($__internal_70238963d03fbf7906a2db465b4ccafb08f42ad4fdbfbad9733aac9710ecd0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a874b09b8c2de97868321a67ac6d0545e47529c4cddb0ec027fa8653fa34563d->leave($__internal_a874b09b8c2de97868321a67ac6d0545e47529c4cddb0ec027fa8653fa34563d_prof);

        
        $__internal_70238963d03fbf7906a2db465b4ccafb08f42ad4fdbfbad9733aac9710ecd0b4->leave($__internal_70238963d03fbf7906a2db465b4ccafb08f42ad4fdbfbad9733aac9710ecd0b4_prof);

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
