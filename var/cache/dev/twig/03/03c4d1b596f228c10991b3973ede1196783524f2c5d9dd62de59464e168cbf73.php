<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f19bf554848926a53f71dd044585bc141a931e42e50ce50bc0a8764b597c843 extends Twig_Template
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
        $__internal_a28ceb1164c9a3de9c0d64e6344fa30c8b4130d1647da10483b010d62483864a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28ceb1164c9a3de9c0d64e6344fa30c8b4130d1647da10483b010d62483864a->enter($__internal_a28ceb1164c9a3de9c0d64e6344fa30c8b4130d1647da10483b010d62483864a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_acecc8b95d7ec0c5ef8632532fa9b45ea369e504a24fbc5d2f7ec900ceae2e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acecc8b95d7ec0c5ef8632532fa9b45ea369e504a24fbc5d2f7ec900ceae2e57->enter($__internal_acecc8b95d7ec0c5ef8632532fa9b45ea369e504a24fbc5d2f7ec900ceae2e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a28ceb1164c9a3de9c0d64e6344fa30c8b4130d1647da10483b010d62483864a->leave($__internal_a28ceb1164c9a3de9c0d64e6344fa30c8b4130d1647da10483b010d62483864a_prof);

        
        $__internal_acecc8b95d7ec0c5ef8632532fa9b45ea369e504a24fbc5d2f7ec900ceae2e57->leave($__internal_acecc8b95d7ec0c5ef8632532fa9b45ea369e504a24fbc5d2f7ec900ceae2e57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
