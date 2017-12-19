<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3741b9de6cd1e4bc7140b3204a4b0d242ad6843666c9367c068344487fc3574a extends Twig_Template
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
        $__internal_9b2cc83ea2f92010ad4f685420ea73a2007dcb63868934a0d1ccd94c3f516139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2cc83ea2f92010ad4f685420ea73a2007dcb63868934a0d1ccd94c3f516139->enter($__internal_9b2cc83ea2f92010ad4f685420ea73a2007dcb63868934a0d1ccd94c3f516139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_4bf127e2d292dfbbb7cd0d593161b4a361d9df7c93c34661c56b8b2346b17258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf127e2d292dfbbb7cd0d593161b4a361d9df7c93c34661c56b8b2346b17258->enter($__internal_4bf127e2d292dfbbb7cd0d593161b4a361d9df7c93c34661c56b8b2346b17258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9b2cc83ea2f92010ad4f685420ea73a2007dcb63868934a0d1ccd94c3f516139->leave($__internal_9b2cc83ea2f92010ad4f685420ea73a2007dcb63868934a0d1ccd94c3f516139_prof);

        
        $__internal_4bf127e2d292dfbbb7cd0d593161b4a361d9df7c93c34661c56b8b2346b17258->leave($__internal_4bf127e2d292dfbbb7cd0d593161b4a361d9df7c93c34661c56b8b2346b17258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
