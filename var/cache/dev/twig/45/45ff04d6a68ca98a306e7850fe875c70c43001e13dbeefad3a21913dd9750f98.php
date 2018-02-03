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
        $__internal_dbe4b03ad51cb5bef1ba843707daf10ee3b68d47687e3108f3da464e808c1add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe4b03ad51cb5bef1ba843707daf10ee3b68d47687e3108f3da464e808c1add->enter($__internal_dbe4b03ad51cb5bef1ba843707daf10ee3b68d47687e3108f3da464e808c1add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0ce2c47d4a9b17ee15ed643d5361fc56bdaba1561caecb738840334658cc6c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce2c47d4a9b17ee15ed643d5361fc56bdaba1561caecb738840334658cc6c9c->enter($__internal_0ce2c47d4a9b17ee15ed643d5361fc56bdaba1561caecb738840334658cc6c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dbe4b03ad51cb5bef1ba843707daf10ee3b68d47687e3108f3da464e808c1add->leave($__internal_dbe4b03ad51cb5bef1ba843707daf10ee3b68d47687e3108f3da464e808c1add_prof);

        
        $__internal_0ce2c47d4a9b17ee15ed643d5361fc56bdaba1561caecb738840334658cc6c9c->leave($__internal_0ce2c47d4a9b17ee15ed643d5361fc56bdaba1561caecb738840334658cc6c9c_prof);

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
