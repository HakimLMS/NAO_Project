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
        $__internal_faffd02bb85921f78487308cf97e35d8879acba0411baec49fa8cd5b8d1002c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faffd02bb85921f78487308cf97e35d8879acba0411baec49fa8cd5b8d1002c5->enter($__internal_faffd02bb85921f78487308cf97e35d8879acba0411baec49fa8cd5b8d1002c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_49d1d88504bdc422014c6a4184a1adc189c3381c8467a8374714f5724d8ce9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d1d88504bdc422014c6a4184a1adc189c3381c8467a8374714f5724d8ce9de->enter($__internal_49d1d88504bdc422014c6a4184a1adc189c3381c8467a8374714f5724d8ce9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_faffd02bb85921f78487308cf97e35d8879acba0411baec49fa8cd5b8d1002c5->leave($__internal_faffd02bb85921f78487308cf97e35d8879acba0411baec49fa8cd5b8d1002c5_prof);

        
        $__internal_49d1d88504bdc422014c6a4184a1adc189c3381c8467a8374714f5724d8ce9de->leave($__internal_49d1d88504bdc422014c6a4184a1adc189c3381c8467a8374714f5724d8ce9de_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
