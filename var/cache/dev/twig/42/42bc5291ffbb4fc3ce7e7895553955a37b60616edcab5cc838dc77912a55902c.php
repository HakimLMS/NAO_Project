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
        $__internal_35d91d432e854590d256c85046200a9fe3bdb14a3a7eed51be0094420def4d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d91d432e854590d256c85046200a9fe3bdb14a3a7eed51be0094420def4d78->enter($__internal_35d91d432e854590d256c85046200a9fe3bdb14a3a7eed51be0094420def4d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e9e382ad98cf497ea0d2e039be2d0a73c17f8710a5be5d86df79b74e3ff59eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e382ad98cf497ea0d2e039be2d0a73c17f8710a5be5d86df79b74e3ff59eac->enter($__internal_e9e382ad98cf497ea0d2e039be2d0a73c17f8710a5be5d86df79b74e3ff59eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_35d91d432e854590d256c85046200a9fe3bdb14a3a7eed51be0094420def4d78->leave($__internal_35d91d432e854590d256c85046200a9fe3bdb14a3a7eed51be0094420def4d78_prof);

        
        $__internal_e9e382ad98cf497ea0d2e039be2d0a73c17f8710a5be5d86df79b74e3ff59eac->leave($__internal_e9e382ad98cf497ea0d2e039be2d0a73c17f8710a5be5d86df79b74e3ff59eac_prof);

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
