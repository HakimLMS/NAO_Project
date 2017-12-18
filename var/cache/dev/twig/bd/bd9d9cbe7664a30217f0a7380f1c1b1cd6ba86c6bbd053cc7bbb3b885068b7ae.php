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
        $__internal_2da410737df91753532147c08c3cdd330aa68325893bc73e369a9b0120b6dfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da410737df91753532147c08c3cdd330aa68325893bc73e369a9b0120b6dfeb->enter($__internal_2da410737df91753532147c08c3cdd330aa68325893bc73e369a9b0120b6dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_81e9143c1d8628aeb026c9a29bcda798e86d9de22b428e11a9570bdf0dbfa37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e9143c1d8628aeb026c9a29bcda798e86d9de22b428e11a9570bdf0dbfa37e->enter($__internal_81e9143c1d8628aeb026c9a29bcda798e86d9de22b428e11a9570bdf0dbfa37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2da410737df91753532147c08c3cdd330aa68325893bc73e369a9b0120b6dfeb->leave($__internal_2da410737df91753532147c08c3cdd330aa68325893bc73e369a9b0120b6dfeb_prof);

        
        $__internal_81e9143c1d8628aeb026c9a29bcda798e86d9de22b428e11a9570bdf0dbfa37e->leave($__internal_81e9143c1d8628aeb026c9a29bcda798e86d9de22b428e11a9570bdf0dbfa37e_prof);

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
