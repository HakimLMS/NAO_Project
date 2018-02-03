<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_962cdfbe831d16dce84325d9b7f80856e5f9bbdf0a990f1f7a5375fb2852ec1e extends Twig_Template
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
        $__internal_75ec64be5b19fe30cd2530add8e7b21fbcf1fc3bbdc65006f49a6c82d5ac037e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ec64be5b19fe30cd2530add8e7b21fbcf1fc3bbdc65006f49a6c82d5ac037e->enter($__internal_75ec64be5b19fe30cd2530add8e7b21fbcf1fc3bbdc65006f49a6c82d5ac037e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_aae462a7c3f1cfcaff5474503bd686688ae2d40395ba69f2f2f9a5b9c16dcfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae462a7c3f1cfcaff5474503bd686688ae2d40395ba69f2f2f9a5b9c16dcfb6->enter($__internal_aae462a7c3f1cfcaff5474503bd686688ae2d40395ba69f2f2f9a5b9c16dcfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_75ec64be5b19fe30cd2530add8e7b21fbcf1fc3bbdc65006f49a6c82d5ac037e->leave($__internal_75ec64be5b19fe30cd2530add8e7b21fbcf1fc3bbdc65006f49a6c82d5ac037e_prof);

        
        $__internal_aae462a7c3f1cfcaff5474503bd686688ae2d40395ba69f2f2f9a5b9c16dcfb6->leave($__internal_aae462a7c3f1cfcaff5474503bd686688ae2d40395ba69f2f2f9a5b9c16dcfb6_prof);

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
