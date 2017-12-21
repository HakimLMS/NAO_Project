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
        $__internal_360f1f6973b3ca84e0ad8d0bbec27901dba0bc4a96999a73249c5b711b7ee260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360f1f6973b3ca84e0ad8d0bbec27901dba0bc4a96999a73249c5b711b7ee260->enter($__internal_360f1f6973b3ca84e0ad8d0bbec27901dba0bc4a96999a73249c5b711b7ee260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5140f1e793ea45620c8d124281943d31063363f7c3efa1a6f60a75b7d9741e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140f1e793ea45620c8d124281943d31063363f7c3efa1a6f60a75b7d9741e0f->enter($__internal_5140f1e793ea45620c8d124281943d31063363f7c3efa1a6f60a75b7d9741e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_360f1f6973b3ca84e0ad8d0bbec27901dba0bc4a96999a73249c5b711b7ee260->leave($__internal_360f1f6973b3ca84e0ad8d0bbec27901dba0bc4a96999a73249c5b711b7ee260_prof);

        
        $__internal_5140f1e793ea45620c8d124281943d31063363f7c3efa1a6f60a75b7d9741e0f->leave($__internal_5140f1e793ea45620c8d124281943d31063363f7c3efa1a6f60a75b7d9741e0f_prof);

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
