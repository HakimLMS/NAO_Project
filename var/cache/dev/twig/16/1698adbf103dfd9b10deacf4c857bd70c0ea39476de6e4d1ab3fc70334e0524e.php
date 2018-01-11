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
        $__internal_e72be322bf58714425101c119298513a1a3bc475672d1b0a01cdef4a3361daf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72be322bf58714425101c119298513a1a3bc475672d1b0a01cdef4a3361daf6->enter($__internal_e72be322bf58714425101c119298513a1a3bc475672d1b0a01cdef4a3361daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_aade1aac0a25a6f852d1d36dd18342db10b80962c2192864e976ad6ea2667b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aade1aac0a25a6f852d1d36dd18342db10b80962c2192864e976ad6ea2667b4b->enter($__internal_aade1aac0a25a6f852d1d36dd18342db10b80962c2192864e976ad6ea2667b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e72be322bf58714425101c119298513a1a3bc475672d1b0a01cdef4a3361daf6->leave($__internal_e72be322bf58714425101c119298513a1a3bc475672d1b0a01cdef4a3361daf6_prof);

        
        $__internal_aade1aac0a25a6f852d1d36dd18342db10b80962c2192864e976ad6ea2667b4b->leave($__internal_aade1aac0a25a6f852d1d36dd18342db10b80962c2192864e976ad6ea2667b4b_prof);

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
