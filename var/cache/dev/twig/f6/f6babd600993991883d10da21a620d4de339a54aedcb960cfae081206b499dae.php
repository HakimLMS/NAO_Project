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
        $__internal_eaa9e35e46b7d883d14a6b8bc0e023ed842aa7e6cbccef09b48f61697d870f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa9e35e46b7d883d14a6b8bc0e023ed842aa7e6cbccef09b48f61697d870f47->enter($__internal_eaa9e35e46b7d883d14a6b8bc0e023ed842aa7e6cbccef09b48f61697d870f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ad38bc495bc2b65a5f1e5ffd9a3a6c218a00e39940fff2c754355424fada6df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad38bc495bc2b65a5f1e5ffd9a3a6c218a00e39940fff2c754355424fada6df5->enter($__internal_ad38bc495bc2b65a5f1e5ffd9a3a6c218a00e39940fff2c754355424fada6df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eaa9e35e46b7d883d14a6b8bc0e023ed842aa7e6cbccef09b48f61697d870f47->leave($__internal_eaa9e35e46b7d883d14a6b8bc0e023ed842aa7e6cbccef09b48f61697d870f47_prof);

        
        $__internal_ad38bc495bc2b65a5f1e5ffd9a3a6c218a00e39940fff2c754355424fada6df5->leave($__internal_ad38bc495bc2b65a5f1e5ffd9a3a6c218a00e39940fff2c754355424fada6df5_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
