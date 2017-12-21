<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_3e7b1cd6bb3bb8dca877ed90937ad65c28b093ec0b5eb4a20e8cd25141e45429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7b1cd6bb3bb8dca877ed90937ad65c28b093ec0b5eb4a20e8cd25141e45429->enter($__internal_3e7b1cd6bb3bb8dca877ed90937ad65c28b093ec0b5eb4a20e8cd25141e45429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_56feabaf5a230924e9138335aa3188e169a183a84057fff7fbc9b0f95d8c076d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56feabaf5a230924e9138335aa3188e169a183a84057fff7fbc9b0f95d8c076d->enter($__internal_56feabaf5a230924e9138335aa3188e169a183a84057fff7fbc9b0f95d8c076d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3e7b1cd6bb3bb8dca877ed90937ad65c28b093ec0b5eb4a20e8cd25141e45429->leave($__internal_3e7b1cd6bb3bb8dca877ed90937ad65c28b093ec0b5eb4a20e8cd25141e45429_prof);

        
        $__internal_56feabaf5a230924e9138335aa3188e169a183a84057fff7fbc9b0f95d8c076d->leave($__internal_56feabaf5a230924e9138335aa3188e169a183a84057fff7fbc9b0f95d8c076d_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
