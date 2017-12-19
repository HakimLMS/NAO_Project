<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_3e82ef3873c0c5ce77eec7b77c36e5ce7490821b433e523cd50b0b3b743808ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e82ef3873c0c5ce77eec7b77c36e5ce7490821b433e523cd50b0b3b743808ad->enter($__internal_3e82ef3873c0c5ce77eec7b77c36e5ce7490821b433e523cd50b0b3b743808ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_187c484d52a628013e215cf79b4f6934a8d2476cbf9408476653669796cdadbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187c484d52a628013e215cf79b4f6934a8d2476cbf9408476653669796cdadbd->enter($__internal_187c484d52a628013e215cf79b4f6934a8d2476cbf9408476653669796cdadbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3e82ef3873c0c5ce77eec7b77c36e5ce7490821b433e523cd50b0b3b743808ad->leave($__internal_3e82ef3873c0c5ce77eec7b77c36e5ce7490821b433e523cd50b0b3b743808ad_prof);

        
        $__internal_187c484d52a628013e215cf79b4f6934a8d2476cbf9408476653669796cdadbd->leave($__internal_187c484d52a628013e215cf79b4f6934a8d2476cbf9408476653669796cdadbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
