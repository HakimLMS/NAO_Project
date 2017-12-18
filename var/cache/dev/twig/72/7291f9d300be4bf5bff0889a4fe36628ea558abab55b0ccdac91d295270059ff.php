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
        $__internal_d5207b8c0c659095c62458c5baa3d1e6adac338fbf7291f1873b0663f83d51ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5207b8c0c659095c62458c5baa3d1e6adac338fbf7291f1873b0663f83d51ec->enter($__internal_d5207b8c0c659095c62458c5baa3d1e6adac338fbf7291f1873b0663f83d51ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f977c5a7bfe4dcdeb24e4af3c48a89924c7f1163dcb1c5bd19fc14437cc6b50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f977c5a7bfe4dcdeb24e4af3c48a89924c7f1163dcb1c5bd19fc14437cc6b50c->enter($__internal_f977c5a7bfe4dcdeb24e4af3c48a89924c7f1163dcb1c5bd19fc14437cc6b50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d5207b8c0c659095c62458c5baa3d1e6adac338fbf7291f1873b0663f83d51ec->leave($__internal_d5207b8c0c659095c62458c5baa3d1e6adac338fbf7291f1873b0663f83d51ec_prof);

        
        $__internal_f977c5a7bfe4dcdeb24e4af3c48a89924c7f1163dcb1c5bd19fc14437cc6b50c->leave($__internal_f977c5a7bfe4dcdeb24e4af3c48a89924c7f1163dcb1c5bd19fc14437cc6b50c_prof);

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
