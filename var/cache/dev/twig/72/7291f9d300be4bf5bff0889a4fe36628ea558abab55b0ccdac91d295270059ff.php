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
        $__internal_b135df3e7be374ff8e95727a86ec743bfa208ff4d08b51b10400bba963718fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b135df3e7be374ff8e95727a86ec743bfa208ff4d08b51b10400bba963718fb1->enter($__internal_b135df3e7be374ff8e95727a86ec743bfa208ff4d08b51b10400bba963718fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_832a186faf4441ae8060aa9dcc9a63622c39438d5ffb794b8c0c6b6cf11f2625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832a186faf4441ae8060aa9dcc9a63622c39438d5ffb794b8c0c6b6cf11f2625->enter($__internal_832a186faf4441ae8060aa9dcc9a63622c39438d5ffb794b8c0c6b6cf11f2625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_b135df3e7be374ff8e95727a86ec743bfa208ff4d08b51b10400bba963718fb1->leave($__internal_b135df3e7be374ff8e95727a86ec743bfa208ff4d08b51b10400bba963718fb1_prof);

        
        $__internal_832a186faf4441ae8060aa9dcc9a63622c39438d5ffb794b8c0c6b6cf11f2625->leave($__internal_832a186faf4441ae8060aa9dcc9a63622c39438d5ffb794b8c0c6b6cf11f2625_prof);

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
