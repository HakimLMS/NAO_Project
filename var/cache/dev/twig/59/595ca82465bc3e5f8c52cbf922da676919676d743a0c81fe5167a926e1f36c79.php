<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_d291a37f04a39407f384b1a1298ba2dff4a46dccf433d9a3e2500052fae6fadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d291a37f04a39407f384b1a1298ba2dff4a46dccf433d9a3e2500052fae6fadd->enter($__internal_d291a37f04a39407f384b1a1298ba2dff4a46dccf433d9a3e2500052fae6fadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_53732c9bddef442801ac2894e9beb1886842aa5b033a4d3e7b5a7e75e0359a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53732c9bddef442801ac2894e9beb1886842aa5b033a4d3e7b5a7e75e0359a20->enter($__internal_53732c9bddef442801ac2894e9beb1886842aa5b033a4d3e7b5a7e75e0359a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d291a37f04a39407f384b1a1298ba2dff4a46dccf433d9a3e2500052fae6fadd->leave($__internal_d291a37f04a39407f384b1a1298ba2dff4a46dccf433d9a3e2500052fae6fadd_prof);

        
        $__internal_53732c9bddef442801ac2894e9beb1886842aa5b033a4d3e7b5a7e75e0359a20->leave($__internal_53732c9bddef442801ac2894e9beb1886842aa5b033a4d3e7b5a7e75e0359a20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
