<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a5fd5b3999a6a6e53295c30a0c6dc369156bcbecd87308d6be069aa3069a3b2 extends Twig_Template
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
        $__internal_b0b834df0db4547345d57c4e3b880ec7c735b42690d7b249a5219f3f17704813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b834df0db4547345d57c4e3b880ec7c735b42690d7b249a5219f3f17704813->enter($__internal_b0b834df0db4547345d57c4e3b880ec7c735b42690d7b249a5219f3f17704813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5a66df8f23708214d622226d7fa9ea7b4a1b89e1a5a260f70a3eb46aa81fd7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a66df8f23708214d622226d7fa9ea7b4a1b89e1a5a260f70a3eb46aa81fd7a1->enter($__internal_5a66df8f23708214d622226d7fa9ea7b4a1b89e1a5a260f70a3eb46aa81fd7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b0b834df0db4547345d57c4e3b880ec7c735b42690d7b249a5219f3f17704813->leave($__internal_b0b834df0db4547345d57c4e3b880ec7c735b42690d7b249a5219f3f17704813_prof);

        
        $__internal_5a66df8f23708214d622226d7fa9ea7b4a1b89e1a5a260f70a3eb46aa81fd7a1->leave($__internal_5a66df8f23708214d622226d7fa9ea7b4a1b89e1a5a260f70a3eb46aa81fd7a1_prof);

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
