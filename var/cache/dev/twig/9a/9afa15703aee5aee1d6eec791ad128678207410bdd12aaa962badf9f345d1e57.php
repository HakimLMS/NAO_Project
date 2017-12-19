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
        $__internal_9f58d5410fd00b27e368d4d01c23e80f3926f38a7df8a6a448d0a5c065f59dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f58d5410fd00b27e368d4d01c23e80f3926f38a7df8a6a448d0a5c065f59dfc->enter($__internal_9f58d5410fd00b27e368d4d01c23e80f3926f38a7df8a6a448d0a5c065f59dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_141bd41edde39dd5b6988518b93f867a5d651189bb83f4a3a3f0361226f1c49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141bd41edde39dd5b6988518b93f867a5d651189bb83f4a3a3f0361226f1c49f->enter($__internal_141bd41edde39dd5b6988518b93f867a5d651189bb83f4a3a3f0361226f1c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9f58d5410fd00b27e368d4d01c23e80f3926f38a7df8a6a448d0a5c065f59dfc->leave($__internal_9f58d5410fd00b27e368d4d01c23e80f3926f38a7df8a6a448d0a5c065f59dfc_prof);

        
        $__internal_141bd41edde39dd5b6988518b93f867a5d651189bb83f4a3a3f0361226f1c49f->leave($__internal_141bd41edde39dd5b6988518b93f867a5d651189bb83f4a3a3f0361226f1c49f_prof);

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
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
