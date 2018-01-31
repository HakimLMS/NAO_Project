<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9befff9c36ecb304a16f585a30c19f1a4d025f7481da052bc428276aea79cb57 extends Twig_Template
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
        $__internal_ea6176a5d07b082acd68fd51b9d4f9d49af85f8f71356008ce630e08c2213fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6176a5d07b082acd68fd51b9d4f9d49af85f8f71356008ce630e08c2213fe0->enter($__internal_ea6176a5d07b082acd68fd51b9d4f9d49af85f8f71356008ce630e08c2213fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4bd9fddd7ceefa24cd5858f511c2b942aff085b3700ce70811c564500de5bb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9fddd7ceefa24cd5858f511c2b942aff085b3700ce70811c564500de5bb7e->enter($__internal_4bd9fddd7ceefa24cd5858f511c2b942aff085b3700ce70811c564500de5bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ea6176a5d07b082acd68fd51b9d4f9d49af85f8f71356008ce630e08c2213fe0->leave($__internal_ea6176a5d07b082acd68fd51b9d4f9d49af85f8f71356008ce630e08c2213fe0_prof);

        
        $__internal_4bd9fddd7ceefa24cd5858f511c2b942aff085b3700ce70811c564500de5bb7e->leave($__internal_4bd9fddd7ceefa24cd5858f511c2b942aff085b3700ce70811c564500de5bb7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
