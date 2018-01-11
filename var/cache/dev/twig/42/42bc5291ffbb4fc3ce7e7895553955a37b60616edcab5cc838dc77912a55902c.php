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
        $__internal_02c52f20ac4ba21efc5936fe30303fda9fc386b5ffd1656a76f6907ec7700430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c52f20ac4ba21efc5936fe30303fda9fc386b5ffd1656a76f6907ec7700430->enter($__internal_02c52f20ac4ba21efc5936fe30303fda9fc386b5ffd1656a76f6907ec7700430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_dab930c5d8ee2b06e29416f80dc5b6d1495fcadc12865ab8472dcc181d202708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab930c5d8ee2b06e29416f80dc5b6d1495fcadc12865ab8472dcc181d202708->enter($__internal_dab930c5d8ee2b06e29416f80dc5b6d1495fcadc12865ab8472dcc181d202708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_02c52f20ac4ba21efc5936fe30303fda9fc386b5ffd1656a76f6907ec7700430->leave($__internal_02c52f20ac4ba21efc5936fe30303fda9fc386b5ffd1656a76f6907ec7700430_prof);

        
        $__internal_dab930c5d8ee2b06e29416f80dc5b6d1495fcadc12865ab8472dcc181d202708->leave($__internal_dab930c5d8ee2b06e29416f80dc5b6d1495fcadc12865ab8472dcc181d202708_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
