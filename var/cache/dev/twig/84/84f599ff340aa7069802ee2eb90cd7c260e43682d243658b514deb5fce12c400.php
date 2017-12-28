<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4405ed7a96c20fae48611ac333110ee1a08da1d31b1b224acf6fbf8fab85210a extends Twig_Template
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
        $__internal_cda11f1bde6f8f448fbcee9013f5b080774462f8a6d82c0310833fd63bb73941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda11f1bde6f8f448fbcee9013f5b080774462f8a6d82c0310833fd63bb73941->enter($__internal_cda11f1bde6f8f448fbcee9013f5b080774462f8a6d82c0310833fd63bb73941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d08ff655bb4981ed475599676045b189b10dcec657688c89298ab9392d7b72be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08ff655bb4981ed475599676045b189b10dcec657688c89298ab9392d7b72be->enter($__internal_d08ff655bb4981ed475599676045b189b10dcec657688c89298ab9392d7b72be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cda11f1bde6f8f448fbcee9013f5b080774462f8a6d82c0310833fd63bb73941->leave($__internal_cda11f1bde6f8f448fbcee9013f5b080774462f8a6d82c0310833fd63bb73941_prof);

        
        $__internal_d08ff655bb4981ed475599676045b189b10dcec657688c89298ab9392d7b72be->leave($__internal_d08ff655bb4981ed475599676045b189b10dcec657688c89298ab9392d7b72be_prof);

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
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
