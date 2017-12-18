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
        $__internal_025109d861ce090092677590795df7022c4c3cf3d07994af8a74d292968953f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025109d861ce090092677590795df7022c4c3cf3d07994af8a74d292968953f6->enter($__internal_025109d861ce090092677590795df7022c4c3cf3d07994af8a74d292968953f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6e10baad96c57550081729e60e831e86c30efdc5f705e3007ecb01ede08c4b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e10baad96c57550081729e60e831e86c30efdc5f705e3007ecb01ede08c4b66->enter($__internal_6e10baad96c57550081729e60e831e86c30efdc5f705e3007ecb01ede08c4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_025109d861ce090092677590795df7022c4c3cf3d07994af8a74d292968953f6->leave($__internal_025109d861ce090092677590795df7022c4c3cf3d07994af8a74d292968953f6_prof);

        
        $__internal_6e10baad96c57550081729e60e831e86c30efdc5f705e3007ecb01ede08c4b66->leave($__internal_6e10baad96c57550081729e60e831e86c30efdc5f705e3007ecb01ede08c4b66_prof);

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
