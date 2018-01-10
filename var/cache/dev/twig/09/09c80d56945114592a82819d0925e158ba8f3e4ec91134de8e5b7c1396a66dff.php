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
        $__internal_d6cdff01e631ffe2f8ffe69e61d5f2b8b35a0ab9f4e29c513cffa85ce53d975b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6cdff01e631ffe2f8ffe69e61d5f2b8b35a0ab9f4e29c513cffa85ce53d975b->enter($__internal_d6cdff01e631ffe2f8ffe69e61d5f2b8b35a0ab9f4e29c513cffa85ce53d975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4e125fff62b7e7228c6a86733dd4a2637c2eadba0c616089e961ad6456d9c853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e125fff62b7e7228c6a86733dd4a2637c2eadba0c616089e961ad6456d9c853->enter($__internal_4e125fff62b7e7228c6a86733dd4a2637c2eadba0c616089e961ad6456d9c853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d6cdff01e631ffe2f8ffe69e61d5f2b8b35a0ab9f4e29c513cffa85ce53d975b->leave($__internal_d6cdff01e631ffe2f8ffe69e61d5f2b8b35a0ab9f4e29c513cffa85ce53d975b_prof);

        
        $__internal_4e125fff62b7e7228c6a86733dd4a2637c2eadba0c616089e961ad6456d9c853->leave($__internal_4e125fff62b7e7228c6a86733dd4a2637c2eadba0c616089e961ad6456d9c853_prof);

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
