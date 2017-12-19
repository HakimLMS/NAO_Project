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
        $__internal_962abc010a7e7c981f179655656824abff262dd870f00efc86ad37ba7b65a287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962abc010a7e7c981f179655656824abff262dd870f00efc86ad37ba7b65a287->enter($__internal_962abc010a7e7c981f179655656824abff262dd870f00efc86ad37ba7b65a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_45a0608b53c0b33f8500077d62d4995abe4d2cf1db4d90c1aa79ac3237c6c4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a0608b53c0b33f8500077d62d4995abe4d2cf1db4d90c1aa79ac3237c6c4e4->enter($__internal_45a0608b53c0b33f8500077d62d4995abe4d2cf1db4d90c1aa79ac3237c6c4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_962abc010a7e7c981f179655656824abff262dd870f00efc86ad37ba7b65a287->leave($__internal_962abc010a7e7c981f179655656824abff262dd870f00efc86ad37ba7b65a287_prof);

        
        $__internal_45a0608b53c0b33f8500077d62d4995abe4d2cf1db4d90c1aa79ac3237c6c4e4->leave($__internal_45a0608b53c0b33f8500077d62d4995abe4d2cf1db4d90c1aa79ac3237c6c4e4_prof);

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
