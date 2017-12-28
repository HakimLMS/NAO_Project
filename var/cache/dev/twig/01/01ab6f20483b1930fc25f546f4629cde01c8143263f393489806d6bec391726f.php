<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_25c6dd6500fc6b430f2197892b94274c86bf89194d8e7bff23268db5afca929c extends Twig_Template
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
        $__internal_d764582a3adc9580fc0d9230af4a311639d12c8eb8413c71bb3dc8ddd2931bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d764582a3adc9580fc0d9230af4a311639d12c8eb8413c71bb3dc8ddd2931bb0->enter($__internal_d764582a3adc9580fc0d9230af4a311639d12c8eb8413c71bb3dc8ddd2931bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_77f52c4d5177f0f7440452b72c6bffd432033f7be846305c7e244b7e9b0ba7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f52c4d5177f0f7440452b72c6bffd432033f7be846305c7e244b7e9b0ba7a8->enter($__internal_77f52c4d5177f0f7440452b72c6bffd432033f7be846305c7e244b7e9b0ba7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d764582a3adc9580fc0d9230af4a311639d12c8eb8413c71bb3dc8ddd2931bb0->leave($__internal_d764582a3adc9580fc0d9230af4a311639d12c8eb8413c71bb3dc8ddd2931bb0_prof);

        
        $__internal_77f52c4d5177f0f7440452b72c6bffd432033f7be846305c7e244b7e9b0ba7a8->leave($__internal_77f52c4d5177f0f7440452b72c6bffd432033f7be846305c7e244b7e9b0ba7a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
