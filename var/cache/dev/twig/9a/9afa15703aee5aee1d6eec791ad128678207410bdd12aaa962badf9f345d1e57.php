<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_e5540fe59158e102f717aa05cbe17dab0835352b13815d8c3f921c9053d5f541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5540fe59158e102f717aa05cbe17dab0835352b13815d8c3f921c9053d5f541->enter($__internal_e5540fe59158e102f717aa05cbe17dab0835352b13815d8c3f921c9053d5f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_950aabe15f870f157d58f8aee5944bf0b229d60b9b6d4a465589879b5b59ca04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950aabe15f870f157d58f8aee5944bf0b229d60b9b6d4a465589879b5b59ca04->enter($__internal_950aabe15f870f157d58f8aee5944bf0b229d60b9b6d4a465589879b5b59ca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e5540fe59158e102f717aa05cbe17dab0835352b13815d8c3f921c9053d5f541->leave($__internal_e5540fe59158e102f717aa05cbe17dab0835352b13815d8c3f921c9053d5f541_prof);

        
        $__internal_950aabe15f870f157d58f8aee5944bf0b229d60b9b6d4a465589879b5b59ca04->leave($__internal_950aabe15f870f157d58f8aee5944bf0b229d60b9b6d4a465589879b5b59ca04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
