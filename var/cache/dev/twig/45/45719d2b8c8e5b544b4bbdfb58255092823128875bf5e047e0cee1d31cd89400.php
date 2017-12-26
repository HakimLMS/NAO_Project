<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b6f270b1cc8b105b78e6465854c745e2cd82980dfa3f9d8b750c18170fd43c7 extends Twig_Template
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
        $__internal_4ce50e803b2de34e5ef4b785c4fca8ed4a0013313a10f4c39fb28772d0f7ba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce50e803b2de34e5ef4b785c4fca8ed4a0013313a10f4c39fb28772d0f7ba54->enter($__internal_4ce50e803b2de34e5ef4b785c4fca8ed4a0013313a10f4c39fb28772d0f7ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1ec21866175cd40595dc6eed60096dc8c12a5c13525bff55c87789775a5fe5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec21866175cd40595dc6eed60096dc8c12a5c13525bff55c87789775a5fe5f7->enter($__internal_1ec21866175cd40595dc6eed60096dc8c12a5c13525bff55c87789775a5fe5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4ce50e803b2de34e5ef4b785c4fca8ed4a0013313a10f4c39fb28772d0f7ba54->leave($__internal_4ce50e803b2de34e5ef4b785c4fca8ed4a0013313a10f4c39fb28772d0f7ba54_prof);

        
        $__internal_1ec21866175cd40595dc6eed60096dc8c12a5c13525bff55c87789775a5fe5f7->leave($__internal_1ec21866175cd40595dc6eed60096dc8c12a5c13525bff55c87789775a5fe5f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
