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
        $__internal_de984c2c11db7cfe319fedcbce85171e4d3a4f6e21cb29a058e1ee04a774b494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de984c2c11db7cfe319fedcbce85171e4d3a4f6e21cb29a058e1ee04a774b494->enter($__internal_de984c2c11db7cfe319fedcbce85171e4d3a4f6e21cb29a058e1ee04a774b494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1385f9afd567571868740bade951402e77e8df2545cce3e15277abb3320fafac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1385f9afd567571868740bade951402e77e8df2545cce3e15277abb3320fafac->enter($__internal_1385f9afd567571868740bade951402e77e8df2545cce3e15277abb3320fafac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_de984c2c11db7cfe319fedcbce85171e4d3a4f6e21cb29a058e1ee04a774b494->leave($__internal_de984c2c11db7cfe319fedcbce85171e4d3a4f6e21cb29a058e1ee04a774b494_prof);

        
        $__internal_1385f9afd567571868740bade951402e77e8df2545cce3e15277abb3320fafac->leave($__internal_1385f9afd567571868740bade951402e77e8df2545cce3e15277abb3320fafac_prof);

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
