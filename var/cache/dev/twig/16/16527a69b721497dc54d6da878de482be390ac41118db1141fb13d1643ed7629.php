<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8c013ededfdd548338f365dbd26982edf74c72500a006320dd679711499bb0bf extends Twig_Template
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
        $__internal_95817239ba91562f946c3c02ca9f644cd5fd064bf5b4ebc8e8d223ec360e0e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95817239ba91562f946c3c02ca9f644cd5fd064bf5b4ebc8e8d223ec360e0e13->enter($__internal_95817239ba91562f946c3c02ca9f644cd5fd064bf5b4ebc8e8d223ec360e0e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_978998ed38e329986b1491a4efb62cd1aa47402de6de4782cdb4cfa408002557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978998ed38e329986b1491a4efb62cd1aa47402de6de4782cdb4cfa408002557->enter($__internal_978998ed38e329986b1491a4efb62cd1aa47402de6de4782cdb4cfa408002557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_95817239ba91562f946c3c02ca9f644cd5fd064bf5b4ebc8e8d223ec360e0e13->leave($__internal_95817239ba91562f946c3c02ca9f644cd5fd064bf5b4ebc8e8d223ec360e0e13_prof);

        
        $__internal_978998ed38e329986b1491a4efb62cd1aa47402de6de4782cdb4cfa408002557->leave($__internal_978998ed38e329986b1491a4efb62cd1aa47402de6de4782cdb4cfa408002557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
