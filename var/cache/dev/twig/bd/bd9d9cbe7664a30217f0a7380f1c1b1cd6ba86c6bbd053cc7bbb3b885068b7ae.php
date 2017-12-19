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
        $__internal_bf8d36bfea5c2b301029e57103b15294d901f6eaccf79ece65d4b785b4d6b6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8d36bfea5c2b301029e57103b15294d901f6eaccf79ece65d4b785b4d6b6f3->enter($__internal_bf8d36bfea5c2b301029e57103b15294d901f6eaccf79ece65d4b785b4d6b6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e38750bde26c7c78df4915963d1d3bed4beaec390411606ec7c0dc81a7fe2425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38750bde26c7c78df4915963d1d3bed4beaec390411606ec7c0dc81a7fe2425->enter($__internal_e38750bde26c7c78df4915963d1d3bed4beaec390411606ec7c0dc81a7fe2425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bf8d36bfea5c2b301029e57103b15294d901f6eaccf79ece65d4b785b4d6b6f3->leave($__internal_bf8d36bfea5c2b301029e57103b15294d901f6eaccf79ece65d4b785b4d6b6f3_prof);

        
        $__internal_e38750bde26c7c78df4915963d1d3bed4beaec390411606ec7c0dc81a7fe2425->leave($__internal_e38750bde26c7c78df4915963d1d3bed4beaec390411606ec7c0dc81a7fe2425_prof);

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
