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
        $__internal_456086d0b8a1cf2338cce4c708eb35a45afd4b2b206ea46546f76435b5a38af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456086d0b8a1cf2338cce4c708eb35a45afd4b2b206ea46546f76435b5a38af0->enter($__internal_456086d0b8a1cf2338cce4c708eb35a45afd4b2b206ea46546f76435b5a38af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a272710b2d721f4043ad8e11c79e0ef642ab81af755717a2fbed9d1badd779d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a272710b2d721f4043ad8e11c79e0ef642ab81af755717a2fbed9d1badd779d7->enter($__internal_a272710b2d721f4043ad8e11c79e0ef642ab81af755717a2fbed9d1badd779d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_456086d0b8a1cf2338cce4c708eb35a45afd4b2b206ea46546f76435b5a38af0->leave($__internal_456086d0b8a1cf2338cce4c708eb35a45afd4b2b206ea46546f76435b5a38af0_prof);

        
        $__internal_a272710b2d721f4043ad8e11c79e0ef642ab81af755717a2fbed9d1badd779d7->leave($__internal_a272710b2d721f4043ad8e11c79e0ef642ab81af755717a2fbed9d1badd779d7_prof);

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
