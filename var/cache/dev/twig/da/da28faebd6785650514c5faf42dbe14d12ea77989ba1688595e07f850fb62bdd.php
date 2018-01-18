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
        $__internal_eb7025bcdca10bcdfa406c9d57bf8f527cb1f5e456e90daeea5e5b10a8b5087a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7025bcdca10bcdfa406c9d57bf8f527cb1f5e456e90daeea5e5b10a8b5087a->enter($__internal_eb7025bcdca10bcdfa406c9d57bf8f527cb1f5e456e90daeea5e5b10a8b5087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b140a46dba3e0d04285ab8ec8a13aad9ff241866b028327d39bbb8a8d71bbea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b140a46dba3e0d04285ab8ec8a13aad9ff241866b028327d39bbb8a8d71bbea8->enter($__internal_b140a46dba3e0d04285ab8ec8a13aad9ff241866b028327d39bbb8a8d71bbea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_eb7025bcdca10bcdfa406c9d57bf8f527cb1f5e456e90daeea5e5b10a8b5087a->leave($__internal_eb7025bcdca10bcdfa406c9d57bf8f527cb1f5e456e90daeea5e5b10a8b5087a_prof);

        
        $__internal_b140a46dba3e0d04285ab8ec8a13aad9ff241866b028327d39bbb8a8d71bbea8->leave($__internal_b140a46dba3e0d04285ab8ec8a13aad9ff241866b028327d39bbb8a8d71bbea8_prof);

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
