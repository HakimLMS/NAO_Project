<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5e4ed48d35bdc7bb92ab8ee323316b698ec1785b2e0c3c919ff248520f068740 extends Twig_Template
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
        $__internal_4b2d18578617b875563f39a71b13f1c154256d5f52f9432760cf752bfa24613e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2d18578617b875563f39a71b13f1c154256d5f52f9432760cf752bfa24613e->enter($__internal_4b2d18578617b875563f39a71b13f1c154256d5f52f9432760cf752bfa24613e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4d88605917d3b926e5226be2aabe43aa09cd54ecf13c9e7e2b15a7f4465b07e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d88605917d3b926e5226be2aabe43aa09cd54ecf13c9e7e2b15a7f4465b07e9->enter($__internal_4d88605917d3b926e5226be2aabe43aa09cd54ecf13c9e7e2b15a7f4465b07e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4b2d18578617b875563f39a71b13f1c154256d5f52f9432760cf752bfa24613e->leave($__internal_4b2d18578617b875563f39a71b13f1c154256d5f52f9432760cf752bfa24613e_prof);

        
        $__internal_4d88605917d3b926e5226be2aabe43aa09cd54ecf13c9e7e2b15a7f4465b07e9->leave($__internal_4d88605917d3b926e5226be2aabe43aa09cd54ecf13c9e7e2b15a7f4465b07e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
