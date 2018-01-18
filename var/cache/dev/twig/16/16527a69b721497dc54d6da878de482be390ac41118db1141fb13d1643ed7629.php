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
        $__internal_18566718b750dd43f4e48ca2e5c213387ce8d3bcd51bb76c1f6d19ffb343ed43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18566718b750dd43f4e48ca2e5c213387ce8d3bcd51bb76c1f6d19ffb343ed43->enter($__internal_18566718b750dd43f4e48ca2e5c213387ce8d3bcd51bb76c1f6d19ffb343ed43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4c2ebbde58ed48ef533cf62cad8545f038338637d62b83e593eb0b0bbf891fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2ebbde58ed48ef533cf62cad8545f038338637d62b83e593eb0b0bbf891fce->enter($__internal_4c2ebbde58ed48ef533cf62cad8545f038338637d62b83e593eb0b0bbf891fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_18566718b750dd43f4e48ca2e5c213387ce8d3bcd51bb76c1f6d19ffb343ed43->leave($__internal_18566718b750dd43f4e48ca2e5c213387ce8d3bcd51bb76c1f6d19ffb343ed43_prof);

        
        $__internal_4c2ebbde58ed48ef533cf62cad8545f038338637d62b83e593eb0b0bbf891fce->leave($__internal_4c2ebbde58ed48ef533cf62cad8545f038338637d62b83e593eb0b0bbf891fce_prof);

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
