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
        $__internal_cf11ee388871f647c63be4a96d946460714da3e5948bc8adedfb7b19dddd0d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf11ee388871f647c63be4a96d946460714da3e5948bc8adedfb7b19dddd0d3f->enter($__internal_cf11ee388871f647c63be4a96d946460714da3e5948bc8adedfb7b19dddd0d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_df586f979f497830af97e9d3c271a2d3b75c8990c64de868229d45cadbf0acfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df586f979f497830af97e9d3c271a2d3b75c8990c64de868229d45cadbf0acfc->enter($__internal_df586f979f497830af97e9d3c271a2d3b75c8990c64de868229d45cadbf0acfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cf11ee388871f647c63be4a96d946460714da3e5948bc8adedfb7b19dddd0d3f->leave($__internal_cf11ee388871f647c63be4a96d946460714da3e5948bc8adedfb7b19dddd0d3f_prof);

        
        $__internal_df586f979f497830af97e9d3c271a2d3b75c8990c64de868229d45cadbf0acfc->leave($__internal_df586f979f497830af97e9d3c271a2d3b75c8990c64de868229d45cadbf0acfc_prof);

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
