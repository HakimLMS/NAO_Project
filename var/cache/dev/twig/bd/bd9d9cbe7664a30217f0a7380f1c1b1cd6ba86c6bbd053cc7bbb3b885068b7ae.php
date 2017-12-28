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
        $__internal_7e69185d1e36a32b3e919ab7f1af2fa36387f0edd0fc427f6190def07be842a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e69185d1e36a32b3e919ab7f1af2fa36387f0edd0fc427f6190def07be842a3->enter($__internal_7e69185d1e36a32b3e919ab7f1af2fa36387f0edd0fc427f6190def07be842a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_02b583fbcce740df47ac6c8dcc791e7d9e81d5df524be7f6051791490bd97609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b583fbcce740df47ac6c8dcc791e7d9e81d5df524be7f6051791490bd97609->enter($__internal_02b583fbcce740df47ac6c8dcc791e7d9e81d5df524be7f6051791490bd97609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7e69185d1e36a32b3e919ab7f1af2fa36387f0edd0fc427f6190def07be842a3->leave($__internal_7e69185d1e36a32b3e919ab7f1af2fa36387f0edd0fc427f6190def07be842a3_prof);

        
        $__internal_02b583fbcce740df47ac6c8dcc791e7d9e81d5df524be7f6051791490bd97609->leave($__internal_02b583fbcce740df47ac6c8dcc791e7d9e81d5df524be7f6051791490bd97609_prof);

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
