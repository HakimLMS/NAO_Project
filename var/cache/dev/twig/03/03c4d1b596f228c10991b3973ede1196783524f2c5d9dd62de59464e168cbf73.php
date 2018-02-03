<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f19bf554848926a53f71dd044585bc141a931e42e50ce50bc0a8764b597c843 extends Twig_Template
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
        $__internal_e8152327c6ea07bbbebfa7ad81d77b40df53fbaee51f8ac6238f8a031a92b60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8152327c6ea07bbbebfa7ad81d77b40df53fbaee51f8ac6238f8a031a92b60a->enter($__internal_e8152327c6ea07bbbebfa7ad81d77b40df53fbaee51f8ac6238f8a031a92b60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_559d2921480298227f1d4ef9f62de1493c093b4838525a2e74c59348963a536a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559d2921480298227f1d4ef9f62de1493c093b4838525a2e74c59348963a536a->enter($__internal_559d2921480298227f1d4ef9f62de1493c093b4838525a2e74c59348963a536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e8152327c6ea07bbbebfa7ad81d77b40df53fbaee51f8ac6238f8a031a92b60a->leave($__internal_e8152327c6ea07bbbebfa7ad81d77b40df53fbaee51f8ac6238f8a031a92b60a_prof);

        
        $__internal_559d2921480298227f1d4ef9f62de1493c093b4838525a2e74c59348963a536a->leave($__internal_559d2921480298227f1d4ef9f62de1493c093b4838525a2e74c59348963a536a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
