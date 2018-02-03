<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea82829497568c692d3504e62b7d3a21ce773202c79e898f0d826c70f2df997a extends Twig_Template
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
        $__internal_e8d350c0fc00fb7f1209cc0f2700819ed6ac8ede4138acb6cca03774562af752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d350c0fc00fb7f1209cc0f2700819ed6ac8ede4138acb6cca03774562af752->enter($__internal_e8d350c0fc00fb7f1209cc0f2700819ed6ac8ede4138acb6cca03774562af752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9e34f5d34754a3042a31a439d647fe13f43b3805d4fd1a0244ec20381f8946c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e34f5d34754a3042a31a439d647fe13f43b3805d4fd1a0244ec20381f8946c2->enter($__internal_9e34f5d34754a3042a31a439d647fe13f43b3805d4fd1a0244ec20381f8946c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e8d350c0fc00fb7f1209cc0f2700819ed6ac8ede4138acb6cca03774562af752->leave($__internal_e8d350c0fc00fb7f1209cc0f2700819ed6ac8ede4138acb6cca03774562af752_prof);

        
        $__internal_9e34f5d34754a3042a31a439d647fe13f43b3805d4fd1a0244ec20381f8946c2->leave($__internal_9e34f5d34754a3042a31a439d647fe13f43b3805d4fd1a0244ec20381f8946c2_prof);

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
