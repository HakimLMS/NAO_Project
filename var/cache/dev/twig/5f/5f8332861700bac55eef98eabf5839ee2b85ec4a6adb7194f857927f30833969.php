<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_653b3a902c2757f5e6004712ee426b53f84164542345fe1282b611824d56680c extends Twig_Template
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
        $__internal_a61d16c543fca1a5d50af987c1349156588fa263f0e0514a7b55f98096712353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61d16c543fca1a5d50af987c1349156588fa263f0e0514a7b55f98096712353->enter($__internal_a61d16c543fca1a5d50af987c1349156588fa263f0e0514a7b55f98096712353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f4e523c392374e50bbe97ed4c5e77959d6deb21b3f4669d40c4a65076285655b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e523c392374e50bbe97ed4c5e77959d6deb21b3f4669d40c4a65076285655b->enter($__internal_f4e523c392374e50bbe97ed4c5e77959d6deb21b3f4669d40c4a65076285655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a61d16c543fca1a5d50af987c1349156588fa263f0e0514a7b55f98096712353->leave($__internal_a61d16c543fca1a5d50af987c1349156588fa263f0e0514a7b55f98096712353_prof);

        
        $__internal_f4e523c392374e50bbe97ed4c5e77959d6deb21b3f4669d40c4a65076285655b->leave($__internal_f4e523c392374e50bbe97ed4c5e77959d6deb21b3f4669d40c4a65076285655b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
