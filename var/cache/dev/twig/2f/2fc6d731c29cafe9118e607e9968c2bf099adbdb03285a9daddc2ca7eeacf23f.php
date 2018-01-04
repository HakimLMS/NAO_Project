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
        $__internal_08555052b2925dbced65fe0ebf25335c38e09a9a2fd824b6a02cd8d299cd1492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08555052b2925dbced65fe0ebf25335c38e09a9a2fd824b6a02cd8d299cd1492->enter($__internal_08555052b2925dbced65fe0ebf25335c38e09a9a2fd824b6a02cd8d299cd1492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_99c0a3d5bf077a244c1a502164758f6fed03082fa0e46a15c2883c7cae29f967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c0a3d5bf077a244c1a502164758f6fed03082fa0e46a15c2883c7cae29f967->enter($__internal_99c0a3d5bf077a244c1a502164758f6fed03082fa0e46a15c2883c7cae29f967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_08555052b2925dbced65fe0ebf25335c38e09a9a2fd824b6a02cd8d299cd1492->leave($__internal_08555052b2925dbced65fe0ebf25335c38e09a9a2fd824b6a02cd8d299cd1492_prof);

        
        $__internal_99c0a3d5bf077a244c1a502164758f6fed03082fa0e46a15c2883c7cae29f967->leave($__internal_99c0a3d5bf077a244c1a502164758f6fed03082fa0e46a15c2883c7cae29f967_prof);

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
