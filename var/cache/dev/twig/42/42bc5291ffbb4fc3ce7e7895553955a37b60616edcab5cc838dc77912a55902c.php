<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5e4ed48d35bdc7bb92ab8ee323316b698ec1785b2e0c3c919ff248520f068740 extends Twig_Template
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
        $__internal_34881074a2f63efc6dc5a55dfaa65f836b67ff289589bc1f007be9b71f70d0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34881074a2f63efc6dc5a55dfaa65f836b67ff289589bc1f007be9b71f70d0e7->enter($__internal_34881074a2f63efc6dc5a55dfaa65f836b67ff289589bc1f007be9b71f70d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_25d5c968bf6ed498c220ca16edf250b66dec00bcedc17e2c43e765e8ec42381a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d5c968bf6ed498c220ca16edf250b66dec00bcedc17e2c43e765e8ec42381a->enter($__internal_25d5c968bf6ed498c220ca16edf250b66dec00bcedc17e2c43e765e8ec42381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_34881074a2f63efc6dc5a55dfaa65f836b67ff289589bc1f007be9b71f70d0e7->leave($__internal_34881074a2f63efc6dc5a55dfaa65f836b67ff289589bc1f007be9b71f70d0e7_prof);

        
        $__internal_25d5c968bf6ed498c220ca16edf250b66dec00bcedc17e2c43e765e8ec42381a->leave($__internal_25d5c968bf6ed498c220ca16edf250b66dec00bcedc17e2c43e765e8ec42381a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
