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
        $__internal_09c18b5120efdee9e9b69be096b46aad0c30c543cb39c2458ee9d253bf1eedaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c18b5120efdee9e9b69be096b46aad0c30c543cb39c2458ee9d253bf1eedaf->enter($__internal_09c18b5120efdee9e9b69be096b46aad0c30c543cb39c2458ee9d253bf1eedaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d010f6951be49590a31900210a5f9428ec862fbe62b70c4ee4b76728cb7e2034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d010f6951be49590a31900210a5f9428ec862fbe62b70c4ee4b76728cb7e2034->enter($__internal_d010f6951be49590a31900210a5f9428ec862fbe62b70c4ee4b76728cb7e2034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_09c18b5120efdee9e9b69be096b46aad0c30c543cb39c2458ee9d253bf1eedaf->leave($__internal_09c18b5120efdee9e9b69be096b46aad0c30c543cb39c2458ee9d253bf1eedaf_prof);

        
        $__internal_d010f6951be49590a31900210a5f9428ec862fbe62b70c4ee4b76728cb7e2034->leave($__internal_d010f6951be49590a31900210a5f9428ec862fbe62b70c4ee4b76728cb7e2034_prof);

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
