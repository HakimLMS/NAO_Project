<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_a8cd8b6330f9d594e9d8d31b1f9c70c873d660577c42e5c9d635f24a3b0ad976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cd8b6330f9d594e9d8d31b1f9c70c873d660577c42e5c9d635f24a3b0ad976->enter($__internal_a8cd8b6330f9d594e9d8d31b1f9c70c873d660577c42e5c9d635f24a3b0ad976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2b670d01af7480c6da8ed0176eaf5853c3392fd0c094602cf11ce6f2e72840c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b670d01af7480c6da8ed0176eaf5853c3392fd0c094602cf11ce6f2e72840c6->enter($__internal_2b670d01af7480c6da8ed0176eaf5853c3392fd0c094602cf11ce6f2e72840c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a8cd8b6330f9d594e9d8d31b1f9c70c873d660577c42e5c9d635f24a3b0ad976->leave($__internal_a8cd8b6330f9d594e9d8d31b1f9c70c873d660577c42e5c9d635f24a3b0ad976_prof);

        
        $__internal_2b670d01af7480c6da8ed0176eaf5853c3392fd0c094602cf11ce6f2e72840c6->leave($__internal_2b670d01af7480c6da8ed0176eaf5853c3392fd0c094602cf11ce6f2e72840c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
