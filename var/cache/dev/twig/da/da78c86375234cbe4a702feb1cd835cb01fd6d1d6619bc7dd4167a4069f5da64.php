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
        $__internal_dd199de0782fae5c35bd5120aa118410393856a6469541743e0f2eb9277c2ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd199de0782fae5c35bd5120aa118410393856a6469541743e0f2eb9277c2ded->enter($__internal_dd199de0782fae5c35bd5120aa118410393856a6469541743e0f2eb9277c2ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_31c22b764cc1c7cb84774a4e7de766715f8ca8fef4c9588ac589c18f4c105fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c22b764cc1c7cb84774a4e7de766715f8ca8fef4c9588ac589c18f4c105fcc->enter($__internal_31c22b764cc1c7cb84774a4e7de766715f8ca8fef4c9588ac589c18f4c105fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_dd199de0782fae5c35bd5120aa118410393856a6469541743e0f2eb9277c2ded->leave($__internal_dd199de0782fae5c35bd5120aa118410393856a6469541743e0f2eb9277c2ded_prof);

        
        $__internal_31c22b764cc1c7cb84774a4e7de766715f8ca8fef4c9588ac589c18f4c105fcc->leave($__internal_31c22b764cc1c7cb84774a4e7de766715f8ca8fef4c9588ac589c18f4c105fcc_prof);

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
