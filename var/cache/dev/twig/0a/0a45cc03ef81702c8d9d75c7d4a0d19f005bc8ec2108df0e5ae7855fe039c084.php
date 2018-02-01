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
        $__internal_927456314b5f45fa68f4687dd4703c22b2bc2d17da5c959b94a9746647bc6460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927456314b5f45fa68f4687dd4703c22b2bc2d17da5c959b94a9746647bc6460->enter($__internal_927456314b5f45fa68f4687dd4703c22b2bc2d17da5c959b94a9746647bc6460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7c4e1ad6672bf951134d5ac4efab82ee88070532f675b6aba702cb78b5de5c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4e1ad6672bf951134d5ac4efab82ee88070532f675b6aba702cb78b5de5c06->enter($__internal_7c4e1ad6672bf951134d5ac4efab82ee88070532f675b6aba702cb78b5de5c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_927456314b5f45fa68f4687dd4703c22b2bc2d17da5c959b94a9746647bc6460->leave($__internal_927456314b5f45fa68f4687dd4703c22b2bc2d17da5c959b94a9746647bc6460_prof);

        
        $__internal_7c4e1ad6672bf951134d5ac4efab82ee88070532f675b6aba702cb78b5de5c06->leave($__internal_7c4e1ad6672bf951134d5ac4efab82ee88070532f675b6aba702cb78b5de5c06_prof);

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
