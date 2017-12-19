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
        $__internal_8d47822055f070c23282ae876685b100e9b680ebd98322ac43d2a174c745cffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d47822055f070c23282ae876685b100e9b680ebd98322ac43d2a174c745cffa->enter($__internal_8d47822055f070c23282ae876685b100e9b680ebd98322ac43d2a174c745cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_33908ea612c2ab59ea2e1814f8dfd6093528b475a37c4881af2e074cea95eda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33908ea612c2ab59ea2e1814f8dfd6093528b475a37c4881af2e074cea95eda9->enter($__internal_33908ea612c2ab59ea2e1814f8dfd6093528b475a37c4881af2e074cea95eda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8d47822055f070c23282ae876685b100e9b680ebd98322ac43d2a174c745cffa->leave($__internal_8d47822055f070c23282ae876685b100e9b680ebd98322ac43d2a174c745cffa_prof);

        
        $__internal_33908ea612c2ab59ea2e1814f8dfd6093528b475a37c4881af2e074cea95eda9->leave($__internal_33908ea612c2ab59ea2e1814f8dfd6093528b475a37c4881af2e074cea95eda9_prof);

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
", "@Framework/Form/form_rows.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
