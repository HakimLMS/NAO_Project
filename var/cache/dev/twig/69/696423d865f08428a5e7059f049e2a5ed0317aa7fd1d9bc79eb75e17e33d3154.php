<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ef9d984b538bd3d84bfaeb12c283505a90dbfee1eab9b0aee8dabeb4d3a327a extends Twig_Template
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
        $__internal_dbdd3ea71347011a5fcc2828f45e4b76de32ec4a2d64f7ec5dec4109bd635cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdd3ea71347011a5fcc2828f45e4b76de32ec4a2d64f7ec5dec4109bd635cf4->enter($__internal_dbdd3ea71347011a5fcc2828f45e4b76de32ec4a2d64f7ec5dec4109bd635cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0f3768a5c5539bff0f4f2f5205c048a8deec25e7a456922dcb61b17c13577437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3768a5c5539bff0f4f2f5205c048a8deec25e7a456922dcb61b17c13577437->enter($__internal_0f3768a5c5539bff0f4f2f5205c048a8deec25e7a456922dcb61b17c13577437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dbdd3ea71347011a5fcc2828f45e4b76de32ec4a2d64f7ec5dec4109bd635cf4->leave($__internal_dbdd3ea71347011a5fcc2828f45e4b76de32ec4a2d64f7ec5dec4109bd635cf4_prof);

        
        $__internal_0f3768a5c5539bff0f4f2f5205c048a8deec25e7a456922dcb61b17c13577437->leave($__internal_0f3768a5c5539bff0f4f2f5205c048a8deec25e7a456922dcb61b17c13577437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
