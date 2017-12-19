<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_03542dd852a14eeac2a98c532413aa3aacb127b004014dd4869b3022d1959e0d extends Twig_Template
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
        $__internal_065c22ada5468e5a605bae4858cf704019d871f01b51d99eba6f7dae5e452473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065c22ada5468e5a605bae4858cf704019d871f01b51d99eba6f7dae5e452473->enter($__internal_065c22ada5468e5a605bae4858cf704019d871f01b51d99eba6f7dae5e452473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d44084d3bedf6203236d58d7466cc15bb4fadc2a178a29018e28479057cd94ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44084d3bedf6203236d58d7466cc15bb4fadc2a178a29018e28479057cd94ed->enter($__internal_d44084d3bedf6203236d58d7466cc15bb4fadc2a178a29018e28479057cd94ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_065c22ada5468e5a605bae4858cf704019d871f01b51d99eba6f7dae5e452473->leave($__internal_065c22ada5468e5a605bae4858cf704019d871f01b51d99eba6f7dae5e452473_prof);

        
        $__internal_d44084d3bedf6203236d58d7466cc15bb4fadc2a178a29018e28479057cd94ed->leave($__internal_d44084d3bedf6203236d58d7466cc15bb4fadc2a178a29018e28479057cd94ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
