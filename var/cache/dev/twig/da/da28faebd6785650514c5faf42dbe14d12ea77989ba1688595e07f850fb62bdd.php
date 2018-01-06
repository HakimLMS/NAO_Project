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
        $__internal_b141165c2ee8b2058ad0467ed4b98439db7060a8d865c0c0c58aeca0aea9d0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b141165c2ee8b2058ad0467ed4b98439db7060a8d865c0c0c58aeca0aea9d0a9->enter($__internal_b141165c2ee8b2058ad0467ed4b98439db7060a8d865c0c0c58aeca0aea9d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_405fd5c7ee0553a0f83570f3bd0f262d9f2566e7209f642099b0391c426b2337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405fd5c7ee0553a0f83570f3bd0f262d9f2566e7209f642099b0391c426b2337->enter($__internal_405fd5c7ee0553a0f83570f3bd0f262d9f2566e7209f642099b0391c426b2337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b141165c2ee8b2058ad0467ed4b98439db7060a8d865c0c0c58aeca0aea9d0a9->leave($__internal_b141165c2ee8b2058ad0467ed4b98439db7060a8d865c0c0c58aeca0aea9d0a9_prof);

        
        $__internal_405fd5c7ee0553a0f83570f3bd0f262d9f2566e7209f642099b0391c426b2337->leave($__internal_405fd5c7ee0553a0f83570f3bd0f262d9f2566e7209f642099b0391c426b2337_prof);

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
