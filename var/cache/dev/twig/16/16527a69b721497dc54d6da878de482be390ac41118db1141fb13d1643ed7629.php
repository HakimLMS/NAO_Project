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
        $__internal_fa2574c7e3761d3929ea2bf164fc7e7ba262260d0198dd669f0a8b812811db93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2574c7e3761d3929ea2bf164fc7e7ba262260d0198dd669f0a8b812811db93->enter($__internal_fa2574c7e3761d3929ea2bf164fc7e7ba262260d0198dd669f0a8b812811db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3ee8e370549c6cc33fa6a2714dfaab3b2355ffca4a03eec96ef86a5faba64f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee8e370549c6cc33fa6a2714dfaab3b2355ffca4a03eec96ef86a5faba64f16->enter($__internal_3ee8e370549c6cc33fa6a2714dfaab3b2355ffca4a03eec96ef86a5faba64f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fa2574c7e3761d3929ea2bf164fc7e7ba262260d0198dd669f0a8b812811db93->leave($__internal_fa2574c7e3761d3929ea2bf164fc7e7ba262260d0198dd669f0a8b812811db93_prof);

        
        $__internal_3ee8e370549c6cc33fa6a2714dfaab3b2355ffca4a03eec96ef86a5faba64f16->leave($__internal_3ee8e370549c6cc33fa6a2714dfaab3b2355ffca4a03eec96ef86a5faba64f16_prof);

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
