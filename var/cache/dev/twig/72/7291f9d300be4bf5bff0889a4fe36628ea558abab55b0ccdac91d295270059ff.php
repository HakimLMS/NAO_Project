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
        $__internal_c4db3767d9bdbcfcc2a5517bb8d4b0dc87439564e0ebaba06088b279afa076c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4db3767d9bdbcfcc2a5517bb8d4b0dc87439564e0ebaba06088b279afa076c7->enter($__internal_c4db3767d9bdbcfcc2a5517bb8d4b0dc87439564e0ebaba06088b279afa076c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f404ce4888f7613a90c9b449e38a4156a48b8f297757eb73254bace914c7ca06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f404ce4888f7613a90c9b449e38a4156a48b8f297757eb73254bace914c7ca06->enter($__internal_f404ce4888f7613a90c9b449e38a4156a48b8f297757eb73254bace914c7ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c4db3767d9bdbcfcc2a5517bb8d4b0dc87439564e0ebaba06088b279afa076c7->leave($__internal_c4db3767d9bdbcfcc2a5517bb8d4b0dc87439564e0ebaba06088b279afa076c7_prof);

        
        $__internal_f404ce4888f7613a90c9b449e38a4156a48b8f297757eb73254bace914c7ca06->leave($__internal_f404ce4888f7613a90c9b449e38a4156a48b8f297757eb73254bace914c7ca06_prof);

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
