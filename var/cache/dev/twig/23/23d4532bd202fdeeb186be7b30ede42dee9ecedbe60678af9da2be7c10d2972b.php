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
        $__internal_742c5a0d48d2df3c672106e97fd951d488bc270d5aa9d2c106d06e5ae05fa512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742c5a0d48d2df3c672106e97fd951d488bc270d5aa9d2c106d06e5ae05fa512->enter($__internal_742c5a0d48d2df3c672106e97fd951d488bc270d5aa9d2c106d06e5ae05fa512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a30fcabd6b12e798c1c967e33c3d3cd3407c7f1b673cc0f615ac48376bcb2878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30fcabd6b12e798c1c967e33c3d3cd3407c7f1b673cc0f615ac48376bcb2878->enter($__internal_a30fcabd6b12e798c1c967e33c3d3cd3407c7f1b673cc0f615ac48376bcb2878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_742c5a0d48d2df3c672106e97fd951d488bc270d5aa9d2c106d06e5ae05fa512->leave($__internal_742c5a0d48d2df3c672106e97fd951d488bc270d5aa9d2c106d06e5ae05fa512_prof);

        
        $__internal_a30fcabd6b12e798c1c967e33c3d3cd3407c7f1b673cc0f615ac48376bcb2878->leave($__internal_a30fcabd6b12e798c1c967e33c3d3cd3407c7f1b673cc0f615ac48376bcb2878_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
