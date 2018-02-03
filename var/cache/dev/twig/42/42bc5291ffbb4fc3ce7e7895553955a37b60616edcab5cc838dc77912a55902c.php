<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5e4ed48d35bdc7bb92ab8ee323316b698ec1785b2e0c3c919ff248520f068740 extends Twig_Template
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
        $__internal_961dbad57adcb640ed24d8494b211aa9f53cdead3c35a9741c38719f44cf9195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961dbad57adcb640ed24d8494b211aa9f53cdead3c35a9741c38719f44cf9195->enter($__internal_961dbad57adcb640ed24d8494b211aa9f53cdead3c35a9741c38719f44cf9195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cbcc45bbbb98ad0ecef9f0ded5a2c2eba9746a55d9d6f9c182b0f9680e58ee25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcc45bbbb98ad0ecef9f0ded5a2c2eba9746a55d9d6f9c182b0f9680e58ee25->enter($__internal_cbcc45bbbb98ad0ecef9f0ded5a2c2eba9746a55d9d6f9c182b0f9680e58ee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_961dbad57adcb640ed24d8494b211aa9f53cdead3c35a9741c38719f44cf9195->leave($__internal_961dbad57adcb640ed24d8494b211aa9f53cdead3c35a9741c38719f44cf9195_prof);

        
        $__internal_cbcc45bbbb98ad0ecef9f0ded5a2c2eba9746a55d9d6f9c182b0f9680e58ee25->leave($__internal_cbcc45bbbb98ad0ecef9f0ded5a2c2eba9746a55d9d6f9c182b0f9680e58ee25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
