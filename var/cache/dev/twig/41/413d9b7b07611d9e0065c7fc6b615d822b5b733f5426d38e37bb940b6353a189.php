<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_57a577e1f93a4c12f13d3b1d94d4ef3fb1f5c3dc5c5bc2e9091e277e3f565b66 extends Twig_Template
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
        $__internal_43d0d8ec93aafde39c6ff264daab3916d40c90f7052c5c05443042942cd0b8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d0d8ec93aafde39c6ff264daab3916d40c90f7052c5c05443042942cd0b8c2->enter($__internal_43d0d8ec93aafde39c6ff264daab3916d40c90f7052c5c05443042942cd0b8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_712b348bdae4359f3e69264294578a51f453505de5a353cecc85c87e4b4c87ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712b348bdae4359f3e69264294578a51f453505de5a353cecc85c87e4b4c87ec->enter($__internal_712b348bdae4359f3e69264294578a51f453505de5a353cecc85c87e4b4c87ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_43d0d8ec93aafde39c6ff264daab3916d40c90f7052c5c05443042942cd0b8c2->leave($__internal_43d0d8ec93aafde39c6ff264daab3916d40c90f7052c5c05443042942cd0b8c2_prof);

        
        $__internal_712b348bdae4359f3e69264294578a51f453505de5a353cecc85c87e4b4c87ec->leave($__internal_712b348bdae4359f3e69264294578a51f453505de5a353cecc85c87e4b4c87ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
