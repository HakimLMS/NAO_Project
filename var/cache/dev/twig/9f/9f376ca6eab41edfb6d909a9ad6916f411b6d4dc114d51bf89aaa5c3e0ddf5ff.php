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
        $__internal_7cbbc77e580fe10129aa965100452cf528d025df3571c852eef3fa8dd68c1d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbbc77e580fe10129aa965100452cf528d025df3571c852eef3fa8dd68c1d88->enter($__internal_7cbbc77e580fe10129aa965100452cf528d025df3571c852eef3fa8dd68c1d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4d9a536a2cfc94ee332361a194eba4a9ada9536136d910b4368dfd372dacae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9a536a2cfc94ee332361a194eba4a9ada9536136d910b4368dfd372dacae3a->enter($__internal_4d9a536a2cfc94ee332361a194eba4a9ada9536136d910b4368dfd372dacae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7cbbc77e580fe10129aa965100452cf528d025df3571c852eef3fa8dd68c1d88->leave($__internal_7cbbc77e580fe10129aa965100452cf528d025df3571c852eef3fa8dd68c1d88_prof);

        
        $__internal_4d9a536a2cfc94ee332361a194eba4a9ada9536136d910b4368dfd372dacae3a->leave($__internal_4d9a536a2cfc94ee332361a194eba4a9ada9536136d910b4368dfd372dacae3a_prof);

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
