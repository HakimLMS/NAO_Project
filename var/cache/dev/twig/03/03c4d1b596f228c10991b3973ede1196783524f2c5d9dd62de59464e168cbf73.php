<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f19bf554848926a53f71dd044585bc141a931e42e50ce50bc0a8764b597c843 extends Twig_Template
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
        $__internal_c07e49610d57cb4cd6259ab22c29c60ad454b798902eafce3ba42474e28e3db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07e49610d57cb4cd6259ab22c29c60ad454b798902eafce3ba42474e28e3db4->enter($__internal_c07e49610d57cb4cd6259ab22c29c60ad454b798902eafce3ba42474e28e3db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_84dd6c65ad215367c5ebd09655fb15c8d62f2079a032c73d3f8ffb7a7ca49854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dd6c65ad215367c5ebd09655fb15c8d62f2079a032c73d3f8ffb7a7ca49854->enter($__internal_84dd6c65ad215367c5ebd09655fb15c8d62f2079a032c73d3f8ffb7a7ca49854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c07e49610d57cb4cd6259ab22c29c60ad454b798902eafce3ba42474e28e3db4->leave($__internal_c07e49610d57cb4cd6259ab22c29c60ad454b798902eafce3ba42474e28e3db4_prof);

        
        $__internal_84dd6c65ad215367c5ebd09655fb15c8d62f2079a032c73d3f8ffb7a7ca49854->leave($__internal_84dd6c65ad215367c5ebd09655fb15c8d62f2079a032c73d3f8ffb7a7ca49854_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
