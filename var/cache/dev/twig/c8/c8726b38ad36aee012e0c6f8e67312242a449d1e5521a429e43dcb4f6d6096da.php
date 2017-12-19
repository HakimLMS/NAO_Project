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
        $__internal_45d9386d8f87cad3073698f5137bce529c42d3723a0b7d4390de00e339940076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d9386d8f87cad3073698f5137bce529c42d3723a0b7d4390de00e339940076->enter($__internal_45d9386d8f87cad3073698f5137bce529c42d3723a0b7d4390de00e339940076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3f7fc9ce2dd9bf02ee6cc8e7a351e450aff10ae88e00cf099688a055dd14bab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7fc9ce2dd9bf02ee6cc8e7a351e450aff10ae88e00cf099688a055dd14bab7->enter($__internal_3f7fc9ce2dd9bf02ee6cc8e7a351e450aff10ae88e00cf099688a055dd14bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_45d9386d8f87cad3073698f5137bce529c42d3723a0b7d4390de00e339940076->leave($__internal_45d9386d8f87cad3073698f5137bce529c42d3723a0b7d4390de00e339940076_prof);

        
        $__internal_3f7fc9ce2dd9bf02ee6cc8e7a351e450aff10ae88e00cf099688a055dd14bab7->leave($__internal_3f7fc9ce2dd9bf02ee6cc8e7a351e450aff10ae88e00cf099688a055dd14bab7_prof);

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
