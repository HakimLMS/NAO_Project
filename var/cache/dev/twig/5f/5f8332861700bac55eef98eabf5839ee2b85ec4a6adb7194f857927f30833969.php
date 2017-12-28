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
        $__internal_c7ab043da2c05ac1fa9130ade2c533c0ac36d737f1cce1307ef184d3f1e171e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ab043da2c05ac1fa9130ade2c533c0ac36d737f1cce1307ef184d3f1e171e0->enter($__internal_c7ab043da2c05ac1fa9130ade2c533c0ac36d737f1cce1307ef184d3f1e171e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_54a31675d1675103bf77024803a7fe6a928f8ce5e0de89e51efd2ee01bea3777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a31675d1675103bf77024803a7fe6a928f8ce5e0de89e51efd2ee01bea3777->enter($__internal_54a31675d1675103bf77024803a7fe6a928f8ce5e0de89e51efd2ee01bea3777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c7ab043da2c05ac1fa9130ade2c533c0ac36d737f1cce1307ef184d3f1e171e0->leave($__internal_c7ab043da2c05ac1fa9130ade2c533c0ac36d737f1cce1307ef184d3f1e171e0_prof);

        
        $__internal_54a31675d1675103bf77024803a7fe6a928f8ce5e0de89e51efd2ee01bea3777->leave($__internal_54a31675d1675103bf77024803a7fe6a928f8ce5e0de89e51efd2ee01bea3777_prof);

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
