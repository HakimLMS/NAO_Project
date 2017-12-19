<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4405ed7a96c20fae48611ac333110ee1a08da1d31b1b224acf6fbf8fab85210a extends Twig_Template
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
        $__internal_ce3e2a334aba1a762db275d7955b3cbbd965c45363a4f4a0cb4bec8201496bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3e2a334aba1a762db275d7955b3cbbd965c45363a4f4a0cb4bec8201496bfb->enter($__internal_ce3e2a334aba1a762db275d7955b3cbbd965c45363a4f4a0cb4bec8201496bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e2aef9b09aa14c4e80d390701be24ff600c56db812ca1ca10da246814625577e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2aef9b09aa14c4e80d390701be24ff600c56db812ca1ca10da246814625577e->enter($__internal_e2aef9b09aa14c4e80d390701be24ff600c56db812ca1ca10da246814625577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ce3e2a334aba1a762db275d7955b3cbbd965c45363a4f4a0cb4bec8201496bfb->leave($__internal_ce3e2a334aba1a762db275d7955b3cbbd965c45363a4f4a0cb4bec8201496bfb_prof);

        
        $__internal_e2aef9b09aa14c4e80d390701be24ff600c56db812ca1ca10da246814625577e->leave($__internal_e2aef9b09aa14c4e80d390701be24ff600c56db812ca1ca10da246814625577e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
