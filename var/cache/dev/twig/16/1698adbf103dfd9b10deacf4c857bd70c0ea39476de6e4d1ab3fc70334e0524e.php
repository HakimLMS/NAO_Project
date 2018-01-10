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
        $__internal_01781a2938e8af7f432635a90b25476804ce7735a4dbf773593cfcf533ec4a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01781a2938e8af7f432635a90b25476804ce7735a4dbf773593cfcf533ec4a08->enter($__internal_01781a2938e8af7f432635a90b25476804ce7735a4dbf773593cfcf533ec4a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fb227a0852422f77f215e7bcb3c01110f15106aea3eb50a887b88255c571219b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb227a0852422f77f215e7bcb3c01110f15106aea3eb50a887b88255c571219b->enter($__internal_fb227a0852422f77f215e7bcb3c01110f15106aea3eb50a887b88255c571219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_01781a2938e8af7f432635a90b25476804ce7735a4dbf773593cfcf533ec4a08->leave($__internal_01781a2938e8af7f432635a90b25476804ce7735a4dbf773593cfcf533ec4a08_prof);

        
        $__internal_fb227a0852422f77f215e7bcb3c01110f15106aea3eb50a887b88255c571219b->leave($__internal_fb227a0852422f77f215e7bcb3c01110f15106aea3eb50a887b88255c571219b_prof);

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
