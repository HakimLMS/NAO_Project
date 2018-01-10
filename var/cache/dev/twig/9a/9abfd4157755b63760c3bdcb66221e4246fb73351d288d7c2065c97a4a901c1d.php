<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_981f165144c6d95f04a85bcffc48d074d392be93360b033429b843de7d6de2b8 extends Twig_Template
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
        $__internal_a5fdf69866044aa3f950e7b5879e6d46cc72b3cc8e447e2be3197ddcc8f3a4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fdf69866044aa3f950e7b5879e6d46cc72b3cc8e447e2be3197ddcc8f3a4e7->enter($__internal_a5fdf69866044aa3f950e7b5879e6d46cc72b3cc8e447e2be3197ddcc8f3a4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_afea315bd855aacb9850aebef4efdf1dcfdb8f3cc6bcc9e12bd7debc58fed15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afea315bd855aacb9850aebef4efdf1dcfdb8f3cc6bcc9e12bd7debc58fed15d->enter($__internal_afea315bd855aacb9850aebef4efdf1dcfdb8f3cc6bcc9e12bd7debc58fed15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a5fdf69866044aa3f950e7b5879e6d46cc72b3cc8e447e2be3197ddcc8f3a4e7->leave($__internal_a5fdf69866044aa3f950e7b5879e6d46cc72b3cc8e447e2be3197ddcc8f3a4e7_prof);

        
        $__internal_afea315bd855aacb9850aebef4efdf1dcfdb8f3cc6bcc9e12bd7debc58fed15d->leave($__internal_afea315bd855aacb9850aebef4efdf1dcfdb8f3cc6bcc9e12bd7debc58fed15d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
