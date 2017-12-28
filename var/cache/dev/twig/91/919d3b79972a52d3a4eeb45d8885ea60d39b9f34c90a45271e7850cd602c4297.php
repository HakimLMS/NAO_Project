<?php

/* @Framework/Form/choice_widget_collapsed.html.php */
class __TwigTemplate_4665c96ae44dbe064470df1dec87e01aa1e29b6d855fe6129921d8a09e14d0d0 extends Twig_Template
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
        $__internal_58e3dc6f87b965a1ed69160db766514c36755dbde5f1e91b49a2e13c72a590e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e3dc6f87b965a1ed69160db766514c36755dbde5f1e91b49a2e13c72a590e3->enter($__internal_58e3dc6f87b965a1ed69160db766514c36755dbde5f1e91b49a2e13c72a590e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        $__internal_6c1321a68648aa80389f8749225cf5db6c6bf62a8828ec0519c4069cecff456e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1321a68648aa80389f8749225cf5db6c6bf62a8828ec0519c4069cecff456e->enter($__internal_6c1321a68648aa80389f8749225cf5db6c6bf62a8828ec0519c4069cecff456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        // line 1
        echo "<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
";
        
        $__internal_58e3dc6f87b965a1ed69160db766514c36755dbde5f1e91b49a2e13c72a590e3->leave($__internal_58e3dc6f87b965a1ed69160db766514c36755dbde5f1e91b49a2e13c72a590e3_prof);

        
        $__internal_6c1321a68648aa80389f8749225cf5db6c6bf62a8828ec0519c4069cecff456e->leave($__internal_6c1321a68648aa80389f8749225cf5db6c6bf62a8828ec0519c4069cecff456e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_collapsed.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
", "@Framework/Form/choice_widget_collapsed.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_collapsed.html.php");
    }
}
