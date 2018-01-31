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
        $__internal_7d2fa86fa09fea726b52a99b0f43ba7b37184327025afed0b6bc603afd702a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2fa86fa09fea726b52a99b0f43ba7b37184327025afed0b6bc603afd702a0d->enter($__internal_7d2fa86fa09fea726b52a99b0f43ba7b37184327025afed0b6bc603afd702a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_976e7cd5e6ec3f566cd36148ba8131ef85f48cb475c3fdf760033bdad7577019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976e7cd5e6ec3f566cd36148ba8131ef85f48cb475c3fdf760033bdad7577019->enter($__internal_976e7cd5e6ec3f566cd36148ba8131ef85f48cb475c3fdf760033bdad7577019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7d2fa86fa09fea726b52a99b0f43ba7b37184327025afed0b6bc603afd702a0d->leave($__internal_7d2fa86fa09fea726b52a99b0f43ba7b37184327025afed0b6bc603afd702a0d_prof);

        
        $__internal_976e7cd5e6ec3f566cd36148ba8131ef85f48cb475c3fdf760033bdad7577019->leave($__internal_976e7cd5e6ec3f566cd36148ba8131ef85f48cb475c3fdf760033bdad7577019_prof);

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
