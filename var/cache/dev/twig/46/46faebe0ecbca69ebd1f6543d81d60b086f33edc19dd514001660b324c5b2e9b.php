<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a5fd5b3999a6a6e53295c30a0c6dc369156bcbecd87308d6be069aa3069a3b2 extends Twig_Template
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
        $__internal_23634b5a8e7ac25a4b51f113ebc2ed9c3b264f4efad627408f523ef6bced05fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23634b5a8e7ac25a4b51f113ebc2ed9c3b264f4efad627408f523ef6bced05fa->enter($__internal_23634b5a8e7ac25a4b51f113ebc2ed9c3b264f4efad627408f523ef6bced05fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cbb591b3f1ae37cca8e8ad98524f8aa9aca67c9702e3a278e2cc943cd5a2a979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb591b3f1ae37cca8e8ad98524f8aa9aca67c9702e3a278e2cc943cd5a2a979->enter($__internal_cbb591b3f1ae37cca8e8ad98524f8aa9aca67c9702e3a278e2cc943cd5a2a979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_23634b5a8e7ac25a4b51f113ebc2ed9c3b264f4efad627408f523ef6bced05fa->leave($__internal_23634b5a8e7ac25a4b51f113ebc2ed9c3b264f4efad627408f523ef6bced05fa_prof);

        
        $__internal_cbb591b3f1ae37cca8e8ad98524f8aa9aca67c9702e3a278e2cc943cd5a2a979->leave($__internal_cbb591b3f1ae37cca8e8ad98524f8aa9aca67c9702e3a278e2cc943cd5a2a979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
