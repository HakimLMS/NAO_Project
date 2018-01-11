<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_701f661fcdd31a865223083f053b5e985d5fb3afddce8051cf300aa6c3714abc extends Twig_Template
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
        $__internal_9b2f06679b624e8f2ac7c3b89705631fc3c336465bc35663f563e10c668c128a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2f06679b624e8f2ac7c3b89705631fc3c336465bc35663f563e10c668c128a->enter($__internal_9b2f06679b624e8f2ac7c3b89705631fc3c336465bc35663f563e10c668c128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1719efe132f5bd851c11627165ab4e7a3c788eff5519322c6b597e436b44fdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1719efe132f5bd851c11627165ab4e7a3c788eff5519322c6b597e436b44fdac->enter($__internal_1719efe132f5bd851c11627165ab4e7a3c788eff5519322c6b597e436b44fdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9b2f06679b624e8f2ac7c3b89705631fc3c336465bc35663f563e10c668c128a->leave($__internal_9b2f06679b624e8f2ac7c3b89705631fc3c336465bc35663f563e10c668c128a_prof);

        
        $__internal_1719efe132f5bd851c11627165ab4e7a3c788eff5519322c6b597e436b44fdac->leave($__internal_1719efe132f5bd851c11627165ab4e7a3c788eff5519322c6b597e436b44fdac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
