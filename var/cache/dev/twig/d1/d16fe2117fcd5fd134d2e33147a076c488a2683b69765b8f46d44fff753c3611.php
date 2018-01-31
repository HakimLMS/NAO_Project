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
        $__internal_305e1f5c67dc93544c97794eed1d12ec95a5c6b14d613c1478a24be558169b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305e1f5c67dc93544c97794eed1d12ec95a5c6b14d613c1478a24be558169b73->enter($__internal_305e1f5c67dc93544c97794eed1d12ec95a5c6b14d613c1478a24be558169b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bf4155c564c04ee5278b5821fa9bdbd8eed14892fe4ebd5eb630bcf76b379d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4155c564c04ee5278b5821fa9bdbd8eed14892fe4ebd5eb630bcf76b379d10->enter($__internal_bf4155c564c04ee5278b5821fa9bdbd8eed14892fe4ebd5eb630bcf76b379d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_305e1f5c67dc93544c97794eed1d12ec95a5c6b14d613c1478a24be558169b73->leave($__internal_305e1f5c67dc93544c97794eed1d12ec95a5c6b14d613c1478a24be558169b73_prof);

        
        $__internal_bf4155c564c04ee5278b5821fa9bdbd8eed14892fe4ebd5eb630bcf76b379d10->leave($__internal_bf4155c564c04ee5278b5821fa9bdbd8eed14892fe4ebd5eb630bcf76b379d10_prof);

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
