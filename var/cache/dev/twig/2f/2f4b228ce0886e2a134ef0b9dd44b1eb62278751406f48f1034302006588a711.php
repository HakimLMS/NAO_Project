<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_515e5d846bd0dd07296b293269fa27a5e4b3c0d4887c3dab5d7424a485a560ef extends Twig_Template
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
        $__internal_5d10d6e6b30f87d4510eeb024893fa786c165883bf534782f2c3d8c598b4864d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d10d6e6b30f87d4510eeb024893fa786c165883bf534782f2c3d8c598b4864d->enter($__internal_5d10d6e6b30f87d4510eeb024893fa786c165883bf534782f2c3d8c598b4864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d18974313f264006c255e499cf2fb6d6e8f3f36d747397e276dd8fadbd322152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18974313f264006c255e499cf2fb6d6e8f3f36d747397e276dd8fadbd322152->enter($__internal_d18974313f264006c255e499cf2fb6d6e8f3f36d747397e276dd8fadbd322152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5d10d6e6b30f87d4510eeb024893fa786c165883bf534782f2c3d8c598b4864d->leave($__internal_5d10d6e6b30f87d4510eeb024893fa786c165883bf534782f2c3d8c598b4864d_prof);

        
        $__internal_d18974313f264006c255e499cf2fb6d6e8f3f36d747397e276dd8fadbd322152->leave($__internal_d18974313f264006c255e499cf2fb6d6e8f3f36d747397e276dd8fadbd322152_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
