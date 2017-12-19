<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_73a0cab12b70b9c06ff7be7a6bd319772a39b28fd59a29532e966fc83b2cc1cb extends Twig_Template
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
        $__internal_d7c7050ca2248730a97d519e6847928640374602e60d45e777a5a276d8a287ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c7050ca2248730a97d519e6847928640374602e60d45e777a5a276d8a287ec->enter($__internal_d7c7050ca2248730a97d519e6847928640374602e60d45e777a5a276d8a287ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_734d9befe0debb3bb738ceba551ffc7eefefac0242c07e6198914b857739beed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734d9befe0debb3bb738ceba551ffc7eefefac0242c07e6198914b857739beed->enter($__internal_734d9befe0debb3bb738ceba551ffc7eefefac0242c07e6198914b857739beed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d7c7050ca2248730a97d519e6847928640374602e60d45e777a5a276d8a287ec->leave($__internal_d7c7050ca2248730a97d519e6847928640374602e60d45e777a5a276d8a287ec_prof);

        
        $__internal_734d9befe0debb3bb738ceba551ffc7eefefac0242c07e6198914b857739beed->leave($__internal_734d9befe0debb3bb738ceba551ffc7eefefac0242c07e6198914b857739beed_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
