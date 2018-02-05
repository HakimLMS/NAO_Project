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
        $__internal_c199368d1c50a10b0a928293c4dd9ca05926dfa08e5ce9383234f1fd12aa5d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c199368d1c50a10b0a928293c4dd9ca05926dfa08e5ce9383234f1fd12aa5d17->enter($__internal_c199368d1c50a10b0a928293c4dd9ca05926dfa08e5ce9383234f1fd12aa5d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b6d3c5a9c6577ff1c5f5dd9a53ea38aa9ab11d7073bb08835df8bdd75448eab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d3c5a9c6577ff1c5f5dd9a53ea38aa9ab11d7073bb08835df8bdd75448eab7->enter($__internal_b6d3c5a9c6577ff1c5f5dd9a53ea38aa9ab11d7073bb08835df8bdd75448eab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c199368d1c50a10b0a928293c4dd9ca05926dfa08e5ce9383234f1fd12aa5d17->leave($__internal_c199368d1c50a10b0a928293c4dd9ca05926dfa08e5ce9383234f1fd12aa5d17_prof);

        
        $__internal_b6d3c5a9c6577ff1c5f5dd9a53ea38aa9ab11d7073bb08835df8bdd75448eab7->leave($__internal_b6d3c5a9c6577ff1c5f5dd9a53ea38aa9ab11d7073bb08835df8bdd75448eab7_prof);

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
", "@Framework/Form/integer_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
