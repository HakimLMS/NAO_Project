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
        $__internal_2cda95cf085593669bd7000aada060ebd4a72ef9865e2077fef32b2d63133cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cda95cf085593669bd7000aada060ebd4a72ef9865e2077fef32b2d63133cc5->enter($__internal_2cda95cf085593669bd7000aada060ebd4a72ef9865e2077fef32b2d63133cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2b9d82f03f82e93e4c51cc462662da76697e3b7432562b5059a78cb7a14a21de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9d82f03f82e93e4c51cc462662da76697e3b7432562b5059a78cb7a14a21de->enter($__internal_2b9d82f03f82e93e4c51cc462662da76697e3b7432562b5059a78cb7a14a21de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2cda95cf085593669bd7000aada060ebd4a72ef9865e2077fef32b2d63133cc5->leave($__internal_2cda95cf085593669bd7000aada060ebd4a72ef9865e2077fef32b2d63133cc5_prof);

        
        $__internal_2b9d82f03f82e93e4c51cc462662da76697e3b7432562b5059a78cb7a14a21de->leave($__internal_2b9d82f03f82e93e4c51cc462662da76697e3b7432562b5059a78cb7a14a21de_prof);

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
