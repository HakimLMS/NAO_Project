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
        $__internal_43f5fe609bd2c9dcc6a2e0e0244dc5efd989c12f236129739d9f5eff816f558a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f5fe609bd2c9dcc6a2e0e0244dc5efd989c12f236129739d9f5eff816f558a->enter($__internal_43f5fe609bd2c9dcc6a2e0e0244dc5efd989c12f236129739d9f5eff816f558a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bd50e05e15f9f5618fe23159192b7a4f0d052025cd217165e6b14bceee696118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd50e05e15f9f5618fe23159192b7a4f0d052025cd217165e6b14bceee696118->enter($__internal_bd50e05e15f9f5618fe23159192b7a4f0d052025cd217165e6b14bceee696118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_43f5fe609bd2c9dcc6a2e0e0244dc5efd989c12f236129739d9f5eff816f558a->leave($__internal_43f5fe609bd2c9dcc6a2e0e0244dc5efd989c12f236129739d9f5eff816f558a_prof);

        
        $__internal_bd50e05e15f9f5618fe23159192b7a4f0d052025cd217165e6b14bceee696118->leave($__internal_bd50e05e15f9f5618fe23159192b7a4f0d052025cd217165e6b14bceee696118_prof);

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
