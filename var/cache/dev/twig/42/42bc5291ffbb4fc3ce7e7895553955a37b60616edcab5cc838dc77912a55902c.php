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
        $__internal_9ce836f50188cde411102fb2e71fee276b9a2bce5ae02e5148e7f8ade87d1398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce836f50188cde411102fb2e71fee276b9a2bce5ae02e5148e7f8ade87d1398->enter($__internal_9ce836f50188cde411102fb2e71fee276b9a2bce5ae02e5148e7f8ade87d1398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_553e82353de2b3fb22de1e99a94a8330b3ad7c1e38ac3bafbd5460f373e0ea72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553e82353de2b3fb22de1e99a94a8330b3ad7c1e38ac3bafbd5460f373e0ea72->enter($__internal_553e82353de2b3fb22de1e99a94a8330b3ad7c1e38ac3bafbd5460f373e0ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9ce836f50188cde411102fb2e71fee276b9a2bce5ae02e5148e7f8ade87d1398->leave($__internal_9ce836f50188cde411102fb2e71fee276b9a2bce5ae02e5148e7f8ade87d1398_prof);

        
        $__internal_553e82353de2b3fb22de1e99a94a8330b3ad7c1e38ac3bafbd5460f373e0ea72->leave($__internal_553e82353de2b3fb22de1e99a94a8330b3ad7c1e38ac3bafbd5460f373e0ea72_prof);

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
