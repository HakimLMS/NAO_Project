<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_b0920fa6bff81aee4b577aea73654c1ac230d58bdf62766096aa0a7e43328350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0920fa6bff81aee4b577aea73654c1ac230d58bdf62766096aa0a7e43328350->enter($__internal_b0920fa6bff81aee4b577aea73654c1ac230d58bdf62766096aa0a7e43328350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_11f8cfdc2fafd2a10d0abb3ecb45cec1807add08624f1f7a31a31c494b93e8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f8cfdc2fafd2a10d0abb3ecb45cec1807add08624f1f7a31a31c494b93e8fd->enter($__internal_11f8cfdc2fafd2a10d0abb3ecb45cec1807add08624f1f7a31a31c494b93e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b0920fa6bff81aee4b577aea73654c1ac230d58bdf62766096aa0a7e43328350->leave($__internal_b0920fa6bff81aee4b577aea73654c1ac230d58bdf62766096aa0a7e43328350_prof);

        
        $__internal_11f8cfdc2fafd2a10d0abb3ecb45cec1807add08624f1f7a31a31c494b93e8fd->leave($__internal_11f8cfdc2fafd2a10d0abb3ecb45cec1807add08624f1f7a31a31c494b93e8fd_prof);

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
