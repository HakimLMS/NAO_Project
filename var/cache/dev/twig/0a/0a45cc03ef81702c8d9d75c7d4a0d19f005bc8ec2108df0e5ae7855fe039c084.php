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
        $__internal_7ee67c9559cd8da8c70412f834cda4d87476e3c1f4a0bed116eb76361ae67250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee67c9559cd8da8c70412f834cda4d87476e3c1f4a0bed116eb76361ae67250->enter($__internal_7ee67c9559cd8da8c70412f834cda4d87476e3c1f4a0bed116eb76361ae67250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_641afb675732c9ca4701364877604671400cfcaa16ef430486cebe94bc0e50ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641afb675732c9ca4701364877604671400cfcaa16ef430486cebe94bc0e50ae->enter($__internal_641afb675732c9ca4701364877604671400cfcaa16ef430486cebe94bc0e50ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7ee67c9559cd8da8c70412f834cda4d87476e3c1f4a0bed116eb76361ae67250->leave($__internal_7ee67c9559cd8da8c70412f834cda4d87476e3c1f4a0bed116eb76361ae67250_prof);

        
        $__internal_641afb675732c9ca4701364877604671400cfcaa16ef430486cebe94bc0e50ae->leave($__internal_641afb675732c9ca4701364877604671400cfcaa16ef430486cebe94bc0e50ae_prof);

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
