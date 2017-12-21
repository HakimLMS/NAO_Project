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
        $__internal_c266d67aee3c737a8bdfce087532ccba1dfdb2e8895abf22891233a629bc9f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c266d67aee3c737a8bdfce087532ccba1dfdb2e8895abf22891233a629bc9f05->enter($__internal_c266d67aee3c737a8bdfce087532ccba1dfdb2e8895abf22891233a629bc9f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0b0231b8399204b2a0ca2d88f29fdb61d46bb089e1b75b5972ba268277a32877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0231b8399204b2a0ca2d88f29fdb61d46bb089e1b75b5972ba268277a32877->enter($__internal_0b0231b8399204b2a0ca2d88f29fdb61d46bb089e1b75b5972ba268277a32877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c266d67aee3c737a8bdfce087532ccba1dfdb2e8895abf22891233a629bc9f05->leave($__internal_c266d67aee3c737a8bdfce087532ccba1dfdb2e8895abf22891233a629bc9f05_prof);

        
        $__internal_0b0231b8399204b2a0ca2d88f29fdb61d46bb089e1b75b5972ba268277a32877->leave($__internal_0b0231b8399204b2a0ca2d88f29fdb61d46bb089e1b75b5972ba268277a32877_prof);

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
