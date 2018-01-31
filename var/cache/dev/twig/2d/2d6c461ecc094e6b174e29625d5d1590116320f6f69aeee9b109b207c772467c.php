<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_75fa465d4890385095c7a13e9218557ab084e619c3bd9681658371e4b229de04 extends Twig_Template
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
        $__internal_62e748ad1b43c20a22515e1c6354d15f02d7cf14c2c4867d905e6675b98b97bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e748ad1b43c20a22515e1c6354d15f02d7cf14c2c4867d905e6675b98b97bf->enter($__internal_62e748ad1b43c20a22515e1c6354d15f02d7cf14c2c4867d905e6675b98b97bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_51514e12552da063480e16ef8ec059c6b3abccf59e7fd7a93817e7f00e005a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51514e12552da063480e16ef8ec059c6b3abccf59e7fd7a93817e7f00e005a88->enter($__internal_51514e12552da063480e16ef8ec059c6b3abccf59e7fd7a93817e7f00e005a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_62e748ad1b43c20a22515e1c6354d15f02d7cf14c2c4867d905e6675b98b97bf->leave($__internal_62e748ad1b43c20a22515e1c6354d15f02d7cf14c2c4867d905e6675b98b97bf_prof);

        
        $__internal_51514e12552da063480e16ef8ec059c6b3abccf59e7fd7a93817e7f00e005a88->leave($__internal_51514e12552da063480e16ef8ec059c6b3abccf59e7fd7a93817e7f00e005a88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
