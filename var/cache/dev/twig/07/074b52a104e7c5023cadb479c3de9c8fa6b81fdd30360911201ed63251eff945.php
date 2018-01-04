<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b648f8a55138f24463339b839bf659b1d8c8632e2d50760a7f9cc8301ab65fd extends Twig_Template
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
        $__internal_4e6959d8514af96512e49d8adf68ab80b47defc96d872b3fdf2621ac68589380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6959d8514af96512e49d8adf68ab80b47defc96d872b3fdf2621ac68589380->enter($__internal_4e6959d8514af96512e49d8adf68ab80b47defc96d872b3fdf2621ac68589380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_18d7662003c7d6831dea96721502146b06a8543eafc7af8bec54236657910c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d7662003c7d6831dea96721502146b06a8543eafc7af8bec54236657910c78->enter($__internal_18d7662003c7d6831dea96721502146b06a8543eafc7af8bec54236657910c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4e6959d8514af96512e49d8adf68ab80b47defc96d872b3fdf2621ac68589380->leave($__internal_4e6959d8514af96512e49d8adf68ab80b47defc96d872b3fdf2621ac68589380_prof);

        
        $__internal_18d7662003c7d6831dea96721502146b06a8543eafc7af8bec54236657910c78->leave($__internal_18d7662003c7d6831dea96721502146b06a8543eafc7af8bec54236657910c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
