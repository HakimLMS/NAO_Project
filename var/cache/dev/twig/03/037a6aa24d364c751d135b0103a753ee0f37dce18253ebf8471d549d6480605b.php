<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d066144c1064ab64a0695132add2b004517ec286a4a237fe0127f6391484456c extends Twig_Template
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
        $__internal_e987b07f9db3d9a89504d94a576f1812077fd69b5b6f63f577cbe457bc07550f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e987b07f9db3d9a89504d94a576f1812077fd69b5b6f63f577cbe457bc07550f->enter($__internal_e987b07f9db3d9a89504d94a576f1812077fd69b5b6f63f577cbe457bc07550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f7dd16a94e8f84400faca56ff51ef502792dbeda54f2fd2747f17ad61df8f5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dd16a94e8f84400faca56ff51ef502792dbeda54f2fd2747f17ad61df8f5cd->enter($__internal_f7dd16a94e8f84400faca56ff51ef502792dbeda54f2fd2747f17ad61df8f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e987b07f9db3d9a89504d94a576f1812077fd69b5b6f63f577cbe457bc07550f->leave($__internal_e987b07f9db3d9a89504d94a576f1812077fd69b5b6f63f577cbe457bc07550f_prof);

        
        $__internal_f7dd16a94e8f84400faca56ff51ef502792dbeda54f2fd2747f17ad61df8f5cd->leave($__internal_f7dd16a94e8f84400faca56ff51ef502792dbeda54f2fd2747f17ad61df8f5cd_prof);

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
