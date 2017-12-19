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
        $__internal_67cd70e0051d527c6ddc14a6c6c1438f17a0ceebb6594c76cd532bfbfa57435c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cd70e0051d527c6ddc14a6c6c1438f17a0ceebb6594c76cd532bfbfa57435c->enter($__internal_67cd70e0051d527c6ddc14a6c6c1438f17a0ceebb6594c76cd532bfbfa57435c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_232d4554917d989afbfba31db48bedba16432551e8744d6172f4236da7a7e74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232d4554917d989afbfba31db48bedba16432551e8744d6172f4236da7a7e74b->enter($__internal_232d4554917d989afbfba31db48bedba16432551e8744d6172f4236da7a7e74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_67cd70e0051d527c6ddc14a6c6c1438f17a0ceebb6594c76cd532bfbfa57435c->leave($__internal_67cd70e0051d527c6ddc14a6c6c1438f17a0ceebb6594c76cd532bfbfa57435c_prof);

        
        $__internal_232d4554917d989afbfba31db48bedba16432551e8744d6172f4236da7a7e74b->leave($__internal_232d4554917d989afbfba31db48bedba16432551e8744d6172f4236da7a7e74b_prof);

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
", "@Framework/Form/datetime_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
