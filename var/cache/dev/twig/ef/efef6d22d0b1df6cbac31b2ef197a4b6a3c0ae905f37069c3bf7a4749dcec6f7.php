<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9fd3c39394b87ea2b209f9460120e7a33707c7bb4e262d46ac0ac45d61c717af extends Twig_Template
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
        $__internal_907d79e630e59b345f235fbd56bf1ee9f34cf15e729e4eef55b7a2cf706ec8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907d79e630e59b345f235fbd56bf1ee9f34cf15e729e4eef55b7a2cf706ec8b4->enter($__internal_907d79e630e59b345f235fbd56bf1ee9f34cf15e729e4eef55b7a2cf706ec8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b1adc0b04e900ed5962e6b187ad700b9b47674ca818ab7048d167f9396e7a42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1adc0b04e900ed5962e6b187ad700b9b47674ca818ab7048d167f9396e7a42a->enter($__internal_b1adc0b04e900ed5962e6b187ad700b9b47674ca818ab7048d167f9396e7a42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_907d79e630e59b345f235fbd56bf1ee9f34cf15e729e4eef55b7a2cf706ec8b4->leave($__internal_907d79e630e59b345f235fbd56bf1ee9f34cf15e729e4eef55b7a2cf706ec8b4_prof);

        
        $__internal_b1adc0b04e900ed5962e6b187ad700b9b47674ca818ab7048d167f9396e7a42a->leave($__internal_b1adc0b04e900ed5962e6b187ad700b9b47674ca818ab7048d167f9396e7a42a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
