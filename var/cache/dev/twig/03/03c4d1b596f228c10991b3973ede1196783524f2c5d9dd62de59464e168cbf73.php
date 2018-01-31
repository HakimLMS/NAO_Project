<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f19bf554848926a53f71dd044585bc141a931e42e50ce50bc0a8764b597c843 extends Twig_Template
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
        $__internal_de929549851975d0ab6af27f33d16ff35be3a54bd76dc1764a0b07b4b9ba96f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de929549851975d0ab6af27f33d16ff35be3a54bd76dc1764a0b07b4b9ba96f6->enter($__internal_de929549851975d0ab6af27f33d16ff35be3a54bd76dc1764a0b07b4b9ba96f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_45e59a245428c3244c56aa9889ded26b5b6aaf96f97cf2ebdcc1b48e35f2da8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e59a245428c3244c56aa9889ded26b5b6aaf96f97cf2ebdcc1b48e35f2da8e->enter($__internal_45e59a245428c3244c56aa9889ded26b5b6aaf96f97cf2ebdcc1b48e35f2da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_de929549851975d0ab6af27f33d16ff35be3a54bd76dc1764a0b07b4b9ba96f6->leave($__internal_de929549851975d0ab6af27f33d16ff35be3a54bd76dc1764a0b07b4b9ba96f6_prof);

        
        $__internal_45e59a245428c3244c56aa9889ded26b5b6aaf96f97cf2ebdcc1b48e35f2da8e->leave($__internal_45e59a245428c3244c56aa9889ded26b5b6aaf96f97cf2ebdcc1b48e35f2da8e_prof);

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
