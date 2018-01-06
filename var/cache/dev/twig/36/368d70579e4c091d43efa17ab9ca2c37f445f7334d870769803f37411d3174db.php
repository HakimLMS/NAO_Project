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
        $__internal_2285b647fad0bee297d42fcc6362b8dd21eb79f127a872ae55204181d9711864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2285b647fad0bee297d42fcc6362b8dd21eb79f127a872ae55204181d9711864->enter($__internal_2285b647fad0bee297d42fcc6362b8dd21eb79f127a872ae55204181d9711864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_70650c36898dcd653214cc7fe90181661e47f568ae2ab46b897246ed42567ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70650c36898dcd653214cc7fe90181661e47f568ae2ab46b897246ed42567ee5->enter($__internal_70650c36898dcd653214cc7fe90181661e47f568ae2ab46b897246ed42567ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2285b647fad0bee297d42fcc6362b8dd21eb79f127a872ae55204181d9711864->leave($__internal_2285b647fad0bee297d42fcc6362b8dd21eb79f127a872ae55204181d9711864_prof);

        
        $__internal_70650c36898dcd653214cc7fe90181661e47f568ae2ab46b897246ed42567ee5->leave($__internal_70650c36898dcd653214cc7fe90181661e47f568ae2ab46b897246ed42567ee5_prof);

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
", "@Framework/Form/submit_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
