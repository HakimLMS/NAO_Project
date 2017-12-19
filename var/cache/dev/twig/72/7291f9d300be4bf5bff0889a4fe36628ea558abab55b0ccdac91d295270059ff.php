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
        $__internal_cf1fdec3299b6a5ff66268245ecf8b66f0233bd0efc5159dd3a3a547d0d92a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1fdec3299b6a5ff66268245ecf8b66f0233bd0efc5159dd3a3a547d0d92a34->enter($__internal_cf1fdec3299b6a5ff66268245ecf8b66f0233bd0efc5159dd3a3a547d0d92a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f4ec08ac9b4a808e60ec4a18512d0f1eb6830059ce57ac5f2c15d9666405e0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ec08ac9b4a808e60ec4a18512d0f1eb6830059ce57ac5f2c15d9666405e0d6->enter($__internal_f4ec08ac9b4a808e60ec4a18512d0f1eb6830059ce57ac5f2c15d9666405e0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cf1fdec3299b6a5ff66268245ecf8b66f0233bd0efc5159dd3a3a547d0d92a34->leave($__internal_cf1fdec3299b6a5ff66268245ecf8b66f0233bd0efc5159dd3a3a547d0d92a34_prof);

        
        $__internal_f4ec08ac9b4a808e60ec4a18512d0f1eb6830059ce57ac5f2c15d9666405e0d6->leave($__internal_f4ec08ac9b4a808e60ec4a18512d0f1eb6830059ce57ac5f2c15d9666405e0d6_prof);

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
