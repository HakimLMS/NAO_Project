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
        $__internal_1c2454ecbd6ea25b5fbebd61c28dffe2bc387b997ba7d7e954bccc09c227547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2454ecbd6ea25b5fbebd61c28dffe2bc387b997ba7d7e954bccc09c227547f->enter($__internal_1c2454ecbd6ea25b5fbebd61c28dffe2bc387b997ba7d7e954bccc09c227547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4a9d7703941f6bd96643d62462975ead1973bc9c56aa702cd63b6eb1c519bd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9d7703941f6bd96643d62462975ead1973bc9c56aa702cd63b6eb1c519bd0e->enter($__internal_4a9d7703941f6bd96643d62462975ead1973bc9c56aa702cd63b6eb1c519bd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1c2454ecbd6ea25b5fbebd61c28dffe2bc387b997ba7d7e954bccc09c227547f->leave($__internal_1c2454ecbd6ea25b5fbebd61c28dffe2bc387b997ba7d7e954bccc09c227547f_prof);

        
        $__internal_4a9d7703941f6bd96643d62462975ead1973bc9c56aa702cd63b6eb1c519bd0e->leave($__internal_4a9d7703941f6bd96643d62462975ead1973bc9c56aa702cd63b6eb1c519bd0e_prof);

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
