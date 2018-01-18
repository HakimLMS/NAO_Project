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
        $__internal_326cac87e145dafd39347c119be9c5b3b98646d99b3e93a3035dc82a05e398e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326cac87e145dafd39347c119be9c5b3b98646d99b3e93a3035dc82a05e398e5->enter($__internal_326cac87e145dafd39347c119be9c5b3b98646d99b3e93a3035dc82a05e398e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9aed55c05bc4f495840f634e69c78c63443a552b01b8d3fc6fae6d7b3c85b50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aed55c05bc4f495840f634e69c78c63443a552b01b8d3fc6fae6d7b3c85b50c->enter($__internal_9aed55c05bc4f495840f634e69c78c63443a552b01b8d3fc6fae6d7b3c85b50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_326cac87e145dafd39347c119be9c5b3b98646d99b3e93a3035dc82a05e398e5->leave($__internal_326cac87e145dafd39347c119be9c5b3b98646d99b3e93a3035dc82a05e398e5_prof);

        
        $__internal_9aed55c05bc4f495840f634e69c78c63443a552b01b8d3fc6fae6d7b3c85b50c->leave($__internal_9aed55c05bc4f495840f634e69c78c63443a552b01b8d3fc6fae6d7b3c85b50c_prof);

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
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
