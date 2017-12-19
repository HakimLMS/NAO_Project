<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fe9da6a346bfd605db31a21f20134cb92f2e57df31e5905ddb2bde0649c8bf1c extends Twig_Template
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
        $__internal_5b721175ad8835da8d9693d53c97f438e673f5b6041dd9473d94c129611d0c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b721175ad8835da8d9693d53c97f438e673f5b6041dd9473d94c129611d0c52->enter($__internal_5b721175ad8835da8d9693d53c97f438e673f5b6041dd9473d94c129611d0c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_78bda0892077f0f71d59b6e1fefa61a4360405dadb3ecb40577fb08f1ec53d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bda0892077f0f71d59b6e1fefa61a4360405dadb3ecb40577fb08f1ec53d29->enter($__internal_78bda0892077f0f71d59b6e1fefa61a4360405dadb3ecb40577fb08f1ec53d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5b721175ad8835da8d9693d53c97f438e673f5b6041dd9473d94c129611d0c52->leave($__internal_5b721175ad8835da8d9693d53c97f438e673f5b6041dd9473d94c129611d0c52_prof);

        
        $__internal_78bda0892077f0f71d59b6e1fefa61a4360405dadb3ecb40577fb08f1ec53d29->leave($__internal_78bda0892077f0f71d59b6e1fefa61a4360405dadb3ecb40577fb08f1ec53d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
