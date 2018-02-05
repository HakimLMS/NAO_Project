<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_338d7438fbe6d216da0f36db32917a389c7439366ec37ca5a78808ec676ddf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338d7438fbe6d216da0f36db32917a389c7439366ec37ca5a78808ec676ddf7b->enter($__internal_338d7438fbe6d216da0f36db32917a389c7439366ec37ca5a78808ec676ddf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_dfce89ae36ec7f35e6170d584b80dd6ee644e49958b4b6f2c3fc81a7812d34c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfce89ae36ec7f35e6170d584b80dd6ee644e49958b4b6f2c3fc81a7812d34c6->enter($__internal_dfce89ae36ec7f35e6170d584b80dd6ee644e49958b4b6f2c3fc81a7812d34c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_338d7438fbe6d216da0f36db32917a389c7439366ec37ca5a78808ec676ddf7b->leave($__internal_338d7438fbe6d216da0f36db32917a389c7439366ec37ca5a78808ec676ddf7b_prof);

        
        $__internal_dfce89ae36ec7f35e6170d584b80dd6ee644e49958b4b6f2c3fc81a7812d34c6->leave($__internal_dfce89ae36ec7f35e6170d584b80dd6ee644e49958b4b6f2c3fc81a7812d34c6_prof);

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
