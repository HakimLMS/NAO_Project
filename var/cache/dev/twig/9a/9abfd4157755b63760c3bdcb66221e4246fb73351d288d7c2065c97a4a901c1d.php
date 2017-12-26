<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_981f165144c6d95f04a85bcffc48d074d392be93360b033429b843de7d6de2b8 extends Twig_Template
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
        $__internal_f6041a9c046f07df60fe1210fd7110ea28c257fe6da7e5097be134c3bbc83539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6041a9c046f07df60fe1210fd7110ea28c257fe6da7e5097be134c3bbc83539->enter($__internal_f6041a9c046f07df60fe1210fd7110ea28c257fe6da7e5097be134c3bbc83539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c140d311c02203afb6d8a3e7e1bdd3b0c0429b57e5f1446d2f0af639da8b0883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c140d311c02203afb6d8a3e7e1bdd3b0c0429b57e5f1446d2f0af639da8b0883->enter($__internal_c140d311c02203afb6d8a3e7e1bdd3b0c0429b57e5f1446d2f0af639da8b0883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f6041a9c046f07df60fe1210fd7110ea28c257fe6da7e5097be134c3bbc83539->leave($__internal_f6041a9c046f07df60fe1210fd7110ea28c257fe6da7e5097be134c3bbc83539_prof);

        
        $__internal_c140d311c02203afb6d8a3e7e1bdd3b0c0429b57e5f1446d2f0af639da8b0883->leave($__internal_c140d311c02203afb6d8a3e7e1bdd3b0c0429b57e5f1446d2f0af639da8b0883_prof);

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
