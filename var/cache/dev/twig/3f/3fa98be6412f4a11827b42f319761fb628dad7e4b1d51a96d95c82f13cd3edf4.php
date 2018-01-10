<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e6f6d26453be800602cf8b4c1fb154d33c4d877ecdde439de867574d9c2b2b57 extends Twig_Template
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
        $__internal_a39b87e6fdd91dfe01a72c7695f91c7fb2ab967ce1058b65f2d172f0e5fb58af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39b87e6fdd91dfe01a72c7695f91c7fb2ab967ce1058b65f2d172f0e5fb58af->enter($__internal_a39b87e6fdd91dfe01a72c7695f91c7fb2ab967ce1058b65f2d172f0e5fb58af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c5cc95b51fbb007333cee627e6fe00c0b2384a77d9f65c378a17d2b53526ed29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cc95b51fbb007333cee627e6fe00c0b2384a77d9f65c378a17d2b53526ed29->enter($__internal_c5cc95b51fbb007333cee627e6fe00c0b2384a77d9f65c378a17d2b53526ed29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a39b87e6fdd91dfe01a72c7695f91c7fb2ab967ce1058b65f2d172f0e5fb58af->leave($__internal_a39b87e6fdd91dfe01a72c7695f91c7fb2ab967ce1058b65f2d172f0e5fb58af_prof);

        
        $__internal_c5cc95b51fbb007333cee627e6fe00c0b2384a77d9f65c378a17d2b53526ed29->leave($__internal_c5cc95b51fbb007333cee627e6fe00c0b2384a77d9f65c378a17d2b53526ed29_prof);

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
", "@Framework/Form/form_rest.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
