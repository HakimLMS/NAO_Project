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
        $__internal_a9ceb6a234e118056c3005668237fad86bd214daf8bf100223852c5eae401c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ceb6a234e118056c3005668237fad86bd214daf8bf100223852c5eae401c69->enter($__internal_a9ceb6a234e118056c3005668237fad86bd214daf8bf100223852c5eae401c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_294267aa01d0dab8e7801c2568b89ef666755179946870e13137a3d62736af75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294267aa01d0dab8e7801c2568b89ef666755179946870e13137a3d62736af75->enter($__internal_294267aa01d0dab8e7801c2568b89ef666755179946870e13137a3d62736af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a9ceb6a234e118056c3005668237fad86bd214daf8bf100223852c5eae401c69->leave($__internal_a9ceb6a234e118056c3005668237fad86bd214daf8bf100223852c5eae401c69_prof);

        
        $__internal_294267aa01d0dab8e7801c2568b89ef666755179946870e13137a3d62736af75->leave($__internal_294267aa01d0dab8e7801c2568b89ef666755179946870e13137a3d62736af75_prof);

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
