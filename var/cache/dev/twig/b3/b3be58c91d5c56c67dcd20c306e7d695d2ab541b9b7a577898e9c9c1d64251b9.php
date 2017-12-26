<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3bc09884a31fe565789c1d15cdc2d91a86bfe1b1acb7d7fcdb0f52722cb85fd5 extends Twig_Template
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
        $__internal_42c0e07c6bd625df2af01674f3e3cef23be5871c7de641e7cdc9ab9c525cf510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c0e07c6bd625df2af01674f3e3cef23be5871c7de641e7cdc9ab9c525cf510->enter($__internal_42c0e07c6bd625df2af01674f3e3cef23be5871c7de641e7cdc9ab9c525cf510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_68272ba1915a6579881da6196bd868debf1ba4c8db4346b86461902a89977ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68272ba1915a6579881da6196bd868debf1ba4c8db4346b86461902a89977ba2->enter($__internal_68272ba1915a6579881da6196bd868debf1ba4c8db4346b86461902a89977ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_42c0e07c6bd625df2af01674f3e3cef23be5871c7de641e7cdc9ab9c525cf510->leave($__internal_42c0e07c6bd625df2af01674f3e3cef23be5871c7de641e7cdc9ab9c525cf510_prof);

        
        $__internal_68272ba1915a6579881da6196bd868debf1ba4c8db4346b86461902a89977ba2->leave($__internal_68272ba1915a6579881da6196bd868debf1ba4c8db4346b86461902a89977ba2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
