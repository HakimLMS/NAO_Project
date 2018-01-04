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
        $__internal_89c1da06224696ae5fb4a9e061fc36e8c2d864c024de497d2be1c467780c4235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c1da06224696ae5fb4a9e061fc36e8c2d864c024de497d2be1c467780c4235->enter($__internal_89c1da06224696ae5fb4a9e061fc36e8c2d864c024de497d2be1c467780c4235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9446d9b9671cdd8f025404e6eabcb3768790c44f551fa2c38289a70b3eb31f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9446d9b9671cdd8f025404e6eabcb3768790c44f551fa2c38289a70b3eb31f34->enter($__internal_9446d9b9671cdd8f025404e6eabcb3768790c44f551fa2c38289a70b3eb31f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_89c1da06224696ae5fb4a9e061fc36e8c2d864c024de497d2be1c467780c4235->leave($__internal_89c1da06224696ae5fb4a9e061fc36e8c2d864c024de497d2be1c467780c4235_prof);

        
        $__internal_9446d9b9671cdd8f025404e6eabcb3768790c44f551fa2c38289a70b3eb31f34->leave($__internal_9446d9b9671cdd8f025404e6eabcb3768790c44f551fa2c38289a70b3eb31f34_prof);

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
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
