<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8c013ededfdd548338f365dbd26982edf74c72500a006320dd679711499bb0bf extends Twig_Template
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
        $__internal_5fe3600763fb3f2afe27da8d4cf426a9cbb2bb135a55c0265a89f36d4713bb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe3600763fb3f2afe27da8d4cf426a9cbb2bb135a55c0265a89f36d4713bb71->enter($__internal_5fe3600763fb3f2afe27da8d4cf426a9cbb2bb135a55c0265a89f36d4713bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5de1c084380a135d8b682a26a84d86d91b614761f4b95cee15373763b7f4319e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de1c084380a135d8b682a26a84d86d91b614761f4b95cee15373763b7f4319e->enter($__internal_5de1c084380a135d8b682a26a84d86d91b614761f4b95cee15373763b7f4319e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5fe3600763fb3f2afe27da8d4cf426a9cbb2bb135a55c0265a89f36d4713bb71->leave($__internal_5fe3600763fb3f2afe27da8d4cf426a9cbb2bb135a55c0265a89f36d4713bb71_prof);

        
        $__internal_5de1c084380a135d8b682a26a84d86d91b614761f4b95cee15373763b7f4319e->leave($__internal_5de1c084380a135d8b682a26a84d86d91b614761f4b95cee15373763b7f4319e_prof);

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
