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
        $__internal_bf12786179cc63aea9be2fc32936effb9a4bdb8cecd4a82860f1d84ef0e40bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf12786179cc63aea9be2fc32936effb9a4bdb8cecd4a82860f1d84ef0e40bbb->enter($__internal_bf12786179cc63aea9be2fc32936effb9a4bdb8cecd4a82860f1d84ef0e40bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1c6aa742aa4878d502f3a166232df1bdf3374343fce9ec12101471197eb49d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6aa742aa4878d502f3a166232df1bdf3374343fce9ec12101471197eb49d4c->enter($__internal_1c6aa742aa4878d502f3a166232df1bdf3374343fce9ec12101471197eb49d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bf12786179cc63aea9be2fc32936effb9a4bdb8cecd4a82860f1d84ef0e40bbb->leave($__internal_bf12786179cc63aea9be2fc32936effb9a4bdb8cecd4a82860f1d84ef0e40bbb_prof);

        
        $__internal_1c6aa742aa4878d502f3a166232df1bdf3374343fce9ec12101471197eb49d4c->leave($__internal_1c6aa742aa4878d502f3a166232df1bdf3374343fce9ec12101471197eb49d4c_prof);

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
