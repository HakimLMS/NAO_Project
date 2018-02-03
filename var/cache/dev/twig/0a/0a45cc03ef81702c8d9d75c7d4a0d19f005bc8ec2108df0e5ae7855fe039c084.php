<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c551e3336fcd8dcb9dc56daa5a568e8e82af37aca6fdb500b626416b87c4f659 extends Twig_Template
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
        $__internal_85670f127e75b5fc898021d07ed1f9618e6505d9793e77cb0ab7ec0327164f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85670f127e75b5fc898021d07ed1f9618e6505d9793e77cb0ab7ec0327164f74->enter($__internal_85670f127e75b5fc898021d07ed1f9618e6505d9793e77cb0ab7ec0327164f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b698b3cec0e8c98d5fee7b5c9754dca5c4cc4ca7a2a15bf9b8e227b4e18ed2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b698b3cec0e8c98d5fee7b5c9754dca5c4cc4ca7a2a15bf9b8e227b4e18ed2d0->enter($__internal_b698b3cec0e8c98d5fee7b5c9754dca5c4cc4ca7a2a15bf9b8e227b4e18ed2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_85670f127e75b5fc898021d07ed1f9618e6505d9793e77cb0ab7ec0327164f74->leave($__internal_85670f127e75b5fc898021d07ed1f9618e6505d9793e77cb0ab7ec0327164f74_prof);

        
        $__internal_b698b3cec0e8c98d5fee7b5c9754dca5c4cc4ca7a2a15bf9b8e227b4e18ed2d0->leave($__internal_b698b3cec0e8c98d5fee7b5c9754dca5c4cc4ca7a2a15bf9b8e227b4e18ed2d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
