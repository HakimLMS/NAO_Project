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
        $__internal_cc5bc69363c26f01ec7580d24b7f4d64dedc702c6372e1618b75a411fd1c3152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5bc69363c26f01ec7580d24b7f4d64dedc702c6372e1618b75a411fd1c3152->enter($__internal_cc5bc69363c26f01ec7580d24b7f4d64dedc702c6372e1618b75a411fd1c3152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_37ab853a070bdce4f7a01339f30363ff827b862d58ad550e6daa1b2abc72cd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ab853a070bdce4f7a01339f30363ff827b862d58ad550e6daa1b2abc72cd2f->enter($__internal_37ab853a070bdce4f7a01339f30363ff827b862d58ad550e6daa1b2abc72cd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cc5bc69363c26f01ec7580d24b7f4d64dedc702c6372e1618b75a411fd1c3152->leave($__internal_cc5bc69363c26f01ec7580d24b7f4d64dedc702c6372e1618b75a411fd1c3152_prof);

        
        $__internal_37ab853a070bdce4f7a01339f30363ff827b862d58ad550e6daa1b2abc72cd2f->leave($__internal_37ab853a070bdce4f7a01339f30363ff827b862d58ad550e6daa1b2abc72cd2f_prof);

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
