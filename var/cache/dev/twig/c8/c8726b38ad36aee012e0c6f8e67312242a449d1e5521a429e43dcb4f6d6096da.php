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
        $__internal_3f1c365daf66feee35df0ec23997fa9a62d5f8732db2d5e0481e0259c660857e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1c365daf66feee35df0ec23997fa9a62d5f8732db2d5e0481e0259c660857e->enter($__internal_3f1c365daf66feee35df0ec23997fa9a62d5f8732db2d5e0481e0259c660857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_532b3a107356dd650220b7851b9f1360826886270ee4f5eaf89a246ef90a5ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532b3a107356dd650220b7851b9f1360826886270ee4f5eaf89a246ef90a5ee0->enter($__internal_532b3a107356dd650220b7851b9f1360826886270ee4f5eaf89a246ef90a5ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3f1c365daf66feee35df0ec23997fa9a62d5f8732db2d5e0481e0259c660857e->leave($__internal_3f1c365daf66feee35df0ec23997fa9a62d5f8732db2d5e0481e0259c660857e_prof);

        
        $__internal_532b3a107356dd650220b7851b9f1360826886270ee4f5eaf89a246ef90a5ee0->leave($__internal_532b3a107356dd650220b7851b9f1360826886270ee4f5eaf89a246ef90a5ee0_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
