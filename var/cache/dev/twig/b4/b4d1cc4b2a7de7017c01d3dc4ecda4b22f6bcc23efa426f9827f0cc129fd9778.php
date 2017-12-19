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
        $__internal_59c0572c4e72bf3e7414fbdbe8cb061cf2d91fbfaa05c083f40cf69a8bd5baa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c0572c4e72bf3e7414fbdbe8cb061cf2d91fbfaa05c083f40cf69a8bd5baa1->enter($__internal_59c0572c4e72bf3e7414fbdbe8cb061cf2d91fbfaa05c083f40cf69a8bd5baa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_efa6f1402bd3c44a77f898795ef0e908956117f8afda20eed99a313c18a59882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa6f1402bd3c44a77f898795ef0e908956117f8afda20eed99a313c18a59882->enter($__internal_efa6f1402bd3c44a77f898795ef0e908956117f8afda20eed99a313c18a59882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_59c0572c4e72bf3e7414fbdbe8cb061cf2d91fbfaa05c083f40cf69a8bd5baa1->leave($__internal_59c0572c4e72bf3e7414fbdbe8cb061cf2d91fbfaa05c083f40cf69a8bd5baa1_prof);

        
        $__internal_efa6f1402bd3c44a77f898795ef0e908956117f8afda20eed99a313c18a59882->leave($__internal_efa6f1402bd3c44a77f898795ef0e908956117f8afda20eed99a313c18a59882_prof);

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
