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
        $__internal_d323abde28354ad9e0acbddb1678201a4dba1268d1f9d0b035cdfcc0800a2b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d323abde28354ad9e0acbddb1678201a4dba1268d1f9d0b035cdfcc0800a2b78->enter($__internal_d323abde28354ad9e0acbddb1678201a4dba1268d1f9d0b035cdfcc0800a2b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8e382ef3103cc467afaf079db4d24c078e1cc5e2cb42b17bfda56f68f86e023e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e382ef3103cc467afaf079db4d24c078e1cc5e2cb42b17bfda56f68f86e023e->enter($__internal_8e382ef3103cc467afaf079db4d24c078e1cc5e2cb42b17bfda56f68f86e023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d323abde28354ad9e0acbddb1678201a4dba1268d1f9d0b035cdfcc0800a2b78->leave($__internal_d323abde28354ad9e0acbddb1678201a4dba1268d1f9d0b035cdfcc0800a2b78_prof);

        
        $__internal_8e382ef3103cc467afaf079db4d24c078e1cc5e2cb42b17bfda56f68f86e023e->leave($__internal_8e382ef3103cc467afaf079db4d24c078e1cc5e2cb42b17bfda56f68f86e023e_prof);

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
