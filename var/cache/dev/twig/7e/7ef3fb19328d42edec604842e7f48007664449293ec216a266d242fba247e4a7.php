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
        $__internal_845110b6d8bf13d15916cd8aa2328234f20fa5cb2a5ee15230bc5cc866f885de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845110b6d8bf13d15916cd8aa2328234f20fa5cb2a5ee15230bc5cc866f885de->enter($__internal_845110b6d8bf13d15916cd8aa2328234f20fa5cb2a5ee15230bc5cc866f885de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f1661456e78df6045830c10941cdb8de833f97cd43eb843b36c4596b3cbecff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1661456e78df6045830c10941cdb8de833f97cd43eb843b36c4596b3cbecff2->enter($__internal_f1661456e78df6045830c10941cdb8de833f97cd43eb843b36c4596b3cbecff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_845110b6d8bf13d15916cd8aa2328234f20fa5cb2a5ee15230bc5cc866f885de->leave($__internal_845110b6d8bf13d15916cd8aa2328234f20fa5cb2a5ee15230bc5cc866f885de_prof);

        
        $__internal_f1661456e78df6045830c10941cdb8de833f97cd43eb843b36c4596b3cbecff2->leave($__internal_f1661456e78df6045830c10941cdb8de833f97cd43eb843b36c4596b3cbecff2_prof);

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
