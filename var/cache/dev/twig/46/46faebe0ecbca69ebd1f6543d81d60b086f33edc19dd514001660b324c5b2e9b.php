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
        $__internal_152f3fe5fb41b9cf38f123b82230be4f5c1e373132217832022dad3fc4f90405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152f3fe5fb41b9cf38f123b82230be4f5c1e373132217832022dad3fc4f90405->enter($__internal_152f3fe5fb41b9cf38f123b82230be4f5c1e373132217832022dad3fc4f90405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5447b86075e25c5ba009291ee36eceb7394dc9a22621153c90292ac1a2b1ae23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5447b86075e25c5ba009291ee36eceb7394dc9a22621153c90292ac1a2b1ae23->enter($__internal_5447b86075e25c5ba009291ee36eceb7394dc9a22621153c90292ac1a2b1ae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_152f3fe5fb41b9cf38f123b82230be4f5c1e373132217832022dad3fc4f90405->leave($__internal_152f3fe5fb41b9cf38f123b82230be4f5c1e373132217832022dad3fc4f90405_prof);

        
        $__internal_5447b86075e25c5ba009291ee36eceb7394dc9a22621153c90292ac1a2b1ae23->leave($__internal_5447b86075e25c5ba009291ee36eceb7394dc9a22621153c90292ac1a2b1ae23_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
