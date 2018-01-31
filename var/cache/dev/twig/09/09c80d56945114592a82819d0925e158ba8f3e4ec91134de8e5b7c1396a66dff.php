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
        $__internal_32ec0dbb47281f10c0225886758d398d1ae30dabf26891b671d54acb09ca47db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ec0dbb47281f10c0225886758d398d1ae30dabf26891b671d54acb09ca47db->enter($__internal_32ec0dbb47281f10c0225886758d398d1ae30dabf26891b671d54acb09ca47db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_846e605b9e68f2d8c85647c429635b678cdc437eb5bd328ed2859ed13cd85c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846e605b9e68f2d8c85647c429635b678cdc437eb5bd328ed2859ed13cd85c18->enter($__internal_846e605b9e68f2d8c85647c429635b678cdc437eb5bd328ed2859ed13cd85c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_32ec0dbb47281f10c0225886758d398d1ae30dabf26891b671d54acb09ca47db->leave($__internal_32ec0dbb47281f10c0225886758d398d1ae30dabf26891b671d54acb09ca47db_prof);

        
        $__internal_846e605b9e68f2d8c85647c429635b678cdc437eb5bd328ed2859ed13cd85c18->leave($__internal_846e605b9e68f2d8c85647c429635b678cdc437eb5bd328ed2859ed13cd85c18_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
