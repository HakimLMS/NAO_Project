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
        $__internal_f78529f4a1157fa21f1ae2acf4218f3978c66ab6646f9ab9ff2726542fb52535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78529f4a1157fa21f1ae2acf4218f3978c66ab6646f9ab9ff2726542fb52535->enter($__internal_f78529f4a1157fa21f1ae2acf4218f3978c66ab6646f9ab9ff2726542fb52535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a6cd3fd481d4626f46eba9144179ae398e7296264de7b4e38e00e2601ab343b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cd3fd481d4626f46eba9144179ae398e7296264de7b4e38e00e2601ab343b2->enter($__internal_a6cd3fd481d4626f46eba9144179ae398e7296264de7b4e38e00e2601ab343b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f78529f4a1157fa21f1ae2acf4218f3978c66ab6646f9ab9ff2726542fb52535->leave($__internal_f78529f4a1157fa21f1ae2acf4218f3978c66ab6646f9ab9ff2726542fb52535_prof);

        
        $__internal_a6cd3fd481d4626f46eba9144179ae398e7296264de7b4e38e00e2601ab343b2->leave($__internal_a6cd3fd481d4626f46eba9144179ae398e7296264de7b4e38e00e2601ab343b2_prof);

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
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
