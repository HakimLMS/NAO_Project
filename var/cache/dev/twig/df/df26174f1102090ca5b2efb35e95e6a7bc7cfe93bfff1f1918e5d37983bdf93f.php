<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_8a99560299510bd7ccb2805d39646eef93378dff23efa2a0fd27eebd66b40be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a99560299510bd7ccb2805d39646eef93378dff23efa2a0fd27eebd66b40be6->enter($__internal_8a99560299510bd7ccb2805d39646eef93378dff23efa2a0fd27eebd66b40be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_aa0fcc48fcaf55a7ba89a7fa77a165de74cee3dabdff9cd1654f4c78dc8e687a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0fcc48fcaf55a7ba89a7fa77a165de74cee3dabdff9cd1654f4c78dc8e687a->enter($__internal_aa0fcc48fcaf55a7ba89a7fa77a165de74cee3dabdff9cd1654f4c78dc8e687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8a99560299510bd7ccb2805d39646eef93378dff23efa2a0fd27eebd66b40be6->leave($__internal_8a99560299510bd7ccb2805d39646eef93378dff23efa2a0fd27eebd66b40be6_prof);

        
        $__internal_aa0fcc48fcaf55a7ba89a7fa77a165de74cee3dabdff9cd1654f4c78dc8e687a->leave($__internal_aa0fcc48fcaf55a7ba89a7fa77a165de74cee3dabdff9cd1654f4c78dc8e687a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
