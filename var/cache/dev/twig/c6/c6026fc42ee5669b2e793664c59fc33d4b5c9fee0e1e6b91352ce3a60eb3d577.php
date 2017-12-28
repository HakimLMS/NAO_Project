<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_b7a6eb0fb40e5a329fcc328a478fcbb46cbfae10d1f640b0503c47a66b9e1c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a6eb0fb40e5a329fcc328a478fcbb46cbfae10d1f640b0503c47a66b9e1c7c->enter($__internal_b7a6eb0fb40e5a329fcc328a478fcbb46cbfae10d1f640b0503c47a66b9e1c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6d25424c19278e4a93335d145d06d71b9b233b93c0746f135a080db3fdd89d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d25424c19278e4a93335d145d06d71b9b233b93c0746f135a080db3fdd89d88->enter($__internal_6d25424c19278e4a93335d145d06d71b9b233b93c0746f135a080db3fdd89d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b7a6eb0fb40e5a329fcc328a478fcbb46cbfae10d1f640b0503c47a66b9e1c7c->leave($__internal_b7a6eb0fb40e5a329fcc328a478fcbb46cbfae10d1f640b0503c47a66b9e1c7c_prof);

        
        $__internal_6d25424c19278e4a93335d145d06d71b9b233b93c0746f135a080db3fdd89d88->leave($__internal_6d25424c19278e4a93335d145d06d71b9b233b93c0746f135a080db3fdd89d88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
