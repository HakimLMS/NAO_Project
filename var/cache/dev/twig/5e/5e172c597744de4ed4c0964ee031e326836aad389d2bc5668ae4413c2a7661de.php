<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e710190d82739942928179f96cb938533150158cf3c564580d1af243efc35dd6 extends Twig_Template
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
        $__internal_8f8dbdb70dda29fd6785d0489bd22ad1f0b1d9c0f171de6a5bdb4ee9f32a6916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8dbdb70dda29fd6785d0489bd22ad1f0b1d9c0f171de6a5bdb4ee9f32a6916->enter($__internal_8f8dbdb70dda29fd6785d0489bd22ad1f0b1d9c0f171de6a5bdb4ee9f32a6916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6c2d8553ad3b13844c3df7889151d37d948d0bc8d8b72b9ed5ceabb63fa91062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2d8553ad3b13844c3df7889151d37d948d0bc8d8b72b9ed5ceabb63fa91062->enter($__internal_6c2d8553ad3b13844c3df7889151d37d948d0bc8d8b72b9ed5ceabb63fa91062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8f8dbdb70dda29fd6785d0489bd22ad1f0b1d9c0f171de6a5bdb4ee9f32a6916->leave($__internal_8f8dbdb70dda29fd6785d0489bd22ad1f0b1d9c0f171de6a5bdb4ee9f32a6916_prof);

        
        $__internal_6c2d8553ad3b13844c3df7889151d37d948d0bc8d8b72b9ed5ceabb63fa91062->leave($__internal_6c2d8553ad3b13844c3df7889151d37d948d0bc8d8b72b9ed5ceabb63fa91062_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
