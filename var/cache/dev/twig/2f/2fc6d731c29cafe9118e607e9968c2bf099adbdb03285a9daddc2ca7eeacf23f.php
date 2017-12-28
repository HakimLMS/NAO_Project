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
        $__internal_fc5cf5b12a7d5e08c25156931809ddcff7da5df55a6ec7fcde0c50bc38cee84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5cf5b12a7d5e08c25156931809ddcff7da5df55a6ec7fcde0c50bc38cee84c->enter($__internal_fc5cf5b12a7d5e08c25156931809ddcff7da5df55a6ec7fcde0c50bc38cee84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_96a36f7b00cc60b35688991688b3b301503febd34760aee5fd6c61bc581a496c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a36f7b00cc60b35688991688b3b301503febd34760aee5fd6c61bc581a496c->enter($__internal_96a36f7b00cc60b35688991688b3b301503febd34760aee5fd6c61bc581a496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fc5cf5b12a7d5e08c25156931809ddcff7da5df55a6ec7fcde0c50bc38cee84c->leave($__internal_fc5cf5b12a7d5e08c25156931809ddcff7da5df55a6ec7fcde0c50bc38cee84c_prof);

        
        $__internal_96a36f7b00cc60b35688991688b3b301503febd34760aee5fd6c61bc581a496c->leave($__internal_96a36f7b00cc60b35688991688b3b301503febd34760aee5fd6c61bc581a496c_prof);

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
