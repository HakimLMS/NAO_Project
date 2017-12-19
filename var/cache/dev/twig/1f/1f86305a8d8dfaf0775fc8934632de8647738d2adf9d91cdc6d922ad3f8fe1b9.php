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
        $__internal_ae9671bb74170a2c2b73cebcfda25c39a61ff374183ca7663615d68a38d49f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9671bb74170a2c2b73cebcfda25c39a61ff374183ca7663615d68a38d49f82->enter($__internal_ae9671bb74170a2c2b73cebcfda25c39a61ff374183ca7663615d68a38d49f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f664a9205cc392cf226967ca7adfab1318d5ea939ba73b2c99a07af43b405725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f664a9205cc392cf226967ca7adfab1318d5ea939ba73b2c99a07af43b405725->enter($__internal_f664a9205cc392cf226967ca7adfab1318d5ea939ba73b2c99a07af43b405725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ae9671bb74170a2c2b73cebcfda25c39a61ff374183ca7663615d68a38d49f82->leave($__internal_ae9671bb74170a2c2b73cebcfda25c39a61ff374183ca7663615d68a38d49f82_prof);

        
        $__internal_f664a9205cc392cf226967ca7adfab1318d5ea939ba73b2c99a07af43b405725->leave($__internal_f664a9205cc392cf226967ca7adfab1318d5ea939ba73b2c99a07af43b405725_prof);

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
