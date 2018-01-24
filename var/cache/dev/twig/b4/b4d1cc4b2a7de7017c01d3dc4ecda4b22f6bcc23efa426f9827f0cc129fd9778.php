<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fe9da6a346bfd605db31a21f20134cb92f2e57df31e5905ddb2bde0649c8bf1c extends Twig_Template
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
        $__internal_d97e83acc8da34985ab1c3b38ff33a77b5f49743fe3951c7540e22903173536e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97e83acc8da34985ab1c3b38ff33a77b5f49743fe3951c7540e22903173536e->enter($__internal_d97e83acc8da34985ab1c3b38ff33a77b5f49743fe3951c7540e22903173536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_70c6ec47e7ccec94449259a53cbc0866903428de77167bcf20324e9a3b8deebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c6ec47e7ccec94449259a53cbc0866903428de77167bcf20324e9a3b8deebe->enter($__internal_70c6ec47e7ccec94449259a53cbc0866903428de77167bcf20324e9a3b8deebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d97e83acc8da34985ab1c3b38ff33a77b5f49743fe3951c7540e22903173536e->leave($__internal_d97e83acc8da34985ab1c3b38ff33a77b5f49743fe3951c7540e22903173536e_prof);

        
        $__internal_70c6ec47e7ccec94449259a53cbc0866903428de77167bcf20324e9a3b8deebe->leave($__internal_70c6ec47e7ccec94449259a53cbc0866903428de77167bcf20324e9a3b8deebe_prof);

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
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
