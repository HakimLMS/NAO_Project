<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e710190d82739942928179f96cb938533150158cf3c564580d1af243efc35dd6 extends Twig_Template
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
        $__internal_ee5083251911fcd41ee7d12770dac6eeb1d1fe5cbf5e6800afa0019e42037efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5083251911fcd41ee7d12770dac6eeb1d1fe5cbf5e6800afa0019e42037efa->enter($__internal_ee5083251911fcd41ee7d12770dac6eeb1d1fe5cbf5e6800afa0019e42037efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2781ca5ecdef6f5bd2adce72081b787fa32a86f2a6af4c2e5f5b209f0a00ca88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2781ca5ecdef6f5bd2adce72081b787fa32a86f2a6af4c2e5f5b209f0a00ca88->enter($__internal_2781ca5ecdef6f5bd2adce72081b787fa32a86f2a6af4c2e5f5b209f0a00ca88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ee5083251911fcd41ee7d12770dac6eeb1d1fe5cbf5e6800afa0019e42037efa->leave($__internal_ee5083251911fcd41ee7d12770dac6eeb1d1fe5cbf5e6800afa0019e42037efa_prof);

        
        $__internal_2781ca5ecdef6f5bd2adce72081b787fa32a86f2a6af4c2e5f5b209f0a00ca88->leave($__internal_2781ca5ecdef6f5bd2adce72081b787fa32a86f2a6af4c2e5f5b209f0a00ca88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
