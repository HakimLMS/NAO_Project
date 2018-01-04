<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d94db0860bebb58c773fa2e4802f19096a679d58fd88586b1b76d1f55f767d2a extends Twig_Template
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
        $__internal_5e4b61995c6008e83c1cf836c427da60eefef8ff5bda3e9b76cd81b778c885b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4b61995c6008e83c1cf836c427da60eefef8ff5bda3e9b76cd81b778c885b9->enter($__internal_5e4b61995c6008e83c1cf836c427da60eefef8ff5bda3e9b76cd81b778c885b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c1bb2ff42ce04324b6132dd347cba49b90ba47668458d9bfbe19e3012f11d9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bb2ff42ce04324b6132dd347cba49b90ba47668458d9bfbe19e3012f11d9f7->enter($__internal_c1bb2ff42ce04324b6132dd347cba49b90ba47668458d9bfbe19e3012f11d9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5e4b61995c6008e83c1cf836c427da60eefef8ff5bda3e9b76cd81b778c885b9->leave($__internal_5e4b61995c6008e83c1cf836c427da60eefef8ff5bda3e9b76cd81b778c885b9_prof);

        
        $__internal_c1bb2ff42ce04324b6132dd347cba49b90ba47668458d9bfbe19e3012f11d9f7->leave($__internal_c1bb2ff42ce04324b6132dd347cba49b90ba47668458d9bfbe19e3012f11d9f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
