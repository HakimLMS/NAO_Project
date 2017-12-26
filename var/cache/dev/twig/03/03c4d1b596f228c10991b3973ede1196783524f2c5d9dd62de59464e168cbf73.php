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
        $__internal_422a53fae3080a94738a8eeb8798bcdebc5c6ed7407cd0da741d4691bb786c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422a53fae3080a94738a8eeb8798bcdebc5c6ed7407cd0da741d4691bb786c1c->enter($__internal_422a53fae3080a94738a8eeb8798bcdebc5c6ed7407cd0da741d4691bb786c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_001896438f73a0ca7475ebdd25e9f51b33e83c773d90a9b723fd1b0263c7a292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001896438f73a0ca7475ebdd25e9f51b33e83c773d90a9b723fd1b0263c7a292->enter($__internal_001896438f73a0ca7475ebdd25e9f51b33e83c773d90a9b723fd1b0263c7a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_422a53fae3080a94738a8eeb8798bcdebc5c6ed7407cd0da741d4691bb786c1c->leave($__internal_422a53fae3080a94738a8eeb8798bcdebc5c6ed7407cd0da741d4691bb786c1c_prof);

        
        $__internal_001896438f73a0ca7475ebdd25e9f51b33e83c773d90a9b723fd1b0263c7a292->leave($__internal_001896438f73a0ca7475ebdd25e9f51b33e83c773d90a9b723fd1b0263c7a292_prof);

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
