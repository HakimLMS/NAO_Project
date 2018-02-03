<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9befff9c36ecb304a16f585a30c19f1a4d025f7481da052bc428276aea79cb57 extends Twig_Template
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
        $__internal_0015a7f0192748d442131b2f89337133f275f03f82476c05c6b44ce660e49abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0015a7f0192748d442131b2f89337133f275f03f82476c05c6b44ce660e49abe->enter($__internal_0015a7f0192748d442131b2f89337133f275f03f82476c05c6b44ce660e49abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9c563834584e61addabb5130433bb7884df5f77a5fbd0f3ae8d8dbf23ef1e8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c563834584e61addabb5130433bb7884df5f77a5fbd0f3ae8d8dbf23ef1e8fd->enter($__internal_9c563834584e61addabb5130433bb7884df5f77a5fbd0f3ae8d8dbf23ef1e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0015a7f0192748d442131b2f89337133f275f03f82476c05c6b44ce660e49abe->leave($__internal_0015a7f0192748d442131b2f89337133f275f03f82476c05c6b44ce660e49abe_prof);

        
        $__internal_9c563834584e61addabb5130433bb7884df5f77a5fbd0f3ae8d8dbf23ef1e8fd->leave($__internal_9c563834584e61addabb5130433bb7884df5f77a5fbd0f3ae8d8dbf23ef1e8fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
