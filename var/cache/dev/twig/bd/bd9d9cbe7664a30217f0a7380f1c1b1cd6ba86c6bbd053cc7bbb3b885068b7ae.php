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
        $__internal_19b9144f8b8b7c197d4e47ef81b13ecd7577b42a4eb9baf885b16e80e469ecdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b9144f8b8b7c197d4e47ef81b13ecd7577b42a4eb9baf885b16e80e469ecdf->enter($__internal_19b9144f8b8b7c197d4e47ef81b13ecd7577b42a4eb9baf885b16e80e469ecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_63c0342fa9856fb2b9cb5cf5d80327267bd9750f4cdd18a544f88bd426449444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c0342fa9856fb2b9cb5cf5d80327267bd9750f4cdd18a544f88bd426449444->enter($__internal_63c0342fa9856fb2b9cb5cf5d80327267bd9750f4cdd18a544f88bd426449444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_19b9144f8b8b7c197d4e47ef81b13ecd7577b42a4eb9baf885b16e80e469ecdf->leave($__internal_19b9144f8b8b7c197d4e47ef81b13ecd7577b42a4eb9baf885b16e80e469ecdf_prof);

        
        $__internal_63c0342fa9856fb2b9cb5cf5d80327267bd9750f4cdd18a544f88bd426449444->leave($__internal_63c0342fa9856fb2b9cb5cf5d80327267bd9750f4cdd18a544f88bd426449444_prof);

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
