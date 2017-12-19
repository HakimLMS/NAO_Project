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
        $__internal_6fc8765e2336f09e69f26646b38fb671c4e4f697388d51e36af2ea4fb6f69600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc8765e2336f09e69f26646b38fb671c4e4f697388d51e36af2ea4fb6f69600->enter($__internal_6fc8765e2336f09e69f26646b38fb671c4e4f697388d51e36af2ea4fb6f69600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6a27b70edb3f0f98b0a3002f3f7e8a56e8291b3c4a0215e1b44326cc1d37817a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a27b70edb3f0f98b0a3002f3f7e8a56e8291b3c4a0215e1b44326cc1d37817a->enter($__internal_6a27b70edb3f0f98b0a3002f3f7e8a56e8291b3c4a0215e1b44326cc1d37817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_6fc8765e2336f09e69f26646b38fb671c4e4f697388d51e36af2ea4fb6f69600->leave($__internal_6fc8765e2336f09e69f26646b38fb671c4e4f697388d51e36af2ea4fb6f69600_prof);

        
        $__internal_6a27b70edb3f0f98b0a3002f3f7e8a56e8291b3c4a0215e1b44326cc1d37817a->leave($__internal_6a27b70edb3f0f98b0a3002f3f7e8a56e8291b3c4a0215e1b44326cc1d37817a_prof);

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
