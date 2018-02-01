<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_afa1a892f2097b2e148133ea89cdc2c0f6a677118a66aa8ddd6234a06ac03516 extends Twig_Template
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
        $__internal_ddd79bced14086a8b18e8c393e7690600106337a0d85cdd0c72f71ac30ba80bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd79bced14086a8b18e8c393e7690600106337a0d85cdd0c72f71ac30ba80bd->enter($__internal_ddd79bced14086a8b18e8c393e7690600106337a0d85cdd0c72f71ac30ba80bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d78625efb6af02e92ff554a27a4f5f1ee72a7fd2b6274a79d65aa94554b22532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78625efb6af02e92ff554a27a4f5f1ee72a7fd2b6274a79d65aa94554b22532->enter($__internal_d78625efb6af02e92ff554a27a4f5f1ee72a7fd2b6274a79d65aa94554b22532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ddd79bced14086a8b18e8c393e7690600106337a0d85cdd0c72f71ac30ba80bd->leave($__internal_ddd79bced14086a8b18e8c393e7690600106337a0d85cdd0c72f71ac30ba80bd_prof);

        
        $__internal_d78625efb6af02e92ff554a27a4f5f1ee72a7fd2b6274a79d65aa94554b22532->leave($__internal_d78625efb6af02e92ff554a27a4f5f1ee72a7fd2b6274a79d65aa94554b22532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
