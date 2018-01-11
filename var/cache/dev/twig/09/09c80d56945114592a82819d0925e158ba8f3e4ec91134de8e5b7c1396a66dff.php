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
        $__internal_f863b60a5dd6e924e024a099fb0317973172e3b08894a54933068349b5a53548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f863b60a5dd6e924e024a099fb0317973172e3b08894a54933068349b5a53548->enter($__internal_f863b60a5dd6e924e024a099fb0317973172e3b08894a54933068349b5a53548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_027e22ba74164dc5787660c0850cbda06499c594c2a6685703d3d5a61fcd9002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027e22ba74164dc5787660c0850cbda06499c594c2a6685703d3d5a61fcd9002->enter($__internal_027e22ba74164dc5787660c0850cbda06499c594c2a6685703d3d5a61fcd9002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f863b60a5dd6e924e024a099fb0317973172e3b08894a54933068349b5a53548->leave($__internal_f863b60a5dd6e924e024a099fb0317973172e3b08894a54933068349b5a53548_prof);

        
        $__internal_027e22ba74164dc5787660c0850cbda06499c594c2a6685703d3d5a61fcd9002->leave($__internal_027e22ba74164dc5787660c0850cbda06499c594c2a6685703d3d5a61fcd9002_prof);

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
