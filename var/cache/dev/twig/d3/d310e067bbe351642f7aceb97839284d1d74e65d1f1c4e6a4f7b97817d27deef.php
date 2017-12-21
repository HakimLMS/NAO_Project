<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f2d58f29dfa6ef85aaa2d861b7edee9deff288dff07879fa21a5741247c6c804 extends Twig_Template
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
        $__internal_fc1df4573fb786ff0538b2768cdeb2b17ea48d8d5863467af3a707003469d803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1df4573fb786ff0538b2768cdeb2b17ea48d8d5863467af3a707003469d803->enter($__internal_fc1df4573fb786ff0538b2768cdeb2b17ea48d8d5863467af3a707003469d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c0d1c13a9cca5f87e6de894f1bbe803545085f50e55f2799a5617276bcd823da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d1c13a9cca5f87e6de894f1bbe803545085f50e55f2799a5617276bcd823da->enter($__internal_c0d1c13a9cca5f87e6de894f1bbe803545085f50e55f2799a5617276bcd823da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fc1df4573fb786ff0538b2768cdeb2b17ea48d8d5863467af3a707003469d803->leave($__internal_fc1df4573fb786ff0538b2768cdeb2b17ea48d8d5863467af3a707003469d803_prof);

        
        $__internal_c0d1c13a9cca5f87e6de894f1bbe803545085f50e55f2799a5617276bcd823da->leave($__internal_c0d1c13a9cca5f87e6de894f1bbe803545085f50e55f2799a5617276bcd823da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
