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
        $__internal_96a23d1fa8cd8769e8ff030980c3619f83cbb0ec87bbc9fa1c1521143475ea1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a23d1fa8cd8769e8ff030980c3619f83cbb0ec87bbc9fa1c1521143475ea1b->enter($__internal_96a23d1fa8cd8769e8ff030980c3619f83cbb0ec87bbc9fa1c1521143475ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e86c99054923c16e563e2bcd625c9c383a89c65b8e530e343cffe2bb19b070c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86c99054923c16e563e2bcd625c9c383a89c65b8e530e343cffe2bb19b070c3->enter($__internal_e86c99054923c16e563e2bcd625c9c383a89c65b8e530e343cffe2bb19b070c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_96a23d1fa8cd8769e8ff030980c3619f83cbb0ec87bbc9fa1c1521143475ea1b->leave($__internal_96a23d1fa8cd8769e8ff030980c3619f83cbb0ec87bbc9fa1c1521143475ea1b_prof);

        
        $__internal_e86c99054923c16e563e2bcd625c9c383a89c65b8e530e343cffe2bb19b070c3->leave($__internal_e86c99054923c16e563e2bcd625c9c383a89c65b8e530e343cffe2bb19b070c3_prof);

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
