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
        $__internal_28cab46a4d64062ca3b9849834703010b07127a7ffc4e4795d12ce1e57e7b184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cab46a4d64062ca3b9849834703010b07127a7ffc4e4795d12ce1e57e7b184->enter($__internal_28cab46a4d64062ca3b9849834703010b07127a7ffc4e4795d12ce1e57e7b184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e9848ffd8608feb6941376222eeee163ceb5c1cce70ab89cf36326e82bf89783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9848ffd8608feb6941376222eeee163ceb5c1cce70ab89cf36326e82bf89783->enter($__internal_e9848ffd8608feb6941376222eeee163ceb5c1cce70ab89cf36326e82bf89783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_28cab46a4d64062ca3b9849834703010b07127a7ffc4e4795d12ce1e57e7b184->leave($__internal_28cab46a4d64062ca3b9849834703010b07127a7ffc4e4795d12ce1e57e7b184_prof);

        
        $__internal_e9848ffd8608feb6941376222eeee163ceb5c1cce70ab89cf36326e82bf89783->leave($__internal_e9848ffd8608feb6941376222eeee163ceb5c1cce70ab89cf36326e82bf89783_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
