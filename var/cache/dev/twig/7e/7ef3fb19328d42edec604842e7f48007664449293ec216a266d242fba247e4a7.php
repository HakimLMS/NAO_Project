<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_286204f273c27b110e8d27338efdddde2d06fe323cd4174b4cab74ff6a28cc0a extends Twig_Template
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
        $__internal_1157ae22dcd640fe7cb11937d30ba991446b3893ec49b81d4db497bc5ec57a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1157ae22dcd640fe7cb11937d30ba991446b3893ec49b81d4db497bc5ec57a71->enter($__internal_1157ae22dcd640fe7cb11937d30ba991446b3893ec49b81d4db497bc5ec57a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_787766bfc7431a5d3a7cc712c53f9289fbf6ea8ccc8fad6e2e4af2456e9228e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787766bfc7431a5d3a7cc712c53f9289fbf6ea8ccc8fad6e2e4af2456e9228e2->enter($__internal_787766bfc7431a5d3a7cc712c53f9289fbf6ea8ccc8fad6e2e4af2456e9228e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_1157ae22dcd640fe7cb11937d30ba991446b3893ec49b81d4db497bc5ec57a71->leave($__internal_1157ae22dcd640fe7cb11937d30ba991446b3893ec49b81d4db497bc5ec57a71_prof);

        
        $__internal_787766bfc7431a5d3a7cc712c53f9289fbf6ea8ccc8fad6e2e4af2456e9228e2->leave($__internal_787766bfc7431a5d3a7cc712c53f9289fbf6ea8ccc8fad6e2e4af2456e9228e2_prof);

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
