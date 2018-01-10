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
        $__internal_bf5cebd71dc5f2e877337dba2633f175c30017abbc37313753fddfd8b6841705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5cebd71dc5f2e877337dba2633f175c30017abbc37313753fddfd8b6841705->enter($__internal_bf5cebd71dc5f2e877337dba2633f175c30017abbc37313753fddfd8b6841705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2465d1c1d459d0ba0302ebc1e3c65c8bc7066737a8b5bb39606307eef9dc3490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2465d1c1d459d0ba0302ebc1e3c65c8bc7066737a8b5bb39606307eef9dc3490->enter($__internal_2465d1c1d459d0ba0302ebc1e3c65c8bc7066737a8b5bb39606307eef9dc3490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bf5cebd71dc5f2e877337dba2633f175c30017abbc37313753fddfd8b6841705->leave($__internal_bf5cebd71dc5f2e877337dba2633f175c30017abbc37313753fddfd8b6841705_prof);

        
        $__internal_2465d1c1d459d0ba0302ebc1e3c65c8bc7066737a8b5bb39606307eef9dc3490->leave($__internal_2465d1c1d459d0ba0302ebc1e3c65c8bc7066737a8b5bb39606307eef9dc3490_prof);

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
