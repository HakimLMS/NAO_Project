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
        $__internal_40852f5824845d5ba0f5cd5018d5c9213378ec2a3366c317fc9d561b49e425c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40852f5824845d5ba0f5cd5018d5c9213378ec2a3366c317fc9d561b49e425c3->enter($__internal_40852f5824845d5ba0f5cd5018d5c9213378ec2a3366c317fc9d561b49e425c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fa6ea9008104b8292f41b26ab41923f41454cc97128203effa192d0a2a6de8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6ea9008104b8292f41b26ab41923f41454cc97128203effa192d0a2a6de8fc->enter($__internal_fa6ea9008104b8292f41b26ab41923f41454cc97128203effa192d0a2a6de8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_40852f5824845d5ba0f5cd5018d5c9213378ec2a3366c317fc9d561b49e425c3->leave($__internal_40852f5824845d5ba0f5cd5018d5c9213378ec2a3366c317fc9d561b49e425c3_prof);

        
        $__internal_fa6ea9008104b8292f41b26ab41923f41454cc97128203effa192d0a2a6de8fc->leave($__internal_fa6ea9008104b8292f41b26ab41923f41454cc97128203effa192d0a2a6de8fc_prof);

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
