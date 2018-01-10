<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a20ab32f3d65e383a13f3ed6ab89b57bcd3228f14721070d38204155bfae5303 extends Twig_Template
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
        $__internal_8205e8dac1491ccf2d01cb32e9162a82776019832daaa5321ac9613bf3c7e3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8205e8dac1491ccf2d01cb32e9162a82776019832daaa5321ac9613bf3c7e3c4->enter($__internal_8205e8dac1491ccf2d01cb32e9162a82776019832daaa5321ac9613bf3c7e3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d3c90a8ffa2028db5980a59c49382e1986dc1eface3293e9429ab8629fb575e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c90a8ffa2028db5980a59c49382e1986dc1eface3293e9429ab8629fb575e4->enter($__internal_d3c90a8ffa2028db5980a59c49382e1986dc1eface3293e9429ab8629fb575e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8205e8dac1491ccf2d01cb32e9162a82776019832daaa5321ac9613bf3c7e3c4->leave($__internal_8205e8dac1491ccf2d01cb32e9162a82776019832daaa5321ac9613bf3c7e3c4_prof);

        
        $__internal_d3c90a8ffa2028db5980a59c49382e1986dc1eface3293e9429ab8629fb575e4->leave($__internal_d3c90a8ffa2028db5980a59c49382e1986dc1eface3293e9429ab8629fb575e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
