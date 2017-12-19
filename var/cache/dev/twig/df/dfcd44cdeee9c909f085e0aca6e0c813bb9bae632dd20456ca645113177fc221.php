<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fa859260f8f33e61847520b60dbe5a544f725e3ceaccc48ae3d7b73b367b318a extends Twig_Template
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
        $__internal_1d38a62e32e9b8aaaf4e58d8943c63df842781ca399dda3be2a7c472f1989c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d38a62e32e9b8aaaf4e58d8943c63df842781ca399dda3be2a7c472f1989c5f->enter($__internal_1d38a62e32e9b8aaaf4e58d8943c63df842781ca399dda3be2a7c472f1989c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_16581bf1a18dcc102756620c574dbbee2ee5e19ba69f455f38de90c43a3e7971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16581bf1a18dcc102756620c574dbbee2ee5e19ba69f455f38de90c43a3e7971->enter($__internal_16581bf1a18dcc102756620c574dbbee2ee5e19ba69f455f38de90c43a3e7971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1d38a62e32e9b8aaaf4e58d8943c63df842781ca399dda3be2a7c472f1989c5f->leave($__internal_1d38a62e32e9b8aaaf4e58d8943c63df842781ca399dda3be2a7c472f1989c5f_prof);

        
        $__internal_16581bf1a18dcc102756620c574dbbee2ee5e19ba69f455f38de90c43a3e7971->leave($__internal_16581bf1a18dcc102756620c574dbbee2ee5e19ba69f455f38de90c43a3e7971_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
