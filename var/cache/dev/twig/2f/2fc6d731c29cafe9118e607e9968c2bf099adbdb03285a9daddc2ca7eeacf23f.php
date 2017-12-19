<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_87dd8a5fa973cccffc6c518901a6877f3058045d699583ca5466004d6d6376a8 extends Twig_Template
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
        $__internal_bb59d04b97590a84b2c951fdbdbec96d66c68d3ffab421a51291ad8efbb77bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb59d04b97590a84b2c951fdbdbec96d66c68d3ffab421a51291ad8efbb77bb5->enter($__internal_bb59d04b97590a84b2c951fdbdbec96d66c68d3ffab421a51291ad8efbb77bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3fa15f1eb7915805f1747ab6edceb6e8df12032a4816dc96c3fe425737a586d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa15f1eb7915805f1747ab6edceb6e8df12032a4816dc96c3fe425737a586d3->enter($__internal_3fa15f1eb7915805f1747ab6edceb6e8df12032a4816dc96c3fe425737a586d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bb59d04b97590a84b2c951fdbdbec96d66c68d3ffab421a51291ad8efbb77bb5->leave($__internal_bb59d04b97590a84b2c951fdbdbec96d66c68d3ffab421a51291ad8efbb77bb5_prof);

        
        $__internal_3fa15f1eb7915805f1747ab6edceb6e8df12032a4816dc96c3fe425737a586d3->leave($__internal_3fa15f1eb7915805f1747ab6edceb6e8df12032a4816dc96c3fe425737a586d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
