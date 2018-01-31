<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a53a6a8110e8b5054f36424a464e5fb60c90a321b8b794fd23d407a405b82c1c extends Twig_Template
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
        $__internal_c8b42c77ccf465114200bf6eeb6284a6c4b454c0e4f8efa0462bc08d7fffce3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b42c77ccf465114200bf6eeb6284a6c4b454c0e4f8efa0462bc08d7fffce3b->enter($__internal_c8b42c77ccf465114200bf6eeb6284a6c4b454c0e4f8efa0462bc08d7fffce3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d5199bc6ae1c5fefa550edce434088e40479117a76a3c2682d23d885aca9fefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5199bc6ae1c5fefa550edce434088e40479117a76a3c2682d23d885aca9fefb->enter($__internal_d5199bc6ae1c5fefa550edce434088e40479117a76a3c2682d23d885aca9fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c8b42c77ccf465114200bf6eeb6284a6c4b454c0e4f8efa0462bc08d7fffce3b->leave($__internal_c8b42c77ccf465114200bf6eeb6284a6c4b454c0e4f8efa0462bc08d7fffce3b_prof);

        
        $__internal_d5199bc6ae1c5fefa550edce434088e40479117a76a3c2682d23d885aca9fefb->leave($__internal_d5199bc6ae1c5fefa550edce434088e40479117a76a3c2682d23d885aca9fefb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
