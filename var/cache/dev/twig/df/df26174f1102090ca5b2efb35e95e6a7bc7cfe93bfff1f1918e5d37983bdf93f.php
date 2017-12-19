<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_ad1c9d0f8a3e2716fda5ccaa3776355cae56a7ac1f68994d859b047dfa59ab21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1c9d0f8a3e2716fda5ccaa3776355cae56a7ac1f68994d859b047dfa59ab21->enter($__internal_ad1c9d0f8a3e2716fda5ccaa3776355cae56a7ac1f68994d859b047dfa59ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5811c74fee69f68b8ba6f1c3d082bc31762ec4b81a80e6dc8f77219d98595519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5811c74fee69f68b8ba6f1c3d082bc31762ec4b81a80e6dc8f77219d98595519->enter($__internal_5811c74fee69f68b8ba6f1c3d082bc31762ec4b81a80e6dc8f77219d98595519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ad1c9d0f8a3e2716fda5ccaa3776355cae56a7ac1f68994d859b047dfa59ab21->leave($__internal_ad1c9d0f8a3e2716fda5ccaa3776355cae56a7ac1f68994d859b047dfa59ab21_prof);

        
        $__internal_5811c74fee69f68b8ba6f1c3d082bc31762ec4b81a80e6dc8f77219d98595519->leave($__internal_5811c74fee69f68b8ba6f1c3d082bc31762ec4b81a80e6dc8f77219d98595519_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
