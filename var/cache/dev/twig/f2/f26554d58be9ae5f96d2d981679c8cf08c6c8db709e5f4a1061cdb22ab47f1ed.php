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
        $__internal_624381c70ba8c8b376743b03203e138d2e133e610002090b752cf1de211a11b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624381c70ba8c8b376743b03203e138d2e133e610002090b752cf1de211a11b1->enter($__internal_624381c70ba8c8b376743b03203e138d2e133e610002090b752cf1de211a11b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bed2deba03c491d9a49d8b9e5fa106437c6d6dd15b504d78c77e7e583092fcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed2deba03c491d9a49d8b9e5fa106437c6d6dd15b504d78c77e7e583092fcfb->enter($__internal_bed2deba03c491d9a49d8b9e5fa106437c6d6dd15b504d78c77e7e583092fcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_624381c70ba8c8b376743b03203e138d2e133e610002090b752cf1de211a11b1->leave($__internal_624381c70ba8c8b376743b03203e138d2e133e610002090b752cf1de211a11b1_prof);

        
        $__internal_bed2deba03c491d9a49d8b9e5fa106437c6d6dd15b504d78c77e7e583092fcfb->leave($__internal_bed2deba03c491d9a49d8b9e5fa106437c6d6dd15b504d78c77e7e583092fcfb_prof);

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
