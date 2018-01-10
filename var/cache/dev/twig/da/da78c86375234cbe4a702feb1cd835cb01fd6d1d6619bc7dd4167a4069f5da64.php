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
        $__internal_809d58e867fbad548aee107041c083739627250e068312cc6b03ed7c8cd36153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809d58e867fbad548aee107041c083739627250e068312cc6b03ed7c8cd36153->enter($__internal_809d58e867fbad548aee107041c083739627250e068312cc6b03ed7c8cd36153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1f22214b8db42208bbab48159d172efacf7ce142d444bcf83357e7c421dc63e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f22214b8db42208bbab48159d172efacf7ce142d444bcf83357e7c421dc63e0->enter($__internal_1f22214b8db42208bbab48159d172efacf7ce142d444bcf83357e7c421dc63e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_809d58e867fbad548aee107041c083739627250e068312cc6b03ed7c8cd36153->leave($__internal_809d58e867fbad548aee107041c083739627250e068312cc6b03ed7c8cd36153_prof);

        
        $__internal_1f22214b8db42208bbab48159d172efacf7ce142d444bcf83357e7c421dc63e0->leave($__internal_1f22214b8db42208bbab48159d172efacf7ce142d444bcf83357e7c421dc63e0_prof);

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
", "@Framework/Form/attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
