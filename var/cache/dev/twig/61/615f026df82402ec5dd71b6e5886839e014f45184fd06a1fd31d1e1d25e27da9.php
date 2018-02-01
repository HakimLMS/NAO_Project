<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a4ef1ff315a5fa70276e5c3bf29c4f6ce6b675723f389dbac3ed2297e138a517 extends Twig_Template
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
        $__internal_4db230bc254d761abbc1c8dddef2440e4504fd6616b6b0b847fa26f76d3f5aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db230bc254d761abbc1c8dddef2440e4504fd6616b6b0b847fa26f76d3f5aeb->enter($__internal_4db230bc254d761abbc1c8dddef2440e4504fd6616b6b0b847fa26f76d3f5aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cedc5d33417f62014f5792f6d8f18e12cced9519ec355e4267f956eb3ad00059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedc5d33417f62014f5792f6d8f18e12cced9519ec355e4267f956eb3ad00059->enter($__internal_cedc5d33417f62014f5792f6d8f18e12cced9519ec355e4267f956eb3ad00059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_4db230bc254d761abbc1c8dddef2440e4504fd6616b6b0b847fa26f76d3f5aeb->leave($__internal_4db230bc254d761abbc1c8dddef2440e4504fd6616b6b0b847fa26f76d3f5aeb_prof);

        
        $__internal_cedc5d33417f62014f5792f6d8f18e12cced9519ec355e4267f956eb3ad00059->leave($__internal_cedc5d33417f62014f5792f6d8f18e12cced9519ec355e4267f956eb3ad00059_prof);

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
", "@Framework/Form/choice_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
