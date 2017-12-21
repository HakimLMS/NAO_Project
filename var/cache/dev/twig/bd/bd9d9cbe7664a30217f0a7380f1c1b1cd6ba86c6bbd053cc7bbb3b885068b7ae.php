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
        $__internal_95cc75712d8575e19073f601b5be7029575992a493e79d4ab56202590fc3324b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cc75712d8575e19073f601b5be7029575992a493e79d4ab56202590fc3324b->enter($__internal_95cc75712d8575e19073f601b5be7029575992a493e79d4ab56202590fc3324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_170dedca7160a267fed51008c04f5c555d3856b26f0f789d9b9fe021e2dd0264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170dedca7160a267fed51008c04f5c555d3856b26f0f789d9b9fe021e2dd0264->enter($__internal_170dedca7160a267fed51008c04f5c555d3856b26f0f789d9b9fe021e2dd0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_95cc75712d8575e19073f601b5be7029575992a493e79d4ab56202590fc3324b->leave($__internal_95cc75712d8575e19073f601b5be7029575992a493e79d4ab56202590fc3324b_prof);

        
        $__internal_170dedca7160a267fed51008c04f5c555d3856b26f0f789d9b9fe021e2dd0264->leave($__internal_170dedca7160a267fed51008c04f5c555d3856b26f0f789d9b9fe021e2dd0264_prof);

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
