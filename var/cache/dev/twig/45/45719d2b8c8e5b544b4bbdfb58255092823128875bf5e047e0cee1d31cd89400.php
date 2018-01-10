<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b6f270b1cc8b105b78e6465854c745e2cd82980dfa3f9d8b750c18170fd43c7 extends Twig_Template
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
        $__internal_d54d388cf887ffd54f302a2e5322f57413adbdb8b347e9d086d86cf575dfa103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54d388cf887ffd54f302a2e5322f57413adbdb8b347e9d086d86cf575dfa103->enter($__internal_d54d388cf887ffd54f302a2e5322f57413adbdb8b347e9d086d86cf575dfa103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_765785fae2eab54ba7073df3822056093edaad937ec63cea5281e5aa339abba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765785fae2eab54ba7073df3822056093edaad937ec63cea5281e5aa339abba9->enter($__internal_765785fae2eab54ba7073df3822056093edaad937ec63cea5281e5aa339abba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d54d388cf887ffd54f302a2e5322f57413adbdb8b347e9d086d86cf575dfa103->leave($__internal_d54d388cf887ffd54f302a2e5322f57413adbdb8b347e9d086d86cf575dfa103_prof);

        
        $__internal_765785fae2eab54ba7073df3822056093edaad937ec63cea5281e5aa339abba9->leave($__internal_765785fae2eab54ba7073df3822056093edaad937ec63cea5281e5aa339abba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
