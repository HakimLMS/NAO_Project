<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_515e5d846bd0dd07296b293269fa27a5e4b3c0d4887c3dab5d7424a485a560ef extends Twig_Template
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
        $__internal_2ece5a42d47cdb4e721dde5bcf3b0c5e696f03b229224f9c7793761e96d5410b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ece5a42d47cdb4e721dde5bcf3b0c5e696f03b229224f9c7793761e96d5410b->enter($__internal_2ece5a42d47cdb4e721dde5bcf3b0c5e696f03b229224f9c7793761e96d5410b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_acdb96a45f5e6f234c8b9d57c6e20026057c22e732968ada01ea7aa05f7f38db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdb96a45f5e6f234c8b9d57c6e20026057c22e732968ada01ea7aa05f7f38db->enter($__internal_acdb96a45f5e6f234c8b9d57c6e20026057c22e732968ada01ea7aa05f7f38db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2ece5a42d47cdb4e721dde5bcf3b0c5e696f03b229224f9c7793761e96d5410b->leave($__internal_2ece5a42d47cdb4e721dde5bcf3b0c5e696f03b229224f9c7793761e96d5410b_prof);

        
        $__internal_acdb96a45f5e6f234c8b9d57c6e20026057c22e732968ada01ea7aa05f7f38db->leave($__internal_acdb96a45f5e6f234c8b9d57c6e20026057c22e732968ada01ea7aa05f7f38db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
