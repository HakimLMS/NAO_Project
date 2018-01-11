<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a53a6a8110e8b5054f36424a464e5fb60c90a321b8b794fd23d407a405b82c1c extends Twig_Template
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
        $__internal_4b17799a3f454ba9470823fabaf3b33a8a38f67bd4e8284ae883eac49cb15fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b17799a3f454ba9470823fabaf3b33a8a38f67bd4e8284ae883eac49cb15fb1->enter($__internal_4b17799a3f454ba9470823fabaf3b33a8a38f67bd4e8284ae883eac49cb15fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1325699808c54ef3ebac71b1c70ebec821152d8d049502e442b93a0ff5810272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1325699808c54ef3ebac71b1c70ebec821152d8d049502e442b93a0ff5810272->enter($__internal_1325699808c54ef3ebac71b1c70ebec821152d8d049502e442b93a0ff5810272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4b17799a3f454ba9470823fabaf3b33a8a38f67bd4e8284ae883eac49cb15fb1->leave($__internal_4b17799a3f454ba9470823fabaf3b33a8a38f67bd4e8284ae883eac49cb15fb1_prof);

        
        $__internal_1325699808c54ef3ebac71b1c70ebec821152d8d049502e442b93a0ff5810272->leave($__internal_1325699808c54ef3ebac71b1c70ebec821152d8d049502e442b93a0ff5810272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
