<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_5d43f0dd16b69be547c0f09d2a80e2b5cb1c752c6e397276bda8baafcc17a583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d43f0dd16b69be547c0f09d2a80e2b5cb1c752c6e397276bda8baafcc17a583->enter($__internal_5d43f0dd16b69be547c0f09d2a80e2b5cb1c752c6e397276bda8baafcc17a583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bd7b0ecdf480e97dcf2c65d38acb64cac47203c1c05f89742d067c627cfe4af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7b0ecdf480e97dcf2c65d38acb64cac47203c1c05f89742d067c627cfe4af9->enter($__internal_bd7b0ecdf480e97dcf2c65d38acb64cac47203c1c05f89742d067c627cfe4af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5d43f0dd16b69be547c0f09d2a80e2b5cb1c752c6e397276bda8baafcc17a583->leave($__internal_5d43f0dd16b69be547c0f09d2a80e2b5cb1c752c6e397276bda8baafcc17a583_prof);

        
        $__internal_bd7b0ecdf480e97dcf2c65d38acb64cac47203c1c05f89742d067c627cfe4af9->leave($__internal_bd7b0ecdf480e97dcf2c65d38acb64cac47203c1c05f89742d067c627cfe4af9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
