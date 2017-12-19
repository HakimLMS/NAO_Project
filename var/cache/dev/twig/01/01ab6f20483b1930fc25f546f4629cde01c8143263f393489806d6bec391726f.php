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
        $__internal_cf2760e7200b564ccb69ec9de117973528569f0ba337b69e4a0a45edd2b594f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2760e7200b564ccb69ec9de117973528569f0ba337b69e4a0a45edd2b594f1->enter($__internal_cf2760e7200b564ccb69ec9de117973528569f0ba337b69e4a0a45edd2b594f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_113d091b36f71ce6cf546be7147ecac796fe5b0cc97ca61f06bcb6cf9d20989e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d091b36f71ce6cf546be7147ecac796fe5b0cc97ca61f06bcb6cf9d20989e->enter($__internal_113d091b36f71ce6cf546be7147ecac796fe5b0cc97ca61f06bcb6cf9d20989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cf2760e7200b564ccb69ec9de117973528569f0ba337b69e4a0a45edd2b594f1->leave($__internal_cf2760e7200b564ccb69ec9de117973528569f0ba337b69e4a0a45edd2b594f1_prof);

        
        $__internal_113d091b36f71ce6cf546be7147ecac796fe5b0cc97ca61f06bcb6cf9d20989e->leave($__internal_113d091b36f71ce6cf546be7147ecac796fe5b0cc97ca61f06bcb6cf9d20989e_prof);

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
