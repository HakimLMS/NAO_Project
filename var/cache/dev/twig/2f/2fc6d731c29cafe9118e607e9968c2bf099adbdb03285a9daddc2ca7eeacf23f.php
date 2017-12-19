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
        $__internal_e8523a257f79833867619a8e3a529bb68edd644953d21db82ddaf0575e231dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8523a257f79833867619a8e3a529bb68edd644953d21db82ddaf0575e231dc0->enter($__internal_e8523a257f79833867619a8e3a529bb68edd644953d21db82ddaf0575e231dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2293322f4eb406fd86df2377ab17bbd4c3bfb6f56a38718cf38aed9f8b54f46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2293322f4eb406fd86df2377ab17bbd4c3bfb6f56a38718cf38aed9f8b54f46f->enter($__internal_2293322f4eb406fd86df2377ab17bbd4c3bfb6f56a38718cf38aed9f8b54f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e8523a257f79833867619a8e3a529bb68edd644953d21db82ddaf0575e231dc0->leave($__internal_e8523a257f79833867619a8e3a529bb68edd644953d21db82ddaf0575e231dc0_prof);

        
        $__internal_2293322f4eb406fd86df2377ab17bbd4c3bfb6f56a38718cf38aed9f8b54f46f->leave($__internal_2293322f4eb406fd86df2377ab17bbd4c3bfb6f56a38718cf38aed9f8b54f46f_prof);

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
