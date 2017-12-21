<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_87dd8a5fa973cccffc6c518901a6877f3058045d699583ca5466004d6d6376a8 extends Twig_Template
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
        $__internal_6d1fa5cc1cb9ef3863e5370d1f1da7cbba8cbab4149ab59e9fa54ebfcfd1ca8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1fa5cc1cb9ef3863e5370d1f1da7cbba8cbab4149ab59e9fa54ebfcfd1ca8a->enter($__internal_6d1fa5cc1cb9ef3863e5370d1f1da7cbba8cbab4149ab59e9fa54ebfcfd1ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6e0f0d780817ff3a53c5eceb3274848d9631575443aeb765e220fb5f0824f4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0f0d780817ff3a53c5eceb3274848d9631575443aeb765e220fb5f0824f4b2->enter($__internal_6e0f0d780817ff3a53c5eceb3274848d9631575443aeb765e220fb5f0824f4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6d1fa5cc1cb9ef3863e5370d1f1da7cbba8cbab4149ab59e9fa54ebfcfd1ca8a->leave($__internal_6d1fa5cc1cb9ef3863e5370d1f1da7cbba8cbab4149ab59e9fa54ebfcfd1ca8a_prof);

        
        $__internal_6e0f0d780817ff3a53c5eceb3274848d9631575443aeb765e220fb5f0824f4b2->leave($__internal_6e0f0d780817ff3a53c5eceb3274848d9631575443aeb765e220fb5f0824f4b2_prof);

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
