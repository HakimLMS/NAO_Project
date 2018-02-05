<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_75fa465d4890385095c7a13e9218557ab084e619c3bd9681658371e4b229de04 extends Twig_Template
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
        $__internal_8c12a28529393e82f8c153c0580db37904fa06fb0be34c830d9872512ff06878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c12a28529393e82f8c153c0580db37904fa06fb0be34c830d9872512ff06878->enter($__internal_8c12a28529393e82f8c153c0580db37904fa06fb0be34c830d9872512ff06878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b1f213bcdfb41dd250ee33707991746ec3060045e9014d84f8232bfbe7cd01e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f213bcdfb41dd250ee33707991746ec3060045e9014d84f8232bfbe7cd01e2->enter($__internal_b1f213bcdfb41dd250ee33707991746ec3060045e9014d84f8232bfbe7cd01e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8c12a28529393e82f8c153c0580db37904fa06fb0be34c830d9872512ff06878->leave($__internal_8c12a28529393e82f8c153c0580db37904fa06fb0be34c830d9872512ff06878_prof);

        
        $__internal_b1f213bcdfb41dd250ee33707991746ec3060045e9014d84f8232bfbe7cd01e2->leave($__internal_b1f213bcdfb41dd250ee33707991746ec3060045e9014d84f8232bfbe7cd01e2_prof);

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
