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
        $__internal_f32d9a134aff69aa136c5e99a096a37b166ef871d1901cd020075f70b080ff81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32d9a134aff69aa136c5e99a096a37b166ef871d1901cd020075f70b080ff81->enter($__internal_f32d9a134aff69aa136c5e99a096a37b166ef871d1901cd020075f70b080ff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_aedaa048b4ca6352c8379bd0ea5391840e9cdaa9a034c0cb47ab0fd6af410b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedaa048b4ca6352c8379bd0ea5391840e9cdaa9a034c0cb47ab0fd6af410b6e->enter($__internal_aedaa048b4ca6352c8379bd0ea5391840e9cdaa9a034c0cb47ab0fd6af410b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f32d9a134aff69aa136c5e99a096a37b166ef871d1901cd020075f70b080ff81->leave($__internal_f32d9a134aff69aa136c5e99a096a37b166ef871d1901cd020075f70b080ff81_prof);

        
        $__internal_aedaa048b4ca6352c8379bd0ea5391840e9cdaa9a034c0cb47ab0fd6af410b6e->leave($__internal_aedaa048b4ca6352c8379bd0ea5391840e9cdaa9a034c0cb47ab0fd6af410b6e_prof);

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