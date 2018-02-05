<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea82829497568c692d3504e62b7d3a21ce773202c79e898f0d826c70f2df997a extends Twig_Template
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
        $__internal_a60aec4aacceb7516d513b2f3b552a19ccb1840ebe0783866e77bb81383d5e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60aec4aacceb7516d513b2f3b552a19ccb1840ebe0783866e77bb81383d5e78->enter($__internal_a60aec4aacceb7516d513b2f3b552a19ccb1840ebe0783866e77bb81383d5e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d7a455ad7217572ea29e6c8f8d5a2cc66baeadcedbba966e6eeb1f8f4e64f600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a455ad7217572ea29e6c8f8d5a2cc66baeadcedbba966e6eeb1f8f4e64f600->enter($__internal_d7a455ad7217572ea29e6c8f8d5a2cc66baeadcedbba966e6eeb1f8f4e64f600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a60aec4aacceb7516d513b2f3b552a19ccb1840ebe0783866e77bb81383d5e78->leave($__internal_a60aec4aacceb7516d513b2f3b552a19ccb1840ebe0783866e77bb81383d5e78_prof);

        
        $__internal_d7a455ad7217572ea29e6c8f8d5a2cc66baeadcedbba966e6eeb1f8f4e64f600->leave($__internal_d7a455ad7217572ea29e6c8f8d5a2cc66baeadcedbba966e6eeb1f8f4e64f600_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
