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
        $__internal_a811f48ac3226a34d81bd22cdbd6a148049bda9386a07089abbb437d2aaf4be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a811f48ac3226a34d81bd22cdbd6a148049bda9386a07089abbb437d2aaf4be9->enter($__internal_a811f48ac3226a34d81bd22cdbd6a148049bda9386a07089abbb437d2aaf4be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        $__internal_d458be47b1e6a8b4892d04acd7da0bae876ea72b300a8d0351ae40b9a78df373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d458be47b1e6a8b4892d04acd7da0bae876ea72b300a8d0351ae40b9a78df373->enter($__internal_d458be47b1e6a8b4892d04acd7da0bae876ea72b300a8d0351ae40b9a78df373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

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
        
        $__internal_a811f48ac3226a34d81bd22cdbd6a148049bda9386a07089abbb437d2aaf4be9->leave($__internal_a811f48ac3226a34d81bd22cdbd6a148049bda9386a07089abbb437d2aaf4be9_prof);

        
        $__internal_d458be47b1e6a8b4892d04acd7da0bae876ea72b300a8d0351ae40b9a78df373->leave($__internal_d458be47b1e6a8b4892d04acd7da0bae876ea72b300a8d0351ae40b9a78df373_prof);

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
