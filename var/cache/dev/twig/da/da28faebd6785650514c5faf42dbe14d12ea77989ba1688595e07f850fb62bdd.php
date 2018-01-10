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
        $__internal_0fb2f70ae2150b7627a3b779568c1076450c621f4dce1e21435c3bddacdfa304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb2f70ae2150b7627a3b779568c1076450c621f4dce1e21435c3bddacdfa304->enter($__internal_0fb2f70ae2150b7627a3b779568c1076450c621f4dce1e21435c3bddacdfa304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9a8b31af68d9456626bf5c71fcffe61a0a622e5541dcaaaa93f62ee33fd59558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8b31af68d9456626bf5c71fcffe61a0a622e5541dcaaaa93f62ee33fd59558->enter($__internal_9a8b31af68d9456626bf5c71fcffe61a0a622e5541dcaaaa93f62ee33fd59558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_0fb2f70ae2150b7627a3b779568c1076450c621f4dce1e21435c3bddacdfa304->leave($__internal_0fb2f70ae2150b7627a3b779568c1076450c621f4dce1e21435c3bddacdfa304_prof);

        
        $__internal_9a8b31af68d9456626bf5c71fcffe61a0a622e5541dcaaaa93f62ee33fd59558->leave($__internal_9a8b31af68d9456626bf5c71fcffe61a0a622e5541dcaaaa93f62ee33fd59558_prof);

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
