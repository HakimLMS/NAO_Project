<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_cb0f6d43ef57c48ff9410837c2b4870250aa40160bc863f41fedddd6dfc6f045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0f6d43ef57c48ff9410837c2b4870250aa40160bc863f41fedddd6dfc6f045->enter($__internal_cb0f6d43ef57c48ff9410837c2b4870250aa40160bc863f41fedddd6dfc6f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_23f959f19d1c8837a4b549f902b48e27ebef2788092a78a0bbd2e27d00da54a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f959f19d1c8837a4b549f902b48e27ebef2788092a78a0bbd2e27d00da54a2->enter($__internal_23f959f19d1c8837a4b549f902b48e27ebef2788092a78a0bbd2e27d00da54a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cb0f6d43ef57c48ff9410837c2b4870250aa40160bc863f41fedddd6dfc6f045->leave($__internal_cb0f6d43ef57c48ff9410837c2b4870250aa40160bc863f41fedddd6dfc6f045_prof);

        
        $__internal_23f959f19d1c8837a4b549f902b48e27ebef2788092a78a0bbd2e27d00da54a2->leave($__internal_23f959f19d1c8837a4b549f902b48e27ebef2788092a78a0bbd2e27d00da54a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
