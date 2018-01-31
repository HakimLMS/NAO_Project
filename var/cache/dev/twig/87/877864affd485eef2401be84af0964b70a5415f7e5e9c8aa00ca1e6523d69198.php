<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4d234813f8a7f08eeee6b2e6f9516b605c9eeabf04cc74049326d5e11a4a37cb extends Twig_Template
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
        $__internal_708bd3ff77226afdc068017f0d673265e5ae8f03b75c6f7721c6884b82016d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708bd3ff77226afdc068017f0d673265e5ae8f03b75c6f7721c6884b82016d40->enter($__internal_708bd3ff77226afdc068017f0d673265e5ae8f03b75c6f7721c6884b82016d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c8a022035e7b37b66176e8b08d946f1c1b35a023dfbc0a10a542e8395046e0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a022035e7b37b66176e8b08d946f1c1b35a023dfbc0a10a542e8395046e0b2->enter($__internal_c8a022035e7b37b66176e8b08d946f1c1b35a023dfbc0a10a542e8395046e0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_708bd3ff77226afdc068017f0d673265e5ae8f03b75c6f7721c6884b82016d40->leave($__internal_708bd3ff77226afdc068017f0d673265e5ae8f03b75c6f7721c6884b82016d40_prof);

        
        $__internal_c8a022035e7b37b66176e8b08d946f1c1b35a023dfbc0a10a542e8395046e0b2->leave($__internal_c8a022035e7b37b66176e8b08d946f1c1b35a023dfbc0a10a542e8395046e0b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
