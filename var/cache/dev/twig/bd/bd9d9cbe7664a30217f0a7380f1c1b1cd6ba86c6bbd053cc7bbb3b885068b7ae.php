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
        $__internal_4b55f43dcc3f0429cb109bbd7225acdec895726137eb3fc476d086abec3bedab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b55f43dcc3f0429cb109bbd7225acdec895726137eb3fc476d086abec3bedab->enter($__internal_4b55f43dcc3f0429cb109bbd7225acdec895726137eb3fc476d086abec3bedab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7e74a544b99663ed970daea9c840beb3f113e8c711bd3b41f7923fa7aba3bb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e74a544b99663ed970daea9c840beb3f113e8c711bd3b41f7923fa7aba3bb7f->enter($__internal_7e74a544b99663ed970daea9c840beb3f113e8c711bd3b41f7923fa7aba3bb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4b55f43dcc3f0429cb109bbd7225acdec895726137eb3fc476d086abec3bedab->leave($__internal_4b55f43dcc3f0429cb109bbd7225acdec895726137eb3fc476d086abec3bedab_prof);

        
        $__internal_7e74a544b99663ed970daea9c840beb3f113e8c711bd3b41f7923fa7aba3bb7f->leave($__internal_7e74a544b99663ed970daea9c840beb3f113e8c711bd3b41f7923fa7aba3bb7f_prof);

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
