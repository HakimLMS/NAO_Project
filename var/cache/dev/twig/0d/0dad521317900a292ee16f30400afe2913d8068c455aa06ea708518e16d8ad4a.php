<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2a0e3a6721c0be1e89d4d0185288be334bece078a60187ca2bfe6654ce0e08c2 extends Twig_Template
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
        $__internal_39ab6de542b1279e41abfb2f57196e98527f8d24b0577a07c6f6349d65d2ce03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ab6de542b1279e41abfb2f57196e98527f8d24b0577a07c6f6349d65d2ce03->enter($__internal_39ab6de542b1279e41abfb2f57196e98527f8d24b0577a07c6f6349d65d2ce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_acf7882b70c9f8bba0da145fb253d51ee11982a6a569096cbaf1a9cb3a407e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf7882b70c9f8bba0da145fb253d51ee11982a6a569096cbaf1a9cb3a407e6a->enter($__internal_acf7882b70c9f8bba0da145fb253d51ee11982a6a569096cbaf1a9cb3a407e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_39ab6de542b1279e41abfb2f57196e98527f8d24b0577a07c6f6349d65d2ce03->leave($__internal_39ab6de542b1279e41abfb2f57196e98527f8d24b0577a07c6f6349d65d2ce03_prof);

        
        $__internal_acf7882b70c9f8bba0da145fb253d51ee11982a6a569096cbaf1a9cb3a407e6a->leave($__internal_acf7882b70c9f8bba0da145fb253d51ee11982a6a569096cbaf1a9cb3a407e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
