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
        $__internal_248137d7c65265600d4649eeed83d897763e8cf8383d988b684318f08f5b7e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248137d7c65265600d4649eeed83d897763e8cf8383d988b684318f08f5b7e7a->enter($__internal_248137d7c65265600d4649eeed83d897763e8cf8383d988b684318f08f5b7e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c36d49cf8863a28f4564788e3abd6eff2e6f8704feae1050d58ffed1a1f6c974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36d49cf8863a28f4564788e3abd6eff2e6f8704feae1050d58ffed1a1f6c974->enter($__internal_c36d49cf8863a28f4564788e3abd6eff2e6f8704feae1050d58ffed1a1f6c974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_248137d7c65265600d4649eeed83d897763e8cf8383d988b684318f08f5b7e7a->leave($__internal_248137d7c65265600d4649eeed83d897763e8cf8383d988b684318f08f5b7e7a_prof);

        
        $__internal_c36d49cf8863a28f4564788e3abd6eff2e6f8704feae1050d58ffed1a1f6c974->leave($__internal_c36d49cf8863a28f4564788e3abd6eff2e6f8704feae1050d58ffed1a1f6c974_prof);

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
