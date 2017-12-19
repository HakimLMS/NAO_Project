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
        $__internal_33fad85178977f3397f67353827e33a4f0aebd480701e3a293cd3c88f4883cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fad85178977f3397f67353827e33a4f0aebd480701e3a293cd3c88f4883cd1->enter($__internal_33fad85178977f3397f67353827e33a4f0aebd480701e3a293cd3c88f4883cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a3ad898e0f28b97fef427a516caa5009fee1165f3ad62aa428b724bd035513a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ad898e0f28b97fef427a516caa5009fee1165f3ad62aa428b724bd035513a7->enter($__internal_a3ad898e0f28b97fef427a516caa5009fee1165f3ad62aa428b724bd035513a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_33fad85178977f3397f67353827e33a4f0aebd480701e3a293cd3c88f4883cd1->leave($__internal_33fad85178977f3397f67353827e33a4f0aebd480701e3a293cd3c88f4883cd1_prof);

        
        $__internal_a3ad898e0f28b97fef427a516caa5009fee1165f3ad62aa428b724bd035513a7->leave($__internal_a3ad898e0f28b97fef427a516caa5009fee1165f3ad62aa428b724bd035513a7_prof);

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
