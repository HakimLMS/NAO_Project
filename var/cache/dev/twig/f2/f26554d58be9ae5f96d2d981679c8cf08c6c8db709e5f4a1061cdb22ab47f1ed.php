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
        $__internal_47c0e98552d80953dbfbee9fff4225a3e99be358b8b2b6dee4ee717eeaebc54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c0e98552d80953dbfbee9fff4225a3e99be358b8b2b6dee4ee717eeaebc54a->enter($__internal_47c0e98552d80953dbfbee9fff4225a3e99be358b8b2b6dee4ee717eeaebc54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_17ad75ffe501c68fa0c7b14a2b271ea674c826d2e56faad4ad8c404347f0a1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ad75ffe501c68fa0c7b14a2b271ea674c826d2e56faad4ad8c404347f0a1f9->enter($__internal_17ad75ffe501c68fa0c7b14a2b271ea674c826d2e56faad4ad8c404347f0a1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_47c0e98552d80953dbfbee9fff4225a3e99be358b8b2b6dee4ee717eeaebc54a->leave($__internal_47c0e98552d80953dbfbee9fff4225a3e99be358b8b2b6dee4ee717eeaebc54a_prof);

        
        $__internal_17ad75ffe501c68fa0c7b14a2b271ea674c826d2e56faad4ad8c404347f0a1f9->leave($__internal_17ad75ffe501c68fa0c7b14a2b271ea674c826d2e56faad4ad8c404347f0a1f9_prof);

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