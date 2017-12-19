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
        $__internal_bc6a4e3d84d51ad31e59e06effae308fdc45b12f36098c2d95a9c883590726e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6a4e3d84d51ad31e59e06effae308fdc45b12f36098c2d95a9c883590726e6->enter($__internal_bc6a4e3d84d51ad31e59e06effae308fdc45b12f36098c2d95a9c883590726e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8388d25258271c77c46698513306ef9865be1a017767679e1108c2a6ac9cb985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8388d25258271c77c46698513306ef9865be1a017767679e1108c2a6ac9cb985->enter($__internal_8388d25258271c77c46698513306ef9865be1a017767679e1108c2a6ac9cb985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bc6a4e3d84d51ad31e59e06effae308fdc45b12f36098c2d95a9c883590726e6->leave($__internal_bc6a4e3d84d51ad31e59e06effae308fdc45b12f36098c2d95a9c883590726e6_prof);

        
        $__internal_8388d25258271c77c46698513306ef9865be1a017767679e1108c2a6ac9cb985->leave($__internal_8388d25258271c77c46698513306ef9865be1a017767679e1108c2a6ac9cb985_prof);

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
