<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4d234813f8a7f08eeee6b2e6f9516b605c9eeabf04cc74049326d5e11a4a37cb extends Twig_Template
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
        $__internal_87a010cd4dcba9570422e35b4197c5c7e174ee812c284261b1244eb3d1036177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a010cd4dcba9570422e35b4197c5c7e174ee812c284261b1244eb3d1036177->enter($__internal_87a010cd4dcba9570422e35b4197c5c7e174ee812c284261b1244eb3d1036177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d38616d7a7a24278af6fdbdc3ae2a56a652ad9d114375c7bef939daddbc457ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38616d7a7a24278af6fdbdc3ae2a56a652ad9d114375c7bef939daddbc457ae->enter($__internal_d38616d7a7a24278af6fdbdc3ae2a56a652ad9d114375c7bef939daddbc457ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_87a010cd4dcba9570422e35b4197c5c7e174ee812c284261b1244eb3d1036177->leave($__internal_87a010cd4dcba9570422e35b4197c5c7e174ee812c284261b1244eb3d1036177_prof);

        
        $__internal_d38616d7a7a24278af6fdbdc3ae2a56a652ad9d114375c7bef939daddbc457ae->leave($__internal_d38616d7a7a24278af6fdbdc3ae2a56a652ad9d114375c7bef939daddbc457ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
