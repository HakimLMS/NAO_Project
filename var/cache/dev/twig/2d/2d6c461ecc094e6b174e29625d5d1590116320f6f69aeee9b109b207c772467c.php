<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_75fa465d4890385095c7a13e9218557ab084e619c3bd9681658371e4b229de04 extends Twig_Template
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
        $__internal_9397f20d30f1586c521e8bc0a2f947aa162c7f89da53abb5c83a18c16e873a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9397f20d30f1586c521e8bc0a2f947aa162c7f89da53abb5c83a18c16e873a4a->enter($__internal_9397f20d30f1586c521e8bc0a2f947aa162c7f89da53abb5c83a18c16e873a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_602febc2ff1d8897f507d967d7ba186e7872fad36a1a9c1ba7d21256ba456abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602febc2ff1d8897f507d967d7ba186e7872fad36a1a9c1ba7d21256ba456abc->enter($__internal_602febc2ff1d8897f507d967d7ba186e7872fad36a1a9c1ba7d21256ba456abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9397f20d30f1586c521e8bc0a2f947aa162c7f89da53abb5c83a18c16e873a4a->leave($__internal_9397f20d30f1586c521e8bc0a2f947aa162c7f89da53abb5c83a18c16e873a4a_prof);

        
        $__internal_602febc2ff1d8897f507d967d7ba186e7872fad36a1a9c1ba7d21256ba456abc->leave($__internal_602febc2ff1d8897f507d967d7ba186e7872fad36a1a9c1ba7d21256ba456abc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
