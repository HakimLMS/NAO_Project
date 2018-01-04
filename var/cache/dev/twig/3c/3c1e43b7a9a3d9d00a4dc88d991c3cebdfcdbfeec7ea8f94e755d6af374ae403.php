<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_aa78e339e33de094840b0a6929674e6e6a7232e9623bfc8962991eac816a1833 extends Twig_Template
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
        $__internal_adfaf83a041e36b88b347c182b02321e5012341fda723ea67cd7dca08bb45da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfaf83a041e36b88b347c182b02321e5012341fda723ea67cd7dca08bb45da9->enter($__internal_adfaf83a041e36b88b347c182b02321e5012341fda723ea67cd7dca08bb45da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ac36129de167a1aedbdc9542b0293d896234270ab47a305e88b392e1f09a9993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac36129de167a1aedbdc9542b0293d896234270ab47a305e88b392e1f09a9993->enter($__internal_ac36129de167a1aedbdc9542b0293d896234270ab47a305e88b392e1f09a9993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_adfaf83a041e36b88b347c182b02321e5012341fda723ea67cd7dca08bb45da9->leave($__internal_adfaf83a041e36b88b347c182b02321e5012341fda723ea67cd7dca08bb45da9_prof);

        
        $__internal_ac36129de167a1aedbdc9542b0293d896234270ab47a305e88b392e1f09a9993->leave($__internal_ac36129de167a1aedbdc9542b0293d896234270ab47a305e88b392e1f09a9993_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
