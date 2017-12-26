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
        $__internal_423fd991b0b267038d1bbf0d43a5b1b84abe37b6dad9ac21f4d1457beb6d21a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423fd991b0b267038d1bbf0d43a5b1b84abe37b6dad9ac21f4d1457beb6d21a4->enter($__internal_423fd991b0b267038d1bbf0d43a5b1b84abe37b6dad9ac21f4d1457beb6d21a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f5aea9e6f44fa5122f1f23f4479bf03ab13bd39484960de2c737ca214772e571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5aea9e6f44fa5122f1f23f4479bf03ab13bd39484960de2c737ca214772e571->enter($__internal_f5aea9e6f44fa5122f1f23f4479bf03ab13bd39484960de2c737ca214772e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_423fd991b0b267038d1bbf0d43a5b1b84abe37b6dad9ac21f4d1457beb6d21a4->leave($__internal_423fd991b0b267038d1bbf0d43a5b1b84abe37b6dad9ac21f4d1457beb6d21a4_prof);

        
        $__internal_f5aea9e6f44fa5122f1f23f4479bf03ab13bd39484960de2c737ca214772e571->leave($__internal_f5aea9e6f44fa5122f1f23f4479bf03ab13bd39484960de2c737ca214772e571_prof);

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
", "@Framework/FormTable/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
