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
        $__internal_1db22a4bb70f0ea1132aa84b57e0c87f4eb50ebd9474906860720a459905f3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db22a4bb70f0ea1132aa84b57e0c87f4eb50ebd9474906860720a459905f3d9->enter($__internal_1db22a4bb70f0ea1132aa84b57e0c87f4eb50ebd9474906860720a459905f3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_73df3e1846ce3836fba53b8ed959168eca71f8b95df62e9491fd9f37a2fcfe93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73df3e1846ce3836fba53b8ed959168eca71f8b95df62e9491fd9f37a2fcfe93->enter($__internal_73df3e1846ce3836fba53b8ed959168eca71f8b95df62e9491fd9f37a2fcfe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1db22a4bb70f0ea1132aa84b57e0c87f4eb50ebd9474906860720a459905f3d9->leave($__internal_1db22a4bb70f0ea1132aa84b57e0c87f4eb50ebd9474906860720a459905f3d9_prof);

        
        $__internal_73df3e1846ce3836fba53b8ed959168eca71f8b95df62e9491fd9f37a2fcfe93->leave($__internal_73df3e1846ce3836fba53b8ed959168eca71f8b95df62e9491fd9f37a2fcfe93_prof);

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
