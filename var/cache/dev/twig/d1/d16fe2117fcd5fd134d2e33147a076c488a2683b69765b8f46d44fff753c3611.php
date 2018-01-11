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
        $__internal_4cfd1777b770300581bfc9e351ca3b67b718694f0bfadcec38559d6dd103848a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfd1777b770300581bfc9e351ca3b67b718694f0bfadcec38559d6dd103848a->enter($__internal_4cfd1777b770300581bfc9e351ca3b67b718694f0bfadcec38559d6dd103848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_44a511f20c043ea02541d0ab38a8dfcebffde5eb08f2b730bfd984845abc2e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a511f20c043ea02541d0ab38a8dfcebffde5eb08f2b730bfd984845abc2e3c->enter($__internal_44a511f20c043ea02541d0ab38a8dfcebffde5eb08f2b730bfd984845abc2e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4cfd1777b770300581bfc9e351ca3b67b718694f0bfadcec38559d6dd103848a->leave($__internal_4cfd1777b770300581bfc9e351ca3b67b718694f0bfadcec38559d6dd103848a_prof);

        
        $__internal_44a511f20c043ea02541d0ab38a8dfcebffde5eb08f2b730bfd984845abc2e3c->leave($__internal_44a511f20c043ea02541d0ab38a8dfcebffde5eb08f2b730bfd984845abc2e3c_prof);

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
