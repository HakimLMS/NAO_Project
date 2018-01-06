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
        $__internal_90a48098f2881e2d337b2f317a04cb4d77cbd2dba654d4231a2008ee06fc7823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a48098f2881e2d337b2f317a04cb4d77cbd2dba654d4231a2008ee06fc7823->enter($__internal_90a48098f2881e2d337b2f317a04cb4d77cbd2dba654d4231a2008ee06fc7823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4e1901469f53fb1549b88bfe0cafb2cc454a3004a81954fc4540090eb37f47cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1901469f53fb1549b88bfe0cafb2cc454a3004a81954fc4540090eb37f47cc->enter($__internal_4e1901469f53fb1549b88bfe0cafb2cc454a3004a81954fc4540090eb37f47cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_90a48098f2881e2d337b2f317a04cb4d77cbd2dba654d4231a2008ee06fc7823->leave($__internal_90a48098f2881e2d337b2f317a04cb4d77cbd2dba654d4231a2008ee06fc7823_prof);

        
        $__internal_4e1901469f53fb1549b88bfe0cafb2cc454a3004a81954fc4540090eb37f47cc->leave($__internal_4e1901469f53fb1549b88bfe0cafb2cc454a3004a81954fc4540090eb37f47cc_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
