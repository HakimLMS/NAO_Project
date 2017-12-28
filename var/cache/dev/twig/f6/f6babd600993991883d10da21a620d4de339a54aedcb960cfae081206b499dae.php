<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_73a0cab12b70b9c06ff7be7a6bd319772a39b28fd59a29532e966fc83b2cc1cb extends Twig_Template
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
        $__internal_1256d913775320b40baefaa36af67d1acd6db2e6e6971fb55a1c3ef79db88064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1256d913775320b40baefaa36af67d1acd6db2e6e6971fb55a1c3ef79db88064->enter($__internal_1256d913775320b40baefaa36af67d1acd6db2e6e6971fb55a1c3ef79db88064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e64fdf1a06cd0e578e61b44606260bb28f604a2e1101dba1f08e5fa5755e5283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64fdf1a06cd0e578e61b44606260bb28f604a2e1101dba1f08e5fa5755e5283->enter($__internal_e64fdf1a06cd0e578e61b44606260bb28f604a2e1101dba1f08e5fa5755e5283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1256d913775320b40baefaa36af67d1acd6db2e6e6971fb55a1c3ef79db88064->leave($__internal_1256d913775320b40baefaa36af67d1acd6db2e6e6971fb55a1c3ef79db88064_prof);

        
        $__internal_e64fdf1a06cd0e578e61b44606260bb28f604a2e1101dba1f08e5fa5755e5283->leave($__internal_e64fdf1a06cd0e578e61b44606260bb28f604a2e1101dba1f08e5fa5755e5283_prof);

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
