<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_80ef58ed6a679c748733376ba4aa7115b9438be19eac5712f7854767f689cf68 extends Twig_Template
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
        $__internal_e088f742e38106de2d041abd498f0489eaec48e9beaa21a07634967975148d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e088f742e38106de2d041abd498f0489eaec48e9beaa21a07634967975148d2b->enter($__internal_e088f742e38106de2d041abd498f0489eaec48e9beaa21a07634967975148d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_298474938d97ed643a9416eed7b1470853999287a673c77d6ed4a65f624bda85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298474938d97ed643a9416eed7b1470853999287a673c77d6ed4a65f624bda85->enter($__internal_298474938d97ed643a9416eed7b1470853999287a673c77d6ed4a65f624bda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e088f742e38106de2d041abd498f0489eaec48e9beaa21a07634967975148d2b->leave($__internal_e088f742e38106de2d041abd498f0489eaec48e9beaa21a07634967975148d2b_prof);

        
        $__internal_298474938d97ed643a9416eed7b1470853999287a673c77d6ed4a65f624bda85->leave($__internal_298474938d97ed643a9416eed7b1470853999287a673c77d6ed4a65f624bda85_prof);

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
