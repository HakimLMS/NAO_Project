<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_07893b9e4bc18711a6736bb17eb6a5e28f2fdc0d1c2d33afc723b396a4f78aaf extends Twig_Template
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
        $__internal_13395bbb2cc198b45465031a6bf00b3f93f74bdec2d1712886559a38108f8c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13395bbb2cc198b45465031a6bf00b3f93f74bdec2d1712886559a38108f8c10->enter($__internal_13395bbb2cc198b45465031a6bf00b3f93f74bdec2d1712886559a38108f8c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7fb6ad41b5289d26e0164217bba2cbe1356657718c9ba84e46c07822f37445e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb6ad41b5289d26e0164217bba2cbe1356657718c9ba84e46c07822f37445e8->enter($__internal_7fb6ad41b5289d26e0164217bba2cbe1356657718c9ba84e46c07822f37445e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_13395bbb2cc198b45465031a6bf00b3f93f74bdec2d1712886559a38108f8c10->leave($__internal_13395bbb2cc198b45465031a6bf00b3f93f74bdec2d1712886559a38108f8c10_prof);

        
        $__internal_7fb6ad41b5289d26e0164217bba2cbe1356657718c9ba84e46c07822f37445e8->leave($__internal_7fb6ad41b5289d26e0164217bba2cbe1356657718c9ba84e46c07822f37445e8_prof);

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
