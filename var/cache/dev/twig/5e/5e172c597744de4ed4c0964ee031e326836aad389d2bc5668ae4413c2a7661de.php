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
        $__internal_edeb08a67e0de7d428ec5c8e092b7f0883b339fbc8e47827c9899c54d7ca1e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edeb08a67e0de7d428ec5c8e092b7f0883b339fbc8e47827c9899c54d7ca1e6a->enter($__internal_edeb08a67e0de7d428ec5c8e092b7f0883b339fbc8e47827c9899c54d7ca1e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ea73edbe1ef6c786a1310a9ebd083692c94014209f72fec02b705b75cdfa2c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea73edbe1ef6c786a1310a9ebd083692c94014209f72fec02b705b75cdfa2c84->enter($__internal_ea73edbe1ef6c786a1310a9ebd083692c94014209f72fec02b705b75cdfa2c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_edeb08a67e0de7d428ec5c8e092b7f0883b339fbc8e47827c9899c54d7ca1e6a->leave($__internal_edeb08a67e0de7d428ec5c8e092b7f0883b339fbc8e47827c9899c54d7ca1e6a_prof);

        
        $__internal_ea73edbe1ef6c786a1310a9ebd083692c94014209f72fec02b705b75cdfa2c84->leave($__internal_ea73edbe1ef6c786a1310a9ebd083692c94014209f72fec02b705b75cdfa2c84_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
