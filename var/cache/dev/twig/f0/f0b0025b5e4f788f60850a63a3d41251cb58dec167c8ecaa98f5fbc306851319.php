<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_80d02f63201924a459e27289518963361ddd8007a9bf00e607f14050e743b37a extends Twig_Template
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
        $__internal_06f958c56764b7b1de6329dc330caff22f97a5723f56d3dd8c533d5a0874838d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f958c56764b7b1de6329dc330caff22f97a5723f56d3dd8c533d5a0874838d->enter($__internal_06f958c56764b7b1de6329dc330caff22f97a5723f56d3dd8c533d5a0874838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3f89b51bfc0828802a7993196459f68ca7497696927f5f5af2dd485874ed5450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f89b51bfc0828802a7993196459f68ca7497696927f5f5af2dd485874ed5450->enter($__internal_3f89b51bfc0828802a7993196459f68ca7497696927f5f5af2dd485874ed5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_06f958c56764b7b1de6329dc330caff22f97a5723f56d3dd8c533d5a0874838d->leave($__internal_06f958c56764b7b1de6329dc330caff22f97a5723f56d3dd8c533d5a0874838d_prof);

        
        $__internal_3f89b51bfc0828802a7993196459f68ca7497696927f5f5af2dd485874ed5450->leave($__internal_3f89b51bfc0828802a7993196459f68ca7497696927f5f5af2dd485874ed5450_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
