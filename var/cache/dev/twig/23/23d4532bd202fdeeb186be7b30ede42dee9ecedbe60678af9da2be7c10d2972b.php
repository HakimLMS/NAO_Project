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
        $__internal_25984cd34a87bd9bfe0e35ba649a460a43a780ba5c077dccf4f2f01d85a0aeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25984cd34a87bd9bfe0e35ba649a460a43a780ba5c077dccf4f2f01d85a0aeb2->enter($__internal_25984cd34a87bd9bfe0e35ba649a460a43a780ba5c077dccf4f2f01d85a0aeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a90a2f72d58d3fbff59e525920a9876f2d6e24479814db66c4c5b67f861c7ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90a2f72d58d3fbff59e525920a9876f2d6e24479814db66c4c5b67f861c7ea6->enter($__internal_a90a2f72d58d3fbff59e525920a9876f2d6e24479814db66c4c5b67f861c7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_25984cd34a87bd9bfe0e35ba649a460a43a780ba5c077dccf4f2f01d85a0aeb2->leave($__internal_25984cd34a87bd9bfe0e35ba649a460a43a780ba5c077dccf4f2f01d85a0aeb2_prof);

        
        $__internal_a90a2f72d58d3fbff59e525920a9876f2d6e24479814db66c4c5b67f861c7ea6->leave($__internal_a90a2f72d58d3fbff59e525920a9876f2d6e24479814db66c4c5b67f861c7ea6_prof);

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
