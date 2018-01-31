<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bad335dd2203c70d736867e3e11a2f5e372edc4b88002f0f21e790335b12bcdd extends Twig_Template
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
        $__internal_73a2eb054840af64b8fcef3fe58c6fd8ee39ff2357bdc8bc90d6b96e361f7719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a2eb054840af64b8fcef3fe58c6fd8ee39ff2357bdc8bc90d6b96e361f7719->enter($__internal_73a2eb054840af64b8fcef3fe58c6fd8ee39ff2357bdc8bc90d6b96e361f7719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2b538a69501fb8e772b91b9ac415b55cea860f562bb60549a8f8d4be72104081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b538a69501fb8e772b91b9ac415b55cea860f562bb60549a8f8d4be72104081->enter($__internal_2b538a69501fb8e772b91b9ac415b55cea860f562bb60549a8f8d4be72104081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_73a2eb054840af64b8fcef3fe58c6fd8ee39ff2357bdc8bc90d6b96e361f7719->leave($__internal_73a2eb054840af64b8fcef3fe58c6fd8ee39ff2357bdc8bc90d6b96e361f7719_prof);

        
        $__internal_2b538a69501fb8e772b91b9ac415b55cea860f562bb60549a8f8d4be72104081->leave($__internal_2b538a69501fb8e772b91b9ac415b55cea860f562bb60549a8f8d4be72104081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
