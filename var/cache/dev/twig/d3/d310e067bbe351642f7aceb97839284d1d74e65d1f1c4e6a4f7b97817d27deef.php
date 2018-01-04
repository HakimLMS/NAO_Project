<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f2d58f29dfa6ef85aaa2d861b7edee9deff288dff07879fa21a5741247c6c804 extends Twig_Template
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
        $__internal_2de270c1392926ff25d6e3206bab6be5a493228ad2c6e851273df19fa0a63ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de270c1392926ff25d6e3206bab6be5a493228ad2c6e851273df19fa0a63ac3->enter($__internal_2de270c1392926ff25d6e3206bab6be5a493228ad2c6e851273df19fa0a63ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1a2ac35dfde1eb5ab65c060e1efa28462e7f15c45935b340cae2405e5b38fa7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2ac35dfde1eb5ab65c060e1efa28462e7f15c45935b340cae2405e5b38fa7d->enter($__internal_1a2ac35dfde1eb5ab65c060e1efa28462e7f15c45935b340cae2405e5b38fa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2de270c1392926ff25d6e3206bab6be5a493228ad2c6e851273df19fa0a63ac3->leave($__internal_2de270c1392926ff25d6e3206bab6be5a493228ad2c6e851273df19fa0a63ac3_prof);

        
        $__internal_1a2ac35dfde1eb5ab65c060e1efa28462e7f15c45935b340cae2405e5b38fa7d->leave($__internal_1a2ac35dfde1eb5ab65c060e1efa28462e7f15c45935b340cae2405e5b38fa7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
