<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_282989014d51c432269a37484b0f8e2316f4b5df1edf1e3d7410e312b744513d extends Twig_Template
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
        $__internal_45b129f962c54686239038a8990d1e65ab5d3ef0d82cb5af7a9d6406ac623589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b129f962c54686239038a8990d1e65ab5d3ef0d82cb5af7a9d6406ac623589->enter($__internal_45b129f962c54686239038a8990d1e65ab5d3ef0d82cb5af7a9d6406ac623589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_03beedd2980cbb2863a4470064f83d9d7f34523977081f6a728d279ddfa675ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03beedd2980cbb2863a4470064f83d9d7f34523977081f6a728d279ddfa675ed->enter($__internal_03beedd2980cbb2863a4470064f83d9d7f34523977081f6a728d279ddfa675ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_45b129f962c54686239038a8990d1e65ab5d3ef0d82cb5af7a9d6406ac623589->leave($__internal_45b129f962c54686239038a8990d1e65ab5d3ef0d82cb5af7a9d6406ac623589_prof);

        
        $__internal_03beedd2980cbb2863a4470064f83d9d7f34523977081f6a728d279ddfa675ed->leave($__internal_03beedd2980cbb2863a4470064f83d9d7f34523977081f6a728d279ddfa675ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
