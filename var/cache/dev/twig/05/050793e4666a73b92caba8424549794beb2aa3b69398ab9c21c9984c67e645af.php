<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e4b3ae1c64899f7845e234bbf0396b68377ded4f49bc0fc844c6c736c78980e2 extends Twig_Template
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
        $__internal_f0b7ff5e49d835dd2b35c804733ad98ebe5ae74f3a1cf128c18d6e93ca40fff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b7ff5e49d835dd2b35c804733ad98ebe5ae74f3a1cf128c18d6e93ca40fff4->enter($__internal_f0b7ff5e49d835dd2b35c804733ad98ebe5ae74f3a1cf128c18d6e93ca40fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_93604b0959804c099dd2d656454f6f1f2a4783eba702afbc42129a2e39ec0696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93604b0959804c099dd2d656454f6f1f2a4783eba702afbc42129a2e39ec0696->enter($__internal_93604b0959804c099dd2d656454f6f1f2a4783eba702afbc42129a2e39ec0696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f0b7ff5e49d835dd2b35c804733ad98ebe5ae74f3a1cf128c18d6e93ca40fff4->leave($__internal_f0b7ff5e49d835dd2b35c804733ad98ebe5ae74f3a1cf128c18d6e93ca40fff4_prof);

        
        $__internal_93604b0959804c099dd2d656454f6f1f2a4783eba702afbc42129a2e39ec0696->leave($__internal_93604b0959804c099dd2d656454f6f1f2a4783eba702afbc42129a2e39ec0696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
