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
        $__internal_4eef0f91cf6278808b0960144b95f009eea9615024a828478c3aabb1c02de19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eef0f91cf6278808b0960144b95f009eea9615024a828478c3aabb1c02de19e->enter($__internal_4eef0f91cf6278808b0960144b95f009eea9615024a828478c3aabb1c02de19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_17c21d1b0bccb25b33b3d2d176a325d7e4c25903781f77cd3d6b319997b70938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c21d1b0bccb25b33b3d2d176a325d7e4c25903781f77cd3d6b319997b70938->enter($__internal_17c21d1b0bccb25b33b3d2d176a325d7e4c25903781f77cd3d6b319997b70938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4eef0f91cf6278808b0960144b95f009eea9615024a828478c3aabb1c02de19e->leave($__internal_4eef0f91cf6278808b0960144b95f009eea9615024a828478c3aabb1c02de19e_prof);

        
        $__internal_17c21d1b0bccb25b33b3d2d176a325d7e4c25903781f77cd3d6b319997b70938->leave($__internal_17c21d1b0bccb25b33b3d2d176a325d7e4c25903781f77cd3d6b319997b70938_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
