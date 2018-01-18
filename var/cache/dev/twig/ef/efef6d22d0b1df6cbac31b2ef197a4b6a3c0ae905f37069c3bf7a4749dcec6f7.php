<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9fd3c39394b87ea2b209f9460120e7a33707c7bb4e262d46ac0ac45d61c717af extends Twig_Template
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
        $__internal_2cc817d04ebcae9b61016293abdc04d681270390b63d81c5cb83fb2d3f3247bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc817d04ebcae9b61016293abdc04d681270390b63d81c5cb83fb2d3f3247bb->enter($__internal_2cc817d04ebcae9b61016293abdc04d681270390b63d81c5cb83fb2d3f3247bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a6cf0a961cb304832f9a71e509a217af00fadd41cdab56d25fa108b252b3a41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cf0a961cb304832f9a71e509a217af00fadd41cdab56d25fa108b252b3a41b->enter($__internal_a6cf0a961cb304832f9a71e509a217af00fadd41cdab56d25fa108b252b3a41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2cc817d04ebcae9b61016293abdc04d681270390b63d81c5cb83fb2d3f3247bb->leave($__internal_2cc817d04ebcae9b61016293abdc04d681270390b63d81c5cb83fb2d3f3247bb_prof);

        
        $__internal_a6cf0a961cb304832f9a71e509a217af00fadd41cdab56d25fa108b252b3a41b->leave($__internal_a6cf0a961cb304832f9a71e509a217af00fadd41cdab56d25fa108b252b3a41b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
