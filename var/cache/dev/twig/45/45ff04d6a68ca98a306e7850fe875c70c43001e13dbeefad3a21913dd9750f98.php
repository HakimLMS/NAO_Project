<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_003e0f0140e53be7130c206136732ad1856f9e32c0bc3dc81ef76081c77eca30 extends Twig_Template
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
        $__internal_fe926d40e42b05b2e71d23c19cc786d30bb8f231d96e7da2424e24756b5c7d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe926d40e42b05b2e71d23c19cc786d30bb8f231d96e7da2424e24756b5c7d13->enter($__internal_fe926d40e42b05b2e71d23c19cc786d30bb8f231d96e7da2424e24756b5c7d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_abf4d7c668751dc660e7d55d46b2b2aaf732c4706cf9b947ff1c84bb8b92af64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf4d7c668751dc660e7d55d46b2b2aaf732c4706cf9b947ff1c84bb8b92af64->enter($__internal_abf4d7c668751dc660e7d55d46b2b2aaf732c4706cf9b947ff1c84bb8b92af64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fe926d40e42b05b2e71d23c19cc786d30bb8f231d96e7da2424e24756b5c7d13->leave($__internal_fe926d40e42b05b2e71d23c19cc786d30bb8f231d96e7da2424e24756b5c7d13_prof);

        
        $__internal_abf4d7c668751dc660e7d55d46b2b2aaf732c4706cf9b947ff1c84bb8b92af64->leave($__internal_abf4d7c668751dc660e7d55d46b2b2aaf732c4706cf9b947ff1c84bb8b92af64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
