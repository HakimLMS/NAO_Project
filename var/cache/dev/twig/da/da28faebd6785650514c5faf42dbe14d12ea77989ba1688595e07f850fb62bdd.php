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
        $__internal_f150e7422b74b97d438ff78147ee8f52490f052efd729bd3773b2ed69dccdafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f150e7422b74b97d438ff78147ee8f52490f052efd729bd3773b2ed69dccdafa->enter($__internal_f150e7422b74b97d438ff78147ee8f52490f052efd729bd3773b2ed69dccdafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_603ee999837fa2eea95510c333d0b4a31c87a39a630d108f40d6ad5d4618e9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603ee999837fa2eea95510c333d0b4a31c87a39a630d108f40d6ad5d4618e9ac->enter($__internal_603ee999837fa2eea95510c333d0b4a31c87a39a630d108f40d6ad5d4618e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f150e7422b74b97d438ff78147ee8f52490f052efd729bd3773b2ed69dccdafa->leave($__internal_f150e7422b74b97d438ff78147ee8f52490f052efd729bd3773b2ed69dccdafa_prof);

        
        $__internal_603ee999837fa2eea95510c333d0b4a31c87a39a630d108f40d6ad5d4618e9ac->leave($__internal_603ee999837fa2eea95510c333d0b4a31c87a39a630d108f40d6ad5d4618e9ac_prof);

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
