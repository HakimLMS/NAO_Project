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
        $__internal_fc37af0b133b54c5b09882454a79a6b1d0fba8d1509efe2e54571d50ff519fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc37af0b133b54c5b09882454a79a6b1d0fba8d1509efe2e54571d50ff519fab->enter($__internal_fc37af0b133b54c5b09882454a79a6b1d0fba8d1509efe2e54571d50ff519fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fda8de986c81956502f23cdec61813f455a79b5fa5bf2819cd17312376e0f767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda8de986c81956502f23cdec61813f455a79b5fa5bf2819cd17312376e0f767->enter($__internal_fda8de986c81956502f23cdec61813f455a79b5fa5bf2819cd17312376e0f767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fc37af0b133b54c5b09882454a79a6b1d0fba8d1509efe2e54571d50ff519fab->leave($__internal_fc37af0b133b54c5b09882454a79a6b1d0fba8d1509efe2e54571d50ff519fab_prof);

        
        $__internal_fda8de986c81956502f23cdec61813f455a79b5fa5bf2819cd17312376e0f767->leave($__internal_fda8de986c81956502f23cdec61813f455a79b5fa5bf2819cd17312376e0f767_prof);

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
