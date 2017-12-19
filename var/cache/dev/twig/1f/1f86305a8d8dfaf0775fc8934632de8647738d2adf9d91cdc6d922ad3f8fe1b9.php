<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3741b9de6cd1e4bc7140b3204a4b0d242ad6843666c9367c068344487fc3574a extends Twig_Template
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
        $__internal_121a1ec72261eb3205e5ed646faf2b4b551319b14c9a8022de1a09fd38f7a901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121a1ec72261eb3205e5ed646faf2b4b551319b14c9a8022de1a09fd38f7a901->enter($__internal_121a1ec72261eb3205e5ed646faf2b4b551319b14c9a8022de1a09fd38f7a901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_de937128b2ce9d68f95639c0704bd3b2c98a5a524cb7ad01e12c63c2a791e418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de937128b2ce9d68f95639c0704bd3b2c98a5a524cb7ad01e12c63c2a791e418->enter($__internal_de937128b2ce9d68f95639c0704bd3b2c98a5a524cb7ad01e12c63c2a791e418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_121a1ec72261eb3205e5ed646faf2b4b551319b14c9a8022de1a09fd38f7a901->leave($__internal_121a1ec72261eb3205e5ed646faf2b4b551319b14c9a8022de1a09fd38f7a901_prof);

        
        $__internal_de937128b2ce9d68f95639c0704bd3b2c98a5a524cb7ad01e12c63c2a791e418->leave($__internal_de937128b2ce9d68f95639c0704bd3b2c98a5a524cb7ad01e12c63c2a791e418_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
