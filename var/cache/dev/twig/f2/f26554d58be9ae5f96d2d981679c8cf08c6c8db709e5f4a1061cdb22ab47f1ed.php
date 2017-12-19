<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_41746329882c6bf46ed3556061310d163cfc2a114b4a8f1a6418f324b078adcb extends Twig_Template
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
        $__internal_c6f11c43cb177bcadc301e7e119b66ec9d22013e6d6dac26465a9424cfdca381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f11c43cb177bcadc301e7e119b66ec9d22013e6d6dac26465a9424cfdca381->enter($__internal_c6f11c43cb177bcadc301e7e119b66ec9d22013e6d6dac26465a9424cfdca381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_18e5cd6b12958ddff146945990814b8d06cc68a30b3299057b2fc7afbeaf0f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e5cd6b12958ddff146945990814b8d06cc68a30b3299057b2fc7afbeaf0f06->enter($__internal_18e5cd6b12958ddff146945990814b8d06cc68a30b3299057b2fc7afbeaf0f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c6f11c43cb177bcadc301e7e119b66ec9d22013e6d6dac26465a9424cfdca381->leave($__internal_c6f11c43cb177bcadc301e7e119b66ec9d22013e6d6dac26465a9424cfdca381_prof);

        
        $__internal_18e5cd6b12958ddff146945990814b8d06cc68a30b3299057b2fc7afbeaf0f06->leave($__internal_18e5cd6b12958ddff146945990814b8d06cc68a30b3299057b2fc7afbeaf0f06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
