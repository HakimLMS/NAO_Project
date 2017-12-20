<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9927e15d5e96a2afdf9bf86a760475c67d0b70de9f3d2f5ec17794a1401e62c1 extends Twig_Template
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
        $__internal_7ac6dd1fc77be635b61381875e7a36257021c7d965cdd5b73e2dd039d1c808ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac6dd1fc77be635b61381875e7a36257021c7d965cdd5b73e2dd039d1c808ad->enter($__internal_7ac6dd1fc77be635b61381875e7a36257021c7d965cdd5b73e2dd039d1c808ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f198c9683962189c3107ca763fa281b05997b3aab4c3e707ad65bbd1eacecb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f198c9683962189c3107ca763fa281b05997b3aab4c3e707ad65bbd1eacecb55->enter($__internal_f198c9683962189c3107ca763fa281b05997b3aab4c3e707ad65bbd1eacecb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7ac6dd1fc77be635b61381875e7a36257021c7d965cdd5b73e2dd039d1c808ad->leave($__internal_7ac6dd1fc77be635b61381875e7a36257021c7d965cdd5b73e2dd039d1c808ad_prof);

        
        $__internal_f198c9683962189c3107ca763fa281b05997b3aab4c3e707ad65bbd1eacecb55->leave($__internal_f198c9683962189c3107ca763fa281b05997b3aab4c3e707ad65bbd1eacecb55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
