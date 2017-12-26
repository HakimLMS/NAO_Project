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
        $__internal_5dea3ba67755d61b9d9bb12339170306a47bd5a5eaa171e6b0ba3c6dabc3f3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dea3ba67755d61b9d9bb12339170306a47bd5a5eaa171e6b0ba3c6dabc3f3ca->enter($__internal_5dea3ba67755d61b9d9bb12339170306a47bd5a5eaa171e6b0ba3c6dabc3f3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b8b5bf491d41463099a8fc5a3bd7eed5d0d040ba4abbd1aa5595b1f12270942b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b5bf491d41463099a8fc5a3bd7eed5d0d040ba4abbd1aa5595b1f12270942b->enter($__internal_b8b5bf491d41463099a8fc5a3bd7eed5d0d040ba4abbd1aa5595b1f12270942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5dea3ba67755d61b9d9bb12339170306a47bd5a5eaa171e6b0ba3c6dabc3f3ca->leave($__internal_5dea3ba67755d61b9d9bb12339170306a47bd5a5eaa171e6b0ba3c6dabc3f3ca_prof);

        
        $__internal_b8b5bf491d41463099a8fc5a3bd7eed5d0d040ba4abbd1aa5595b1f12270942b->leave($__internal_b8b5bf491d41463099a8fc5a3bd7eed5d0d040ba4abbd1aa5595b1f12270942b_prof);

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
