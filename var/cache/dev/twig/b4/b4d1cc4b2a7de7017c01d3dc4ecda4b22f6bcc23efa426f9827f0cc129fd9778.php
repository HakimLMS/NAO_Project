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
        $__internal_39c61c85117114dae453151b61222496894bba09c9c3465e4eb9a5fe7bdd19c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c61c85117114dae453151b61222496894bba09c9c3465e4eb9a5fe7bdd19c4->enter($__internal_39c61c85117114dae453151b61222496894bba09c9c3465e4eb9a5fe7bdd19c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b5434d47889297a43a619038bcf2802860b2f69743443d98a12b2b86f90bc427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5434d47889297a43a619038bcf2802860b2f69743443d98a12b2b86f90bc427->enter($__internal_b5434d47889297a43a619038bcf2802860b2f69743443d98a12b2b86f90bc427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_39c61c85117114dae453151b61222496894bba09c9c3465e4eb9a5fe7bdd19c4->leave($__internal_39c61c85117114dae453151b61222496894bba09c9c3465e4eb9a5fe7bdd19c4_prof);

        
        $__internal_b5434d47889297a43a619038bcf2802860b2f69743443d98a12b2b86f90bc427->leave($__internal_b5434d47889297a43a619038bcf2802860b2f69743443d98a12b2b86f90bc427_prof);

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
