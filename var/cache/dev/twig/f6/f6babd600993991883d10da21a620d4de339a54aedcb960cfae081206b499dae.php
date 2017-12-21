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
        $__internal_f1232131d39e38cd474a10bc36cc6062206379421378852c7f6dc74b7e61d759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1232131d39e38cd474a10bc36cc6062206379421378852c7f6dc74b7e61d759->enter($__internal_f1232131d39e38cd474a10bc36cc6062206379421378852c7f6dc74b7e61d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d4ff51bbe315d4181eb3037e2da22fe7d53d6c419aa0f8ccccc13191ee5c4add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ff51bbe315d4181eb3037e2da22fe7d53d6c419aa0f8ccccc13191ee5c4add->enter($__internal_d4ff51bbe315d4181eb3037e2da22fe7d53d6c419aa0f8ccccc13191ee5c4add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f1232131d39e38cd474a10bc36cc6062206379421378852c7f6dc74b7e61d759->leave($__internal_f1232131d39e38cd474a10bc36cc6062206379421378852c7f6dc74b7e61d759_prof);

        
        $__internal_d4ff51bbe315d4181eb3037e2da22fe7d53d6c419aa0f8ccccc13191ee5c4add->leave($__internal_d4ff51bbe315d4181eb3037e2da22fe7d53d6c419aa0f8ccccc13191ee5c4add_prof);

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
