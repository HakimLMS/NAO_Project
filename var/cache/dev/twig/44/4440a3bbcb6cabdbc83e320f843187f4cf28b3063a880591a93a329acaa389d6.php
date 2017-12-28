<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_4c62f0472cf62d896631927b1c32fe038af775b46c155a60a0c4432d625cc2bf extends Twig_Template
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
        $__internal_e2341b4bce5542f04ee977cbb9fb0e17604e80e8fb8385de1db976dc597efdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2341b4bce5542f04ee977cbb9fb0e17604e80e8fb8385de1db976dc597efdf2->enter($__internal_e2341b4bce5542f04ee977cbb9fb0e17604e80e8fb8385de1db976dc597efdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        $__internal_1a434617d520fa834b14f583507833093a1517020fc24ea70704ea6c8927045e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a434617d520fa834b14f583507833093a1517020fc24ea70704ea6c8927045e->enter($__internal_1a434617d520fa834b14f583507833093a1517020fc24ea70704ea6c8927045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e2341b4bce5542f04ee977cbb9fb0e17604e80e8fb8385de1db976dc597efdf2->leave($__internal_e2341b4bce5542f04ee977cbb9fb0e17604e80e8fb8385de1db976dc597efdf2_prof);

        
        $__internal_1a434617d520fa834b14f583507833093a1517020fc24ea70704ea6c8927045e->leave($__internal_1a434617d520fa834b14f583507833093a1517020fc24ea70704ea6c8927045e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_widget_options.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_options.html.php");
    }
}
