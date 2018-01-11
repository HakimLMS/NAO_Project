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
        $__internal_53d47f279175762022cb0eb9b09a2c80460e0cc64de92b23a1b94405790df038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d47f279175762022cb0eb9b09a2c80460e0cc64de92b23a1b94405790df038->enter($__internal_53d47f279175762022cb0eb9b09a2c80460e0cc64de92b23a1b94405790df038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_144483240890e7045ee0177b396ba3cdaf7b2415576adc2ad8da8f74fe56b60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144483240890e7045ee0177b396ba3cdaf7b2415576adc2ad8da8f74fe56b60b->enter($__internal_144483240890e7045ee0177b396ba3cdaf7b2415576adc2ad8da8f74fe56b60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_53d47f279175762022cb0eb9b09a2c80460e0cc64de92b23a1b94405790df038->leave($__internal_53d47f279175762022cb0eb9b09a2c80460e0cc64de92b23a1b94405790df038_prof);

        
        $__internal_144483240890e7045ee0177b396ba3cdaf7b2415576adc2ad8da8f74fe56b60b->leave($__internal_144483240890e7045ee0177b396ba3cdaf7b2415576adc2ad8da8f74fe56b60b_prof);

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
