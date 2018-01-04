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
        $__internal_1d4f38348a02079873aa32077698888e99a54814f0ece7370c82449d91aa61c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4f38348a02079873aa32077698888e99a54814f0ece7370c82449d91aa61c7->enter($__internal_1d4f38348a02079873aa32077698888e99a54814f0ece7370c82449d91aa61c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a697fe7f38e97ee5d79fa92bee623ba5038d913ba08d44870e88092666a58071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a697fe7f38e97ee5d79fa92bee623ba5038d913ba08d44870e88092666a58071->enter($__internal_a697fe7f38e97ee5d79fa92bee623ba5038d913ba08d44870e88092666a58071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1d4f38348a02079873aa32077698888e99a54814f0ece7370c82449d91aa61c7->leave($__internal_1d4f38348a02079873aa32077698888e99a54814f0ece7370c82449d91aa61c7_prof);

        
        $__internal_a697fe7f38e97ee5d79fa92bee623ba5038d913ba08d44870e88092666a58071->leave($__internal_a697fe7f38e97ee5d79fa92bee623ba5038d913ba08d44870e88092666a58071_prof);

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
