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
        $__internal_a182936f59a82110f3cea9abd96f0bcc19e60e5615b73592ac69965ed7c0c401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a182936f59a82110f3cea9abd96f0bcc19e60e5615b73592ac69965ed7c0c401->enter($__internal_a182936f59a82110f3cea9abd96f0bcc19e60e5615b73592ac69965ed7c0c401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_98dc434d6d6764ead461d3152bd97008cef9c3eeb634ce57445cf79f56d6ceb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dc434d6d6764ead461d3152bd97008cef9c3eeb634ce57445cf79f56d6ceb8->enter($__internal_98dc434d6d6764ead461d3152bd97008cef9c3eeb634ce57445cf79f56d6ceb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a182936f59a82110f3cea9abd96f0bcc19e60e5615b73592ac69965ed7c0c401->leave($__internal_a182936f59a82110f3cea9abd96f0bcc19e60e5615b73592ac69965ed7c0c401_prof);

        
        $__internal_98dc434d6d6764ead461d3152bd97008cef9c3eeb634ce57445cf79f56d6ceb8->leave($__internal_98dc434d6d6764ead461d3152bd97008cef9c3eeb634ce57445cf79f56d6ceb8_prof);

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
