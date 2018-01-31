<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b6f270b1cc8b105b78e6465854c745e2cd82980dfa3f9d8b750c18170fd43c7 extends Twig_Template
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
        $__internal_a6d27457e9d73b77988b1640af5e85c00b8eb41ceb0e0f91ff892efb436dddc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d27457e9d73b77988b1640af5e85c00b8eb41ceb0e0f91ff892efb436dddc9->enter($__internal_a6d27457e9d73b77988b1640af5e85c00b8eb41ceb0e0f91ff892efb436dddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fecc23c6f0cd11e568fa393b5f8f8208fed2948aaf77bae96ba42a04479832e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecc23c6f0cd11e568fa393b5f8f8208fed2948aaf77bae96ba42a04479832e3->enter($__internal_fecc23c6f0cd11e568fa393b5f8f8208fed2948aaf77bae96ba42a04479832e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a6d27457e9d73b77988b1640af5e85c00b8eb41ceb0e0f91ff892efb436dddc9->leave($__internal_a6d27457e9d73b77988b1640af5e85c00b8eb41ceb0e0f91ff892efb436dddc9_prof);

        
        $__internal_fecc23c6f0cd11e568fa393b5f8f8208fed2948aaf77bae96ba42a04479832e3->leave($__internal_fecc23c6f0cd11e568fa393b5f8f8208fed2948aaf77bae96ba42a04479832e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
