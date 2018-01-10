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
        $__internal_8b05ecbe6e033837ad490b0b7f37dfadfafc192c97871619447e1635b98d2a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b05ecbe6e033837ad490b0b7f37dfadfafc192c97871619447e1635b98d2a74->enter($__internal_8b05ecbe6e033837ad490b0b7f37dfadfafc192c97871619447e1635b98d2a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c73383295377cb9a4aefd6f5d6643874bd5045f0aa05abbbb7e3cd2553bf8b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73383295377cb9a4aefd6f5d6643874bd5045f0aa05abbbb7e3cd2553bf8b26->enter($__internal_c73383295377cb9a4aefd6f5d6643874bd5045f0aa05abbbb7e3cd2553bf8b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8b05ecbe6e033837ad490b0b7f37dfadfafc192c97871619447e1635b98d2a74->leave($__internal_8b05ecbe6e033837ad490b0b7f37dfadfafc192c97871619447e1635b98d2a74_prof);

        
        $__internal_c73383295377cb9a4aefd6f5d6643874bd5045f0aa05abbbb7e3cd2553bf8b26->leave($__internal_c73383295377cb9a4aefd6f5d6643874bd5045f0aa05abbbb7e3cd2553bf8b26_prof);

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
