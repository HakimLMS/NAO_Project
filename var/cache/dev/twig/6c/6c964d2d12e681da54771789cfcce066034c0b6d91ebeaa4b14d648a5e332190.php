<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86ee718f3d1e47f32a4924b18c7d7b60eac32a2f1bfc6654367dc5581f23aac3 extends Twig_Template
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
        $__internal_3592be529f741c8afb9ad2e24d6e2557a9cbb8549a3bdf4edc36a269492ab3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3592be529f741c8afb9ad2e24d6e2557a9cbb8549a3bdf4edc36a269492ab3b7->enter($__internal_3592be529f741c8afb9ad2e24d6e2557a9cbb8549a3bdf4edc36a269492ab3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f4660788002a3d13932916fdb9e237a303f6c1eaca16a671baf8045603cc7d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4660788002a3d13932916fdb9e237a303f6c1eaca16a671baf8045603cc7d2e->enter($__internal_f4660788002a3d13932916fdb9e237a303f6c1eaca16a671baf8045603cc7d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3592be529f741c8afb9ad2e24d6e2557a9cbb8549a3bdf4edc36a269492ab3b7->leave($__internal_3592be529f741c8afb9ad2e24d6e2557a9cbb8549a3bdf4edc36a269492ab3b7_prof);

        
        $__internal_f4660788002a3d13932916fdb9e237a303f6c1eaca16a671baf8045603cc7d2e->leave($__internal_f4660788002a3d13932916fdb9e237a303f6c1eaca16a671baf8045603cc7d2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
