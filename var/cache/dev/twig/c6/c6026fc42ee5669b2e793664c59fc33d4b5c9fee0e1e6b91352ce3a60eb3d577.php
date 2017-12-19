<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_96a25ec75909c84e8f8705b091eca5d07705a8bf3bc288fc823137d05d91105a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a25ec75909c84e8f8705b091eca5d07705a8bf3bc288fc823137d05d91105a->enter($__internal_96a25ec75909c84e8f8705b091eca5d07705a8bf3bc288fc823137d05d91105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e5e49dce54905bda327c25d475baece9a9344fb2e53f8d7aa2f280b179494d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e49dce54905bda327c25d475baece9a9344fb2e53f8d7aa2f280b179494d1f->enter($__internal_e5e49dce54905bda327c25d475baece9a9344fb2e53f8d7aa2f280b179494d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_96a25ec75909c84e8f8705b091eca5d07705a8bf3bc288fc823137d05d91105a->leave($__internal_96a25ec75909c84e8f8705b091eca5d07705a8bf3bc288fc823137d05d91105a_prof);

        
        $__internal_e5e49dce54905bda327c25d475baece9a9344fb2e53f8d7aa2f280b179494d1f->leave($__internal_e5e49dce54905bda327c25d475baece9a9344fb2e53f8d7aa2f280b179494d1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
