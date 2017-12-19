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
        $__internal_3a341f5ee147321b48b76f97b10c2547adc47f2b2ce3116feb19e5bc99eae2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a341f5ee147321b48b76f97b10c2547adc47f2b2ce3116feb19e5bc99eae2cf->enter($__internal_3a341f5ee147321b48b76f97b10c2547adc47f2b2ce3116feb19e5bc99eae2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_809672ed53d48b8f9c7d654df5b387dc5b414656d9341d049e28517d63df81b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809672ed53d48b8f9c7d654df5b387dc5b414656d9341d049e28517d63df81b6->enter($__internal_809672ed53d48b8f9c7d654df5b387dc5b414656d9341d049e28517d63df81b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3a341f5ee147321b48b76f97b10c2547adc47f2b2ce3116feb19e5bc99eae2cf->leave($__internal_3a341f5ee147321b48b76f97b10c2547adc47f2b2ce3116feb19e5bc99eae2cf_prof);

        
        $__internal_809672ed53d48b8f9c7d654df5b387dc5b414656d9341d049e28517d63df81b6->leave($__internal_809672ed53d48b8f9c7d654df5b387dc5b414656d9341d049e28517d63df81b6_prof);

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
