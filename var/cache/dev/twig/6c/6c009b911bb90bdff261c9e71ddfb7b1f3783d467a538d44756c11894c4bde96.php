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
        $__internal_a15268b432015a747b330a537da124bb6172a2f9108dc042c7dd8fea80b446ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15268b432015a747b330a537da124bb6172a2f9108dc042c7dd8fea80b446ee->enter($__internal_a15268b432015a747b330a537da124bb6172a2f9108dc042c7dd8fea80b446ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_60638b1e453905feca6a63a6b27ae64cda2e9592dc1f89674c8bb938caeaab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60638b1e453905feca6a63a6b27ae64cda2e9592dc1f89674c8bb938caeaab55->enter($__internal_60638b1e453905feca6a63a6b27ae64cda2e9592dc1f89674c8bb938caeaab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a15268b432015a747b330a537da124bb6172a2f9108dc042c7dd8fea80b446ee->leave($__internal_a15268b432015a747b330a537da124bb6172a2f9108dc042c7dd8fea80b446ee_prof);

        
        $__internal_60638b1e453905feca6a63a6b27ae64cda2e9592dc1f89674c8bb938caeaab55->leave($__internal_60638b1e453905feca6a63a6b27ae64cda2e9592dc1f89674c8bb938caeaab55_prof);

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
