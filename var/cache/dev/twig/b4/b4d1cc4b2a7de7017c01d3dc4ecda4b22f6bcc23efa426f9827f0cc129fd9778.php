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
        $__internal_3718318b6b5f6d31d6a12d57f16551d0d9aa66c81a6e6af07ac658f5e02e7c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3718318b6b5f6d31d6a12d57f16551d0d9aa66c81a6e6af07ac658f5e02e7c5a->enter($__internal_3718318b6b5f6d31d6a12d57f16551d0d9aa66c81a6e6af07ac658f5e02e7c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_87bfe5c288d87a209be5f4721117c3e84e9408dee31bbca967bf43987bda3881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bfe5c288d87a209be5f4721117c3e84e9408dee31bbca967bf43987bda3881->enter($__internal_87bfe5c288d87a209be5f4721117c3e84e9408dee31bbca967bf43987bda3881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3718318b6b5f6d31d6a12d57f16551d0d9aa66c81a6e6af07ac658f5e02e7c5a->leave($__internal_3718318b6b5f6d31d6a12d57f16551d0d9aa66c81a6e6af07ac658f5e02e7c5a_prof);

        
        $__internal_87bfe5c288d87a209be5f4721117c3e84e9408dee31bbca967bf43987bda3881->leave($__internal_87bfe5c288d87a209be5f4721117c3e84e9408dee31bbca967bf43987bda3881_prof);

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
