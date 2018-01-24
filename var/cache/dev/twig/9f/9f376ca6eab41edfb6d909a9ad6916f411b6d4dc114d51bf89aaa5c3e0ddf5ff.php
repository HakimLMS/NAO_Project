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
        $__internal_03f352d2ba3bb5e1978181918145e28094524aa8ffbadb7b0cf95306696ab44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f352d2ba3bb5e1978181918145e28094524aa8ffbadb7b0cf95306696ab44d->enter($__internal_03f352d2ba3bb5e1978181918145e28094524aa8ffbadb7b0cf95306696ab44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6edd5807ba209c7a65ffb62388ad3a5e257a99b669a6ae2af31c628a4a4dd4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edd5807ba209c7a65ffb62388ad3a5e257a99b669a6ae2af31c628a4a4dd4f0->enter($__internal_6edd5807ba209c7a65ffb62388ad3a5e257a99b669a6ae2af31c628a4a4dd4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_03f352d2ba3bb5e1978181918145e28094524aa8ffbadb7b0cf95306696ab44d->leave($__internal_03f352d2ba3bb5e1978181918145e28094524aa8ffbadb7b0cf95306696ab44d_prof);

        
        $__internal_6edd5807ba209c7a65ffb62388ad3a5e257a99b669a6ae2af31c628a4a4dd4f0->leave($__internal_6edd5807ba209c7a65ffb62388ad3a5e257a99b669a6ae2af31c628a4a4dd4f0_prof);

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
