<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_1afb1a3da4eafa88cfb2c177fb9b10f39aa00531b332f798976cab798ea7e7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afb1a3da4eafa88cfb2c177fb9b10f39aa00531b332f798976cab798ea7e7ad->enter($__internal_1afb1a3da4eafa88cfb2c177fb9b10f39aa00531b332f798976cab798ea7e7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fea02669e6fe69626813a682e70d40fe4f8927fa3d3ce88e1088a1cad60c2540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea02669e6fe69626813a682e70d40fe4f8927fa3d3ce88e1088a1cad60c2540->enter($__internal_fea02669e6fe69626813a682e70d40fe4f8927fa3d3ce88e1088a1cad60c2540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1afb1a3da4eafa88cfb2c177fb9b10f39aa00531b332f798976cab798ea7e7ad->leave($__internal_1afb1a3da4eafa88cfb2c177fb9b10f39aa00531b332f798976cab798ea7e7ad_prof);

        
        $__internal_fea02669e6fe69626813a682e70d40fe4f8927fa3d3ce88e1088a1cad60c2540->leave($__internal_fea02669e6fe69626813a682e70d40fe4f8927fa3d3ce88e1088a1cad60c2540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
