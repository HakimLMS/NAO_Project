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
        $__internal_9528db02c8523a7293d2af1609821269202c911c95d4e9a1eed0288ecb7a9636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9528db02c8523a7293d2af1609821269202c911c95d4e9a1eed0288ecb7a9636->enter($__internal_9528db02c8523a7293d2af1609821269202c911c95d4e9a1eed0288ecb7a9636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_030f755238d73dcbaf8cef442af0ec3c9c69f53121acc73871f3580f55b5ce38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030f755238d73dcbaf8cef442af0ec3c9c69f53121acc73871f3580f55b5ce38->enter($__internal_030f755238d73dcbaf8cef442af0ec3c9c69f53121acc73871f3580f55b5ce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9528db02c8523a7293d2af1609821269202c911c95d4e9a1eed0288ecb7a9636->leave($__internal_9528db02c8523a7293d2af1609821269202c911c95d4e9a1eed0288ecb7a9636_prof);

        
        $__internal_030f755238d73dcbaf8cef442af0ec3c9c69f53121acc73871f3580f55b5ce38->leave($__internal_030f755238d73dcbaf8cef442af0ec3c9c69f53121acc73871f3580f55b5ce38_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}