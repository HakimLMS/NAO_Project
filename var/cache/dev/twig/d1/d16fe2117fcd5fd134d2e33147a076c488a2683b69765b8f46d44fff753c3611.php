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
        $__internal_f524dd482189aacf9b6ab0d8b8c9f856e98bd3c4a996cdd9a395b7c297cda0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f524dd482189aacf9b6ab0d8b8c9f856e98bd3c4a996cdd9a395b7c297cda0f0->enter($__internal_f524dd482189aacf9b6ab0d8b8c9f856e98bd3c4a996cdd9a395b7c297cda0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7eaf88a7801a620d513a54db1229a5c118da9ec26a633f1487920dc20f24eb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaf88a7801a620d513a54db1229a5c118da9ec26a633f1487920dc20f24eb99->enter($__internal_7eaf88a7801a620d513a54db1229a5c118da9ec26a633f1487920dc20f24eb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f524dd482189aacf9b6ab0d8b8c9f856e98bd3c4a996cdd9a395b7c297cda0f0->leave($__internal_f524dd482189aacf9b6ab0d8b8c9f856e98bd3c4a996cdd9a395b7c297cda0f0_prof);

        
        $__internal_7eaf88a7801a620d513a54db1229a5c118da9ec26a633f1487920dc20f24eb99->leave($__internal_7eaf88a7801a620d513a54db1229a5c118da9ec26a633f1487920dc20f24eb99_prof);

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
