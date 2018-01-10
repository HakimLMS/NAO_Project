<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_d9ae1c33036e1a43c247060b6fabb5bfe7729f807e3aa7a961e67bf5c8915572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ae1c33036e1a43c247060b6fabb5bfe7729f807e3aa7a961e67bf5c8915572->enter($__internal_d9ae1c33036e1a43c247060b6fabb5bfe7729f807e3aa7a961e67bf5c8915572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a560fb7f29d64f7a5e3c2ec8b7fae8fcf5d76fe62dc3429de62e459b0d53a3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a560fb7f29d64f7a5e3c2ec8b7fae8fcf5d76fe62dc3429de62e459b0d53a3ab->enter($__internal_a560fb7f29d64f7a5e3c2ec8b7fae8fcf5d76fe62dc3429de62e459b0d53a3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d9ae1c33036e1a43c247060b6fabb5bfe7729f807e3aa7a961e67bf5c8915572->leave($__internal_d9ae1c33036e1a43c247060b6fabb5bfe7729f807e3aa7a961e67bf5c8915572_prof);

        
        $__internal_a560fb7f29d64f7a5e3c2ec8b7fae8fcf5d76fe62dc3429de62e459b0d53a3ab->leave($__internal_a560fb7f29d64f7a5e3c2ec8b7fae8fcf5d76fe62dc3429de62e459b0d53a3ab_prof);

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
", "@Framework/Form/submit_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
