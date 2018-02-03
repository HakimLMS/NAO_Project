<?php

/* blog/modify.html.twig */
class __TwigTemplate_103d54cea413bf376ccbc8742700eeb35ced9969fc269686fff412e500ba2872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/modify.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e39c45090f24e875d23a02f299a2559e57b6e38e03190d1322842dfa4ead01dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39c45090f24e875d23a02f299a2559e57b6e38e03190d1322842dfa4ead01dc->enter($__internal_e39c45090f24e875d23a02f299a2559e57b6e38e03190d1322842dfa4ead01dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $__internal_8eafa0f0a0cf9d20b89c4db4a8f59dc96a4f7b937d823ba7856ad926c8308af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eafa0f0a0cf9d20b89c4db4a8f59dc96a4f7b937d823ba7856ad926c8308af2->enter($__internal_8eafa0f0a0cf9d20b89c4db4a8f59dc96a4f7b937d823ba7856ad926c8308af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e39c45090f24e875d23a02f299a2559e57b6e38e03190d1322842dfa4ead01dc->leave($__internal_e39c45090f24e875d23a02f299a2559e57b6e38e03190d1322842dfa4ead01dc_prof);

        
        $__internal_8eafa0f0a0cf9d20b89c4db4a8f59dc96a4f7b937d823ba7856ad926c8308af2->leave($__internal_8eafa0f0a0cf9d20b89c4db4a8f59dc96a4f7b937d823ba7856ad926c8308af2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3366f76b976cc335577972dadf2fc79dfd998b1809bd06a0c9bb57ee79d1fa04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3366f76b976cc335577972dadf2fc79dfd998b1809bd06a0c9bb57ee79d1fa04->enter($__internal_3366f76b976cc335577972dadf2fc79dfd998b1809bd06a0c9bb57ee79d1fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e439dcd7f6650a4606ff48a37d664cffa96bdd2009159d164332355828de0db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e439dcd7f6650a4606ff48a37d664cffa96bdd2009159d164332355828de0db0->enter($__internal_e439dcd7f6650a4606ff48a37d664cffa96bdd2009159d164332355828de0db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_e439dcd7f6650a4606ff48a37d664cffa96bdd2009159d164332355828de0db0->leave($__internal_e439dcd7f6650a4606ff48a37d664cffa96bdd2009159d164332355828de0db0_prof);

        
        $__internal_3366f76b976cc335577972dadf2fc79dfd998b1809bd06a0c9bb57ee79d1fa04->leave($__internal_3366f76b976cc335577972dadf2fc79dfd998b1809bd06a0c9bb57ee79d1fa04_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_a65849526fe5a0159f533448bee5f7214780c094a3349fe2900d530b7aa028f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65849526fe5a0159f533448bee5f7214780c094a3349fe2900d530b7aa028f5->enter($__internal_a65849526fe5a0159f533448bee5f7214780c094a3349fe2900d530b7aa028f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_57cf9a88c5ab5598be06ac10e3f2ec481fbf2e11eae89d19a0fd5a3c7298d453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cf9a88c5ab5598be06ac10e3f2ec481fbf2e11eae89d19a0fd5a3c7298d453->enter($__internal_57cf9a88c5ab5598be06ac10e3f2ec481fbf2e11eae89d19a0fd5a3c7298d453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_57cf9a88c5ab5598be06ac10e3f2ec481fbf2e11eae89d19a0fd5a3c7298d453->leave($__internal_57cf9a88c5ab5598be06ac10e3f2ec481fbf2e11eae89d19a0fd5a3c7298d453_prof);

        
        $__internal_a65849526fe5a0159f533448bee5f7214780c094a3349fe2900d530b7aa028f5->leave($__internal_a65849526fe5a0159f533448bee5f7214780c094a3349fe2900d530b7aa028f5_prof);

    }

    public function getTemplateName()
    {
        return "blog/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 6,  69 => 5,  57 => 12,  53 => 11,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% block script %}
    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    {% endblock %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "blog/modify.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\modify.html.twig");
    }
}
