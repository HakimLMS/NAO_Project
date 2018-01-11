<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9fd3c39394b87ea2b209f9460120e7a33707c7bb4e262d46ac0ac45d61c717af extends Twig_Template
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
        $__internal_e57b177ce9bb0c29b6ec2c077bc4099e947ad04c4f6d3ed332babdeb32e55545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57b177ce9bb0c29b6ec2c077bc4099e947ad04c4f6d3ed332babdeb32e55545->enter($__internal_e57b177ce9bb0c29b6ec2c077bc4099e947ad04c4f6d3ed332babdeb32e55545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0cf4e690a0e6804ae736459abd09f4c02531883e176f236f7d5205daf593998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf4e690a0e6804ae736459abd09f4c02531883e176f236f7d5205daf593998c->enter($__internal_0cf4e690a0e6804ae736459abd09f4c02531883e176f236f7d5205daf593998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e57b177ce9bb0c29b6ec2c077bc4099e947ad04c4f6d3ed332babdeb32e55545->leave($__internal_e57b177ce9bb0c29b6ec2c077bc4099e947ad04c4f6d3ed332babdeb32e55545_prof);

        
        $__internal_0cf4e690a0e6804ae736459abd09f4c02531883e176f236f7d5205daf593998c->leave($__internal_0cf4e690a0e6804ae736459abd09f4c02531883e176f236f7d5205daf593998c_prof);

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
