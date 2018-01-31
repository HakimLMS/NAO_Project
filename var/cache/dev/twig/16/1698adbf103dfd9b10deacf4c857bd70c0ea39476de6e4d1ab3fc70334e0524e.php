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
        $__internal_4b71918d672354534d54fdedbd764ab9642e3bafef70fefd0dc1998aeb4396ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b71918d672354534d54fdedbd764ab9642e3bafef70fefd0dc1998aeb4396ab->enter($__internal_4b71918d672354534d54fdedbd764ab9642e3bafef70fefd0dc1998aeb4396ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6a2e6858eade556b4e8a8b679361f0f56d9c103568ed4804891ed21d40948f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2e6858eade556b4e8a8b679361f0f56d9c103568ed4804891ed21d40948f54->enter($__internal_6a2e6858eade556b4e8a8b679361f0f56d9c103568ed4804891ed21d40948f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4b71918d672354534d54fdedbd764ab9642e3bafef70fefd0dc1998aeb4396ab->leave($__internal_4b71918d672354534d54fdedbd764ab9642e3bafef70fefd0dc1998aeb4396ab_prof);

        
        $__internal_6a2e6858eade556b4e8a8b679361f0f56d9c103568ed4804891ed21d40948f54->leave($__internal_6a2e6858eade556b4e8a8b679361f0f56d9c103568ed4804891ed21d40948f54_prof);

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
