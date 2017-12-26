<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_75fa465d4890385095c7a13e9218557ab084e619c3bd9681658371e4b229de04 extends Twig_Template
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
        $__internal_f62c0718ae51f2b9092eedeb6c46885333af989a764fa168058d1ef6607dbad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62c0718ae51f2b9092eedeb6c46885333af989a764fa168058d1ef6607dbad9->enter($__internal_f62c0718ae51f2b9092eedeb6c46885333af989a764fa168058d1ef6607dbad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_231de6596d5cd642b733213c3dfb2bd332101a413a3853e6dbe8c1c63404e452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231de6596d5cd642b733213c3dfb2bd332101a413a3853e6dbe8c1c63404e452->enter($__internal_231de6596d5cd642b733213c3dfb2bd332101a413a3853e6dbe8c1c63404e452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f62c0718ae51f2b9092eedeb6c46885333af989a764fa168058d1ef6607dbad9->leave($__internal_f62c0718ae51f2b9092eedeb6c46885333af989a764fa168058d1ef6607dbad9_prof);

        
        $__internal_231de6596d5cd642b733213c3dfb2bd332101a413a3853e6dbe8c1c63404e452->leave($__internal_231de6596d5cd642b733213c3dfb2bd332101a413a3853e6dbe8c1c63404e452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
