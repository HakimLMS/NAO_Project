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
        $__internal_765de3e84d8604e10d3b86bdfce9ef9045ca02215d17223a74e1c23fb62ae538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765de3e84d8604e10d3b86bdfce9ef9045ca02215d17223a74e1c23fb62ae538->enter($__internal_765de3e84d8604e10d3b86bdfce9ef9045ca02215d17223a74e1c23fb62ae538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_33f728dbc06b1569bf7fca4dbaff39a387a2a9a8a3ed9bcd6ca0a0aca0665d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f728dbc06b1569bf7fca4dbaff39a387a2a9a8a3ed9bcd6ca0a0aca0665d7a->enter($__internal_33f728dbc06b1569bf7fca4dbaff39a387a2a9a8a3ed9bcd6ca0a0aca0665d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_765de3e84d8604e10d3b86bdfce9ef9045ca02215d17223a74e1c23fb62ae538->leave($__internal_765de3e84d8604e10d3b86bdfce9ef9045ca02215d17223a74e1c23fb62ae538_prof);

        
        $__internal_33f728dbc06b1569bf7fca4dbaff39a387a2a9a8a3ed9bcd6ca0a0aca0665d7a->leave($__internal_33f728dbc06b1569bf7fca4dbaff39a387a2a9a8a3ed9bcd6ca0a0aca0665d7a_prof);

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
