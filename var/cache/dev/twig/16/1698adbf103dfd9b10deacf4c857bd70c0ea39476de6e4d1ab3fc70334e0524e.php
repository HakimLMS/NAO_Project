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
        $__internal_91cc7e8bac9261d9211004da4b7b290c2dda5107631a26feabc42ad8cdb5d493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cc7e8bac9261d9211004da4b7b290c2dda5107631a26feabc42ad8cdb5d493->enter($__internal_91cc7e8bac9261d9211004da4b7b290c2dda5107631a26feabc42ad8cdb5d493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ae9a0cdcbe0c5eed2fef21312851817bf542b23a27aedb98dc0a6070f0a839f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9a0cdcbe0c5eed2fef21312851817bf542b23a27aedb98dc0a6070f0a839f7->enter($__internal_ae9a0cdcbe0c5eed2fef21312851817bf542b23a27aedb98dc0a6070f0a839f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_91cc7e8bac9261d9211004da4b7b290c2dda5107631a26feabc42ad8cdb5d493->leave($__internal_91cc7e8bac9261d9211004da4b7b290c2dda5107631a26feabc42ad8cdb5d493_prof);

        
        $__internal_ae9a0cdcbe0c5eed2fef21312851817bf542b23a27aedb98dc0a6070f0a839f7->leave($__internal_ae9a0cdcbe0c5eed2fef21312851817bf542b23a27aedb98dc0a6070f0a839f7_prof);

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
