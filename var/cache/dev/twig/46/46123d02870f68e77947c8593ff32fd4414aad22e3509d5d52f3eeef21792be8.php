<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9befff9c36ecb304a16f585a30c19f1a4d025f7481da052bc428276aea79cb57 extends Twig_Template
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
        $__internal_194bb7cf4e4f23dba094f28f885098bc3a80dd5ac27d8df0214b68cc71411739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194bb7cf4e4f23dba094f28f885098bc3a80dd5ac27d8df0214b68cc71411739->enter($__internal_194bb7cf4e4f23dba094f28f885098bc3a80dd5ac27d8df0214b68cc71411739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5c8f7350094327adf721d920346268367d120ec1d53999bb63e97f5981ee9456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8f7350094327adf721d920346268367d120ec1d53999bb63e97f5981ee9456->enter($__internal_5c8f7350094327adf721d920346268367d120ec1d53999bb63e97f5981ee9456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_194bb7cf4e4f23dba094f28f885098bc3a80dd5ac27d8df0214b68cc71411739->leave($__internal_194bb7cf4e4f23dba094f28f885098bc3a80dd5ac27d8df0214b68cc71411739_prof);

        
        $__internal_5c8f7350094327adf721d920346268367d120ec1d53999bb63e97f5981ee9456->leave($__internal_5c8f7350094327adf721d920346268367d120ec1d53999bb63e97f5981ee9456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
