<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_a9c01fd9a23926d8ed36392a4590d06f4d3a3dc169555770542028aefaacd884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c01fd9a23926d8ed36392a4590d06f4d3a3dc169555770542028aefaacd884->enter($__internal_a9c01fd9a23926d8ed36392a4590d06f4d3a3dc169555770542028aefaacd884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_afc3c6bda1660dd9a6fc9b83fcb695595f614c9ba232a3f02deb0da5d896c0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc3c6bda1660dd9a6fc9b83fcb695595f614c9ba232a3f02deb0da5d896c0e7->enter($__internal_afc3c6bda1660dd9a6fc9b83fcb695595f614c9ba232a3f02deb0da5d896c0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a9c01fd9a23926d8ed36392a4590d06f4d3a3dc169555770542028aefaacd884->leave($__internal_a9c01fd9a23926d8ed36392a4590d06f4d3a3dc169555770542028aefaacd884_prof);

        
        $__internal_afc3c6bda1660dd9a6fc9b83fcb695595f614c9ba232a3f02deb0da5d896c0e7->leave($__internal_afc3c6bda1660dd9a6fc9b83fcb695595f614c9ba232a3f02deb0da5d896c0e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
