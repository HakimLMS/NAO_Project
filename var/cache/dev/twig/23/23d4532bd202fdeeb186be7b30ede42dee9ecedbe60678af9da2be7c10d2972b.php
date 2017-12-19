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
        $__internal_f84b41713309aab335de99101195d8970b5be117a6500a7ffdf3233c5c0c52c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84b41713309aab335de99101195d8970b5be117a6500a7ffdf3233c5c0c52c8->enter($__internal_f84b41713309aab335de99101195d8970b5be117a6500a7ffdf3233c5c0c52c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cd66af07e7bf1c88f31130cd4eada7443ffa0d8f4bb2ca1c4b4db26a3ebf62aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd66af07e7bf1c88f31130cd4eada7443ffa0d8f4bb2ca1c4b4db26a3ebf62aa->enter($__internal_cd66af07e7bf1c88f31130cd4eada7443ffa0d8f4bb2ca1c4b4db26a3ebf62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f84b41713309aab335de99101195d8970b5be117a6500a7ffdf3233c5c0c52c8->leave($__internal_f84b41713309aab335de99101195d8970b5be117a6500a7ffdf3233c5c0c52c8_prof);

        
        $__internal_cd66af07e7bf1c88f31130cd4eada7443ffa0d8f4bb2ca1c4b4db26a3ebf62aa->leave($__internal_cd66af07e7bf1c88f31130cd4eada7443ffa0d8f4bb2ca1c4b4db26a3ebf62aa_prof);

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
