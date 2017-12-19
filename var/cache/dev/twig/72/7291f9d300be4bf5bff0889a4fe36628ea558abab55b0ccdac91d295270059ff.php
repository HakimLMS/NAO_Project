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
        $__internal_963882c251648ccde45b14339fbf4d0ceaafe103566fee4a64415de4153862ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963882c251648ccde45b14339fbf4d0ceaafe103566fee4a64415de4153862ba->enter($__internal_963882c251648ccde45b14339fbf4d0ceaafe103566fee4a64415de4153862ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_126727133a53cdf418d07ae357d198c806f77f17fa40e5a5651cfdfef7710914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126727133a53cdf418d07ae357d198c806f77f17fa40e5a5651cfdfef7710914->enter($__internal_126727133a53cdf418d07ae357d198c806f77f17fa40e5a5651cfdfef7710914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_963882c251648ccde45b14339fbf4d0ceaafe103566fee4a64415de4153862ba->leave($__internal_963882c251648ccde45b14339fbf4d0ceaafe103566fee4a64415de4153862ba_prof);

        
        $__internal_126727133a53cdf418d07ae357d198c806f77f17fa40e5a5651cfdfef7710914->leave($__internal_126727133a53cdf418d07ae357d198c806f77f17fa40e5a5651cfdfef7710914_prof);

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
