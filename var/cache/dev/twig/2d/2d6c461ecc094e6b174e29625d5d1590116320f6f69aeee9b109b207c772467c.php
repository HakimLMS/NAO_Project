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
        $__internal_283d84426a5bf37e8d70140a53f980b3f4708394aa9d4f32101118559d5abb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283d84426a5bf37e8d70140a53f980b3f4708394aa9d4f32101118559d5abb50->enter($__internal_283d84426a5bf37e8d70140a53f980b3f4708394aa9d4f32101118559d5abb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4b953fc0a7009daf9f0d8ab3210dc3e94ac4d837e620e34d5f73751acc56e6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b953fc0a7009daf9f0d8ab3210dc3e94ac4d837e620e34d5f73751acc56e6cb->enter($__internal_4b953fc0a7009daf9f0d8ab3210dc3e94ac4d837e620e34d5f73751acc56e6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_283d84426a5bf37e8d70140a53f980b3f4708394aa9d4f32101118559d5abb50->leave($__internal_283d84426a5bf37e8d70140a53f980b3f4708394aa9d4f32101118559d5abb50_prof);

        
        $__internal_4b953fc0a7009daf9f0d8ab3210dc3e94ac4d837e620e34d5f73751acc56e6cb->leave($__internal_4b953fc0a7009daf9f0d8ab3210dc3e94ac4d837e620e34d5f73751acc56e6cb_prof);

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
