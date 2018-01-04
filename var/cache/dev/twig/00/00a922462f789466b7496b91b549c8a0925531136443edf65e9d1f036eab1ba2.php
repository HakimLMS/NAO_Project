<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_edd4daac465432530d42a1691d39899af67994cfe1b820125526dad86a77e3cc extends Twig_Template
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
        $__internal_83b06107f31ad7212c72875b20dbbce0f9897a92ea2f1de186833fa7ada10769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b06107f31ad7212c72875b20dbbce0f9897a92ea2f1de186833fa7ada10769->enter($__internal_83b06107f31ad7212c72875b20dbbce0f9897a92ea2f1de186833fa7ada10769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f8b4287d75424bd159f582b5f8bb20fd09eada740f677ae55f96139b24191a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b4287d75424bd159f582b5f8bb20fd09eada740f677ae55f96139b24191a99->enter($__internal_f8b4287d75424bd159f582b5f8bb20fd09eada740f677ae55f96139b24191a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_83b06107f31ad7212c72875b20dbbce0f9897a92ea2f1de186833fa7ada10769->leave($__internal_83b06107f31ad7212c72875b20dbbce0f9897a92ea2f1de186833fa7ada10769_prof);

        
        $__internal_f8b4287d75424bd159f582b5f8bb20fd09eada740f677ae55f96139b24191a99->leave($__internal_f8b4287d75424bd159f582b5f8bb20fd09eada740f677ae55f96139b24191a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
