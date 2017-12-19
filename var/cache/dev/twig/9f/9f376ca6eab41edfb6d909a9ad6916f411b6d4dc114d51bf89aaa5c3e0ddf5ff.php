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
        $__internal_bcd99a080af3f215ebd22527bc32d320dd93426e0a8d234958c2ef7af5713b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd99a080af3f215ebd22527bc32d320dd93426e0a8d234958c2ef7af5713b1f->enter($__internal_bcd99a080af3f215ebd22527bc32d320dd93426e0a8d234958c2ef7af5713b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ad4f9417143ffd6adf57953b3c1659227784a38a0ebdc48868eeb11104464a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4f9417143ffd6adf57953b3c1659227784a38a0ebdc48868eeb11104464a4e->enter($__internal_ad4f9417143ffd6adf57953b3c1659227784a38a0ebdc48868eeb11104464a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bcd99a080af3f215ebd22527bc32d320dd93426e0a8d234958c2ef7af5713b1f->leave($__internal_bcd99a080af3f215ebd22527bc32d320dd93426e0a8d234958c2ef7af5713b1f_prof);

        
        $__internal_ad4f9417143ffd6adf57953b3c1659227784a38a0ebdc48868eeb11104464a4e->leave($__internal_ad4f9417143ffd6adf57953b3c1659227784a38a0ebdc48868eeb11104464a4e_prof);

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
