<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_fe36b9c760660e881eaaf2570b9bcbcb29024b3505c5110caa484a2763af137c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe36b9c760660e881eaaf2570b9bcbcb29024b3505c5110caa484a2763af137c->enter($__internal_fe36b9c760660e881eaaf2570b9bcbcb29024b3505c5110caa484a2763af137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0803e6c9eba227ab126fb9c64277bdce204077bd81c4fc48a9deac559231420a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0803e6c9eba227ab126fb9c64277bdce204077bd81c4fc48a9deac559231420a->enter($__internal_0803e6c9eba227ab126fb9c64277bdce204077bd81c4fc48a9deac559231420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fe36b9c760660e881eaaf2570b9bcbcb29024b3505c5110caa484a2763af137c->leave($__internal_fe36b9c760660e881eaaf2570b9bcbcb29024b3505c5110caa484a2763af137c_prof);

        
        $__internal_0803e6c9eba227ab126fb9c64277bdce204077bd81c4fc48a9deac559231420a->leave($__internal_0803e6c9eba227ab126fb9c64277bdce204077bd81c4fc48a9deac559231420a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
