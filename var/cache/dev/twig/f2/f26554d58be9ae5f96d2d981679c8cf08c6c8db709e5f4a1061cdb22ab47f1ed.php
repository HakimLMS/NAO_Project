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
        $__internal_75dcf87dfe88bac4da6b2af95e79215bdfe7d7d534a4a4a1b5fa3c1a4f62a3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75dcf87dfe88bac4da6b2af95e79215bdfe7d7d534a4a4a1b5fa3c1a4f62a3ab->enter($__internal_75dcf87dfe88bac4da6b2af95e79215bdfe7d7d534a4a4a1b5fa3c1a4f62a3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c32a45fe71c89f3afe00ab12ba25184aa84a8f015a8ae78427c8953d6c02f1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32a45fe71c89f3afe00ab12ba25184aa84a8f015a8ae78427c8953d6c02f1f6->enter($__internal_c32a45fe71c89f3afe00ab12ba25184aa84a8f015a8ae78427c8953d6c02f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_75dcf87dfe88bac4da6b2af95e79215bdfe7d7d534a4a4a1b5fa3c1a4f62a3ab->leave($__internal_75dcf87dfe88bac4da6b2af95e79215bdfe7d7d534a4a4a1b5fa3c1a4f62a3ab_prof);

        
        $__internal_c32a45fe71c89f3afe00ab12ba25184aa84a8f015a8ae78427c8953d6c02f1f6->leave($__internal_c32a45fe71c89f3afe00ab12ba25184aa84a8f015a8ae78427c8953d6c02f1f6_prof);

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
