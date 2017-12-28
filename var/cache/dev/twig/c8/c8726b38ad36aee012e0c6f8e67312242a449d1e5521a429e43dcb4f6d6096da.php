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
        $__internal_9d6fc544776fbe6a3f1a64843715bb6e3c4652f553fab44f1b0feea3d777ecff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6fc544776fbe6a3f1a64843715bb6e3c4652f553fab44f1b0feea3d777ecff->enter($__internal_9d6fc544776fbe6a3f1a64843715bb6e3c4652f553fab44f1b0feea3d777ecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1c9522b0e4d77273faf9e9799d81c5378950407f38b5da35c8d51451b867653d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9522b0e4d77273faf9e9799d81c5378950407f38b5da35c8d51451b867653d->enter($__internal_1c9522b0e4d77273faf9e9799d81c5378950407f38b5da35c8d51451b867653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9d6fc544776fbe6a3f1a64843715bb6e3c4652f553fab44f1b0feea3d777ecff->leave($__internal_9d6fc544776fbe6a3f1a64843715bb6e3c4652f553fab44f1b0feea3d777ecff_prof);

        
        $__internal_1c9522b0e4d77273faf9e9799d81c5378950407f38b5da35c8d51451b867653d->leave($__internal_1c9522b0e4d77273faf9e9799d81c5378950407f38b5da35c8d51451b867653d_prof);

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
