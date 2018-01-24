<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_25c6dd6500fc6b430f2197892b94274c86bf89194d8e7bff23268db5afca929c extends Twig_Template
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
        $__internal_0a4ae52f1c54f69c9cd7397464b819f47ad3f278fb708231938d4e7d19268381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4ae52f1c54f69c9cd7397464b819f47ad3f278fb708231938d4e7d19268381->enter($__internal_0a4ae52f1c54f69c9cd7397464b819f47ad3f278fb708231938d4e7d19268381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_afd55e72348d5d3a56a3286f0ed4127aaeefcc0d4ae6e786a70f6304c07e853e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd55e72348d5d3a56a3286f0ed4127aaeefcc0d4ae6e786a70f6304c07e853e->enter($__internal_afd55e72348d5d3a56a3286f0ed4127aaeefcc0d4ae6e786a70f6304c07e853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0a4ae52f1c54f69c9cd7397464b819f47ad3f278fb708231938d4e7d19268381->leave($__internal_0a4ae52f1c54f69c9cd7397464b819f47ad3f278fb708231938d4e7d19268381_prof);

        
        $__internal_afd55e72348d5d3a56a3286f0ed4127aaeefcc0d4ae6e786a70f6304c07e853e->leave($__internal_afd55e72348d5d3a56a3286f0ed4127aaeefcc0d4ae6e786a70f6304c07e853e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
