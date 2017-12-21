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
        $__internal_0c4e6e81e8662b200a278cd776f97d8dae470a0de2b0df565b2024fb9cd97824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4e6e81e8662b200a278cd776f97d8dae470a0de2b0df565b2024fb9cd97824->enter($__internal_0c4e6e81e8662b200a278cd776f97d8dae470a0de2b0df565b2024fb9cd97824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cd6f810e3db0cf173166598897a4cbf3ce74a1f8d9f88e5ed101cd5ed08a520e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6f810e3db0cf173166598897a4cbf3ce74a1f8d9f88e5ed101cd5ed08a520e->enter($__internal_cd6f810e3db0cf173166598897a4cbf3ce74a1f8d9f88e5ed101cd5ed08a520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0c4e6e81e8662b200a278cd776f97d8dae470a0de2b0df565b2024fb9cd97824->leave($__internal_0c4e6e81e8662b200a278cd776f97d8dae470a0de2b0df565b2024fb9cd97824_prof);

        
        $__internal_cd6f810e3db0cf173166598897a4cbf3ce74a1f8d9f88e5ed101cd5ed08a520e->leave($__internal_cd6f810e3db0cf173166598897a4cbf3ce74a1f8d9f88e5ed101cd5ed08a520e_prof);

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
