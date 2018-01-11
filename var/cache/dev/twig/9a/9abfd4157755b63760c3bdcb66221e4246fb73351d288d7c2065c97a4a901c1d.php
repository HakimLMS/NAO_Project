<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_981f165144c6d95f04a85bcffc48d074d392be93360b033429b843de7d6de2b8 extends Twig_Template
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
        $__internal_4503036f0368575584aef1fdc8eb1380544da6bc28ede0a628c76619ec2d3970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4503036f0368575584aef1fdc8eb1380544da6bc28ede0a628c76619ec2d3970->enter($__internal_4503036f0368575584aef1fdc8eb1380544da6bc28ede0a628c76619ec2d3970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e70a542bc5f0b4247c6f546bd8bd4d647cb383bdbf68022f8d2b42f3ef231f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70a542bc5f0b4247c6f546bd8bd4d647cb383bdbf68022f8d2b42f3ef231f70->enter($__internal_e70a542bc5f0b4247c6f546bd8bd4d647cb383bdbf68022f8d2b42f3ef231f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4503036f0368575584aef1fdc8eb1380544da6bc28ede0a628c76619ec2d3970->leave($__internal_4503036f0368575584aef1fdc8eb1380544da6bc28ede0a628c76619ec2d3970_prof);

        
        $__internal_e70a542bc5f0b4247c6f546bd8bd4d647cb383bdbf68022f8d2b42f3ef231f70->leave($__internal_e70a542bc5f0b4247c6f546bd8bd4d647cb383bdbf68022f8d2b42f3ef231f70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
