<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_80ef58ed6a679c748733376ba4aa7115b9438be19eac5712f7854767f689cf68 extends Twig_Template
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
        $__internal_1d5461999d98a736334ce88925237a9bedca1804d7f3065da64a2fb78e09f937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5461999d98a736334ce88925237a9bedca1804d7f3065da64a2fb78e09f937->enter($__internal_1d5461999d98a736334ce88925237a9bedca1804d7f3065da64a2fb78e09f937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_30f410c0f58c6a3d79fba21b24b6461825957da0e726f8d1715f4e1c49335d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f410c0f58c6a3d79fba21b24b6461825957da0e726f8d1715f4e1c49335d98->enter($__internal_30f410c0f58c6a3d79fba21b24b6461825957da0e726f8d1715f4e1c49335d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1d5461999d98a736334ce88925237a9bedca1804d7f3065da64a2fb78e09f937->leave($__internal_1d5461999d98a736334ce88925237a9bedca1804d7f3065da64a2fb78e09f937_prof);

        
        $__internal_30f410c0f58c6a3d79fba21b24b6461825957da0e726f8d1715f4e1c49335d98->leave($__internal_30f410c0f58c6a3d79fba21b24b6461825957da0e726f8d1715f4e1c49335d98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
