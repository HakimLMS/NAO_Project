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
        $__internal_39243b85a5ab57b4ed7ce47c6d8f76cc4a7fca8082d6bccd7358cfe97cb76b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39243b85a5ab57b4ed7ce47c6d8f76cc4a7fca8082d6bccd7358cfe97cb76b54->enter($__internal_39243b85a5ab57b4ed7ce47c6d8f76cc4a7fca8082d6bccd7358cfe97cb76b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8a1565c36fbd34706bd3f7504acbe8f845144494fce3a1ef99f40bec124a77ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1565c36fbd34706bd3f7504acbe8f845144494fce3a1ef99f40bec124a77ed->enter($__internal_8a1565c36fbd34706bd3f7504acbe8f845144494fce3a1ef99f40bec124a77ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_39243b85a5ab57b4ed7ce47c6d8f76cc4a7fca8082d6bccd7358cfe97cb76b54->leave($__internal_39243b85a5ab57b4ed7ce47c6d8f76cc4a7fca8082d6bccd7358cfe97cb76b54_prof);

        
        $__internal_8a1565c36fbd34706bd3f7504acbe8f845144494fce3a1ef99f40bec124a77ed->leave($__internal_8a1565c36fbd34706bd3f7504acbe8f845144494fce3a1ef99f40bec124a77ed_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
