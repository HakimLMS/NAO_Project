<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_03542dd852a14eeac2a98c532413aa3aacb127b004014dd4869b3022d1959e0d extends Twig_Template
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
        $__internal_82c9cc2ad333446b2d095839d5df375e8333b71b6c43c5329eb1a21bbaec9a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c9cc2ad333446b2d095839d5df375e8333b71b6c43c5329eb1a21bbaec9a1c->enter($__internal_82c9cc2ad333446b2d095839d5df375e8333b71b6c43c5329eb1a21bbaec9a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d7a897e3cd0c35b95e4b95954ac84012a230497369bcaee28849de4d124f109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a897e3cd0c35b95e4b95954ac84012a230497369bcaee28849de4d124f109c->enter($__internal_d7a897e3cd0c35b95e4b95954ac84012a230497369bcaee28849de4d124f109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_82c9cc2ad333446b2d095839d5df375e8333b71b6c43c5329eb1a21bbaec9a1c->leave($__internal_82c9cc2ad333446b2d095839d5df375e8333b71b6c43c5329eb1a21bbaec9a1c_prof);

        
        $__internal_d7a897e3cd0c35b95e4b95954ac84012a230497369bcaee28849de4d124f109c->leave($__internal_d7a897e3cd0c35b95e4b95954ac84012a230497369bcaee28849de4d124f109c_prof);

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
