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
        $__internal_7c6c2466766c902a9e2396cbbbb7bd37d0bb62483c25b7c063012a31fc25a6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6c2466766c902a9e2396cbbbb7bd37d0bb62483c25b7c063012a31fc25a6f0->enter($__internal_7c6c2466766c902a9e2396cbbbb7bd37d0bb62483c25b7c063012a31fc25a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9e44f8cb0905ab295f833f44ddb9fcf7b9777663725f52b835b5aff8109ffdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e44f8cb0905ab295f833f44ddb9fcf7b9777663725f52b835b5aff8109ffdb7->enter($__internal_9e44f8cb0905ab295f833f44ddb9fcf7b9777663725f52b835b5aff8109ffdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7c6c2466766c902a9e2396cbbbb7bd37d0bb62483c25b7c063012a31fc25a6f0->leave($__internal_7c6c2466766c902a9e2396cbbbb7bd37d0bb62483c25b7c063012a31fc25a6f0_prof);

        
        $__internal_9e44f8cb0905ab295f833f44ddb9fcf7b9777663725f52b835b5aff8109ffdb7->leave($__internal_9e44f8cb0905ab295f833f44ddb9fcf7b9777663725f52b835b5aff8109ffdb7_prof);

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
