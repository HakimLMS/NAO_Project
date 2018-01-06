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
        $__internal_9ac74e4db6ed1cf448898ba8f112b87fcb3610f70c3cee005a96d9aeb92f5911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac74e4db6ed1cf448898ba8f112b87fcb3610f70c3cee005a96d9aeb92f5911->enter($__internal_9ac74e4db6ed1cf448898ba8f112b87fcb3610f70c3cee005a96d9aeb92f5911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_32fa98ace9afc278bd36364d18e0ccb18aa8feb7f5defbabc990c338bfd5935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fa98ace9afc278bd36364d18e0ccb18aa8feb7f5defbabc990c338bfd5935e->enter($__internal_32fa98ace9afc278bd36364d18e0ccb18aa8feb7f5defbabc990c338bfd5935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9ac74e4db6ed1cf448898ba8f112b87fcb3610f70c3cee005a96d9aeb92f5911->leave($__internal_9ac74e4db6ed1cf448898ba8f112b87fcb3610f70c3cee005a96d9aeb92f5911_prof);

        
        $__internal_32fa98ace9afc278bd36364d18e0ccb18aa8feb7f5defbabc990c338bfd5935e->leave($__internal_32fa98ace9afc278bd36364d18e0ccb18aa8feb7f5defbabc990c338bfd5935e_prof);

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
