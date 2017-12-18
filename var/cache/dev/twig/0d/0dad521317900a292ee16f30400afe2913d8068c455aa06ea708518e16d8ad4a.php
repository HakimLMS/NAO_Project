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
        $__internal_c9ac00f0da9d430d03ba9f923893a745f6411e96a2337527a84d8da868834c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ac00f0da9d430d03ba9f923893a745f6411e96a2337527a84d8da868834c46->enter($__internal_c9ac00f0da9d430d03ba9f923893a745f6411e96a2337527a84d8da868834c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3ea2c8d11266f9dcf5615d8ed0be9c9687eaaf88c54f092f8ab7810ed9ecc7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea2c8d11266f9dcf5615d8ed0be9c9687eaaf88c54f092f8ab7810ed9ecc7a0->enter($__internal_3ea2c8d11266f9dcf5615d8ed0be9c9687eaaf88c54f092f8ab7810ed9ecc7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c9ac00f0da9d430d03ba9f923893a745f6411e96a2337527a84d8da868834c46->leave($__internal_c9ac00f0da9d430d03ba9f923893a745f6411e96a2337527a84d8da868834c46_prof);

        
        $__internal_3ea2c8d11266f9dcf5615d8ed0be9c9687eaaf88c54f092f8ab7810ed9ecc7a0->leave($__internal_3ea2c8d11266f9dcf5615d8ed0be9c9687eaaf88c54f092f8ab7810ed9ecc7a0_prof);

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
", "@Framework/Form/money_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
