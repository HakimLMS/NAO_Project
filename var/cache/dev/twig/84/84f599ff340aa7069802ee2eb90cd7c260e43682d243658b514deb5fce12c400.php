<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4405ed7a96c20fae48611ac333110ee1a08da1d31b1b224acf6fbf8fab85210a extends Twig_Template
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
        $__internal_346280560b4e414ea992d202f7bb942405d058f57545aa68b13ce80b2d186056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346280560b4e414ea992d202f7bb942405d058f57545aa68b13ce80b2d186056->enter($__internal_346280560b4e414ea992d202f7bb942405d058f57545aa68b13ce80b2d186056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2e23ced3188626ac91423b2650462b29d7722062498f4b8d3b27f6028e4aa799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e23ced3188626ac91423b2650462b29d7722062498f4b8d3b27f6028e4aa799->enter($__internal_2e23ced3188626ac91423b2650462b29d7722062498f4b8d3b27f6028e4aa799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_346280560b4e414ea992d202f7bb942405d058f57545aa68b13ce80b2d186056->leave($__internal_346280560b4e414ea992d202f7bb942405d058f57545aa68b13ce80b2d186056_prof);

        
        $__internal_2e23ced3188626ac91423b2650462b29d7722062498f4b8d3b27f6028e4aa799->leave($__internal_2e23ced3188626ac91423b2650462b29d7722062498f4b8d3b27f6028e4aa799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
