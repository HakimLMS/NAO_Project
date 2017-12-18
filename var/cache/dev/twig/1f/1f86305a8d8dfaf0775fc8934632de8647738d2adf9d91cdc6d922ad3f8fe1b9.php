<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3741b9de6cd1e4bc7140b3204a4b0d242ad6843666c9367c068344487fc3574a extends Twig_Template
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
        $__internal_1ec2594e73cc552a50f2eeb5887bec3d639027b5daa0eca120216ab3aadceeb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec2594e73cc552a50f2eeb5887bec3d639027b5daa0eca120216ab3aadceeb5->enter($__internal_1ec2594e73cc552a50f2eeb5887bec3d639027b5daa0eca120216ab3aadceeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_469831ca9c670e9d937a4984b57c07e4c3e658bf4e42c0e012a7a3d39ac78ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469831ca9c670e9d937a4984b57c07e4c3e658bf4e42c0e012a7a3d39ac78ecd->enter($__internal_469831ca9c670e9d937a4984b57c07e4c3e658bf4e42c0e012a7a3d39ac78ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1ec2594e73cc552a50f2eeb5887bec3d639027b5daa0eca120216ab3aadceeb5->leave($__internal_1ec2594e73cc552a50f2eeb5887bec3d639027b5daa0eca120216ab3aadceeb5_prof);

        
        $__internal_469831ca9c670e9d937a4984b57c07e4c3e658bf4e42c0e012a7a3d39ac78ecd->leave($__internal_469831ca9c670e9d937a4984b57c07e4c3e658bf4e42c0e012a7a3d39ac78ecd_prof);

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
