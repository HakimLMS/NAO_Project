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
        $__internal_816f23eb596cc0b6128da0e763b5722c4e56dd8151448b7677c7b62a6cb02892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816f23eb596cc0b6128da0e763b5722c4e56dd8151448b7677c7b62a6cb02892->enter($__internal_816f23eb596cc0b6128da0e763b5722c4e56dd8151448b7677c7b62a6cb02892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3e61793fa82e105218fc7f946c18fd2d579cad51e5b426eb62c57e4bd86513a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e61793fa82e105218fc7f946c18fd2d579cad51e5b426eb62c57e4bd86513a3->enter($__internal_3e61793fa82e105218fc7f946c18fd2d579cad51e5b426eb62c57e4bd86513a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_816f23eb596cc0b6128da0e763b5722c4e56dd8151448b7677c7b62a6cb02892->leave($__internal_816f23eb596cc0b6128da0e763b5722c4e56dd8151448b7677c7b62a6cb02892_prof);

        
        $__internal_3e61793fa82e105218fc7f946c18fd2d579cad51e5b426eb62c57e4bd86513a3->leave($__internal_3e61793fa82e105218fc7f946c18fd2d579cad51e5b426eb62c57e4bd86513a3_prof);

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
", "@Framework/Form/radio_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
