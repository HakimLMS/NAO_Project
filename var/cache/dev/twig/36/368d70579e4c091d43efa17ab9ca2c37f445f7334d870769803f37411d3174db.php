<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_001a4b7278199cfc9dfd17b8e84e33176d84bede6b8f4f4794da8b1d0943846b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001a4b7278199cfc9dfd17b8e84e33176d84bede6b8f4f4794da8b1d0943846b->enter($__internal_001a4b7278199cfc9dfd17b8e84e33176d84bede6b8f4f4794da8b1d0943846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_10f2f53ffc04366ba9d474a1a38ec72e2a4e154a2c0a3f44e7b25c9a06289727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f2f53ffc04366ba9d474a1a38ec72e2a4e154a2c0a3f44e7b25c9a06289727->enter($__internal_10f2f53ffc04366ba9d474a1a38ec72e2a4e154a2c0a3f44e7b25c9a06289727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_001a4b7278199cfc9dfd17b8e84e33176d84bede6b8f4f4794da8b1d0943846b->leave($__internal_001a4b7278199cfc9dfd17b8e84e33176d84bede6b8f4f4794da8b1d0943846b_prof);

        
        $__internal_10f2f53ffc04366ba9d474a1a38ec72e2a4e154a2c0a3f44e7b25c9a06289727->leave($__internal_10f2f53ffc04366ba9d474a1a38ec72e2a4e154a2c0a3f44e7b25c9a06289727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
