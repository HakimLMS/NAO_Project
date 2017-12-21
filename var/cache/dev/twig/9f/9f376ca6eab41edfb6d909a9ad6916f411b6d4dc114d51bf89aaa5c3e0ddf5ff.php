<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_988b7365c3d99ad2ec26ae98bfdfd0acd15d7bc349622fee4e1668d87a4389d9 extends Twig_Template
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
        $__internal_1bf9e4168a21b9a0efc1f9ddac3008d9c9655bcd8409b0f61fba93a1f9c565f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf9e4168a21b9a0efc1f9ddac3008d9c9655bcd8409b0f61fba93a1f9c565f8->enter($__internal_1bf9e4168a21b9a0efc1f9ddac3008d9c9655bcd8409b0f61fba93a1f9c565f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f76004f160257bbbe7a8e365800f0fe889c9733034f8c8cd53147cdc1145bb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76004f160257bbbe7a8e365800f0fe889c9733034f8c8cd53147cdc1145bb64->enter($__internal_f76004f160257bbbe7a8e365800f0fe889c9733034f8c8cd53147cdc1145bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1bf9e4168a21b9a0efc1f9ddac3008d9c9655bcd8409b0f61fba93a1f9c565f8->leave($__internal_1bf9e4168a21b9a0efc1f9ddac3008d9c9655bcd8409b0f61fba93a1f9c565f8_prof);

        
        $__internal_f76004f160257bbbe7a8e365800f0fe889c9733034f8c8cd53147cdc1145bb64->leave($__internal_f76004f160257bbbe7a8e365800f0fe889c9733034f8c8cd53147cdc1145bb64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
