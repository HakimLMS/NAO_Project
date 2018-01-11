<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6af44899a3189585123642642421d3a4caff8b7cd4a489f6a40cfc67a1bf39a1 extends Twig_Template
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
        $__internal_4dc0f6882dfe085affd7b52370c46369237de4d69a9c5065ea6b886e43a3abd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc0f6882dfe085affd7b52370c46369237de4d69a9c5065ea6b886e43a3abd8->enter($__internal_4dc0f6882dfe085affd7b52370c46369237de4d69a9c5065ea6b886e43a3abd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_32eb17700c85c587a270e9dcb379eeca0d561f89a0cbd9a936bb6a67e55fc750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32eb17700c85c587a270e9dcb379eeca0d561f89a0cbd9a936bb6a67e55fc750->enter($__internal_32eb17700c85c587a270e9dcb379eeca0d561f89a0cbd9a936bb6a67e55fc750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4dc0f6882dfe085affd7b52370c46369237de4d69a9c5065ea6b886e43a3abd8->leave($__internal_4dc0f6882dfe085affd7b52370c46369237de4d69a9c5065ea6b886e43a3abd8_prof);

        
        $__internal_32eb17700c85c587a270e9dcb379eeca0d561f89a0cbd9a936bb6a67e55fc750->leave($__internal_32eb17700c85c587a270e9dcb379eeca0d561f89a0cbd9a936bb6a67e55fc750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
