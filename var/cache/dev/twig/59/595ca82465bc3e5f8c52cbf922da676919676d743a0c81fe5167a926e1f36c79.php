<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_e37ff1ab4c05d921600963ff2a92f18d6234c68d98cf5b736f28417f2c8a83a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37ff1ab4c05d921600963ff2a92f18d6234c68d98cf5b736f28417f2c8a83a9->enter($__internal_e37ff1ab4c05d921600963ff2a92f18d6234c68d98cf5b736f28417f2c8a83a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c0377d22c7bfcb7276a456c8cb288ee90584bb8d76cd575bc9ed380e51dbc674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0377d22c7bfcb7276a456c8cb288ee90584bb8d76cd575bc9ed380e51dbc674->enter($__internal_c0377d22c7bfcb7276a456c8cb288ee90584bb8d76cd575bc9ed380e51dbc674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e37ff1ab4c05d921600963ff2a92f18d6234c68d98cf5b736f28417f2c8a83a9->leave($__internal_e37ff1ab4c05d921600963ff2a92f18d6234c68d98cf5b736f28417f2c8a83a9_prof);

        
        $__internal_c0377d22c7bfcb7276a456c8cb288ee90584bb8d76cd575bc9ed380e51dbc674->leave($__internal_c0377d22c7bfcb7276a456c8cb288ee90584bb8d76cd575bc9ed380e51dbc674_prof);

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
