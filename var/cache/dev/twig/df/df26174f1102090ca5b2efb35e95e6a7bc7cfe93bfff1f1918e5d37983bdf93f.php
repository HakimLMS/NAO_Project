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
        $__internal_e8e68e6c016bbd4688498cfc0685ece37e4cfaf69f98516dbc44e55a4c07a34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e68e6c016bbd4688498cfc0685ece37e4cfaf69f98516dbc44e55a4c07a34c->enter($__internal_e8e68e6c016bbd4688498cfc0685ece37e4cfaf69f98516dbc44e55a4c07a34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6a24b1210b51e7b47f672d39e952aa9699eb09f140a4c25d58f6141f689e774d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a24b1210b51e7b47f672d39e952aa9699eb09f140a4c25d58f6141f689e774d->enter($__internal_6a24b1210b51e7b47f672d39e952aa9699eb09f140a4c25d58f6141f689e774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e8e68e6c016bbd4688498cfc0685ece37e4cfaf69f98516dbc44e55a4c07a34c->leave($__internal_e8e68e6c016bbd4688498cfc0685ece37e4cfaf69f98516dbc44e55a4c07a34c_prof);

        
        $__internal_6a24b1210b51e7b47f672d39e952aa9699eb09f140a4c25d58f6141f689e774d->leave($__internal_6a24b1210b51e7b47f672d39e952aa9699eb09f140a4c25d58f6141f689e774d_prof);

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
