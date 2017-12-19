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
        $__internal_fabb0449c160b398a47e991669a522fb4d6c19a3477eb4a5b4651a954cfe05d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabb0449c160b398a47e991669a522fb4d6c19a3477eb4a5b4651a954cfe05d6->enter($__internal_fabb0449c160b398a47e991669a522fb4d6c19a3477eb4a5b4651a954cfe05d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_834a8722f77c087b807e69228d3e8304ef2ad14d381d99bc3daeb1a7f47bd958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834a8722f77c087b807e69228d3e8304ef2ad14d381d99bc3daeb1a7f47bd958->enter($__internal_834a8722f77c087b807e69228d3e8304ef2ad14d381d99bc3daeb1a7f47bd958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fabb0449c160b398a47e991669a522fb4d6c19a3477eb4a5b4651a954cfe05d6->leave($__internal_fabb0449c160b398a47e991669a522fb4d6c19a3477eb4a5b4651a954cfe05d6_prof);

        
        $__internal_834a8722f77c087b807e69228d3e8304ef2ad14d381d99bc3daeb1a7f47bd958->leave($__internal_834a8722f77c087b807e69228d3e8304ef2ad14d381d99bc3daeb1a7f47bd958_prof);

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
", "@Framework/Form/integer_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
