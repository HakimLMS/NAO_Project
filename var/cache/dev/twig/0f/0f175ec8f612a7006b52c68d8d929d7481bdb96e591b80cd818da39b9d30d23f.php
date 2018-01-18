<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6af44899a3189585123642642421d3a4caff8b7cd4a489f6a40cfc67a1bf39a1 extends Twig_Template
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
        $__internal_498d73105a495f321a015125287ab7616793166707c1a3f2da56602c4e161d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498d73105a495f321a015125287ab7616793166707c1a3f2da56602c4e161d58->enter($__internal_498d73105a495f321a015125287ab7616793166707c1a3f2da56602c4e161d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_daa9901ead3ce0794db6a45689048e96eb314bfd3134e02311c8edc999c119b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa9901ead3ce0794db6a45689048e96eb314bfd3134e02311c8edc999c119b5->enter($__internal_daa9901ead3ce0794db6a45689048e96eb314bfd3134e02311c8edc999c119b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_498d73105a495f321a015125287ab7616793166707c1a3f2da56602c4e161d58->leave($__internal_498d73105a495f321a015125287ab7616793166707c1a3f2da56602c4e161d58_prof);

        
        $__internal_daa9901ead3ce0794db6a45689048e96eb314bfd3134e02311c8edc999c119b5->leave($__internal_daa9901ead3ce0794db6a45689048e96eb314bfd3134e02311c8edc999c119b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
