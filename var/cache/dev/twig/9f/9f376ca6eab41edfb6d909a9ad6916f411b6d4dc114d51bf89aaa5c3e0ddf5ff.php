<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_988b7365c3d99ad2ec26ae98bfdfd0acd15d7bc349622fee4e1668d87a4389d9 extends Twig_Template
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
        $__internal_17dd7984a1ba03287585da399519d57065367313c29359be647a731df3868e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dd7984a1ba03287585da399519d57065367313c29359be647a731df3868e85->enter($__internal_17dd7984a1ba03287585da399519d57065367313c29359be647a731df3868e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5cfd199fba986f1a41e6e2fc1fc0f9186cddbfbbd2a5b379a33bbf51ccd683f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfd199fba986f1a41e6e2fc1fc0f9186cddbfbbd2a5b379a33bbf51ccd683f7->enter($__internal_5cfd199fba986f1a41e6e2fc1fc0f9186cddbfbbd2a5b379a33bbf51ccd683f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_17dd7984a1ba03287585da399519d57065367313c29359be647a731df3868e85->leave($__internal_17dd7984a1ba03287585da399519d57065367313c29359be647a731df3868e85_prof);

        
        $__internal_5cfd199fba986f1a41e6e2fc1fc0f9186cddbfbbd2a5b379a33bbf51ccd683f7->leave($__internal_5cfd199fba986f1a41e6e2fc1fc0f9186cddbfbbd2a5b379a33bbf51ccd683f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
