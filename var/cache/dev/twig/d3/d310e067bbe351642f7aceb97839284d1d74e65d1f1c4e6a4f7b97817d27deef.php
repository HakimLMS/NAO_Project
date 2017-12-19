<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f2d58f29dfa6ef85aaa2d861b7edee9deff288dff07879fa21a5741247c6c804 extends Twig_Template
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
        $__internal_69177abea00e8b3cdf2c58490411229f5e9f2142b7b55c581b816fdbc7c7581e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69177abea00e8b3cdf2c58490411229f5e9f2142b7b55c581b816fdbc7c7581e->enter($__internal_69177abea00e8b3cdf2c58490411229f5e9f2142b7b55c581b816fdbc7c7581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_8ffa67e34566fd7e469fb2fd7f5ad4a5f6494325273568ba96f8f7fca6a92b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffa67e34566fd7e469fb2fd7f5ad4a5f6494325273568ba96f8f7fca6a92b8c->enter($__internal_8ffa67e34566fd7e469fb2fd7f5ad4a5f6494325273568ba96f8f7fca6a92b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_69177abea00e8b3cdf2c58490411229f5e9f2142b7b55c581b816fdbc7c7581e->leave($__internal_69177abea00e8b3cdf2c58490411229f5e9f2142b7b55c581b816fdbc7c7581e_prof);

        
        $__internal_8ffa67e34566fd7e469fb2fd7f5ad4a5f6494325273568ba96f8f7fca6a92b8c->leave($__internal_8ffa67e34566fd7e469fb2fd7f5ad4a5f6494325273568ba96f8f7fca6a92b8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
