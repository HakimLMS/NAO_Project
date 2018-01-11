<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e6f6d26453be800602cf8b4c1fb154d33c4d877ecdde439de867574d9c2b2b57 extends Twig_Template
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
        $__internal_c42b780d1fab0c6bd0d12a73f9840cdf1af2cd571e3e1d0f51289e17d0045dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42b780d1fab0c6bd0d12a73f9840cdf1af2cd571e3e1d0f51289e17d0045dcb->enter($__internal_c42b780d1fab0c6bd0d12a73f9840cdf1af2cd571e3e1d0f51289e17d0045dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9378e13b0c193afb0cd77d677cf1a5636fe5998ec0ed3c2bc459212f8bf9acbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9378e13b0c193afb0cd77d677cf1a5636fe5998ec0ed3c2bc459212f8bf9acbb->enter($__internal_9378e13b0c193afb0cd77d677cf1a5636fe5998ec0ed3c2bc459212f8bf9acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c42b780d1fab0c6bd0d12a73f9840cdf1af2cd571e3e1d0f51289e17d0045dcb->leave($__internal_c42b780d1fab0c6bd0d12a73f9840cdf1af2cd571e3e1d0f51289e17d0045dcb_prof);

        
        $__internal_9378e13b0c193afb0cd77d677cf1a5636fe5998ec0ed3c2bc459212f8bf9acbb->leave($__internal_9378e13b0c193afb0cd77d677cf1a5636fe5998ec0ed3c2bc459212f8bf9acbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
