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
        $__internal_967d26fefcac2b982c60c2a0c113fb432df85f02d301e7797972ff8aab80e60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967d26fefcac2b982c60c2a0c113fb432df85f02d301e7797972ff8aab80e60c->enter($__internal_967d26fefcac2b982c60c2a0c113fb432df85f02d301e7797972ff8aab80e60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8880380bcd5094bc43b5ad0a472a8741e38da509e25cf28e7915f1b42197f606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8880380bcd5094bc43b5ad0a472a8741e38da509e25cf28e7915f1b42197f606->enter($__internal_8880380bcd5094bc43b5ad0a472a8741e38da509e25cf28e7915f1b42197f606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_967d26fefcac2b982c60c2a0c113fb432df85f02d301e7797972ff8aab80e60c->leave($__internal_967d26fefcac2b982c60c2a0c113fb432df85f02d301e7797972ff8aab80e60c_prof);

        
        $__internal_8880380bcd5094bc43b5ad0a472a8741e38da509e25cf28e7915f1b42197f606->leave($__internal_8880380bcd5094bc43b5ad0a472a8741e38da509e25cf28e7915f1b42197f606_prof);

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
