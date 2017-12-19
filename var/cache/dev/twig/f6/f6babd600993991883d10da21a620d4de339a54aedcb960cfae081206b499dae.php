<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_73a0cab12b70b9c06ff7be7a6bd319772a39b28fd59a29532e966fc83b2cc1cb extends Twig_Template
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
        $__internal_ed2539dd076f0de9caab72232763099985914d690944013da866d535ac3629e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2539dd076f0de9caab72232763099985914d690944013da866d535ac3629e4->enter($__internal_ed2539dd076f0de9caab72232763099985914d690944013da866d535ac3629e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_df77a9b85afde9792ad6d98b48a6e8cd2364e6af98f8b8318fddc8fcadccd433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df77a9b85afde9792ad6d98b48a6e8cd2364e6af98f8b8318fddc8fcadccd433->enter($__internal_df77a9b85afde9792ad6d98b48a6e8cd2364e6af98f8b8318fddc8fcadccd433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ed2539dd076f0de9caab72232763099985914d690944013da866d535ac3629e4->leave($__internal_ed2539dd076f0de9caab72232763099985914d690944013da866d535ac3629e4_prof);

        
        $__internal_df77a9b85afde9792ad6d98b48a6e8cd2364e6af98f8b8318fddc8fcadccd433->leave($__internal_df77a9b85afde9792ad6d98b48a6e8cd2364e6af98f8b8318fddc8fcadccd433_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
