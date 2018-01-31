<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_ce1c001172d158b16e8969c76dae888d2a8e41c86dc128861c1a538d4c06c75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1c001172d158b16e8969c76dae888d2a8e41c86dc128861c1a538d4c06c75f->enter($__internal_ce1c001172d158b16e8969c76dae888d2a8e41c86dc128861c1a538d4c06c75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8dadcaeaaee4c18fe4e7cc17e62cc978f9c8d30a1bb953dc7fbcb84f73ad768f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dadcaeaaee4c18fe4e7cc17e62cc978f9c8d30a1bb953dc7fbcb84f73ad768f->enter($__internal_8dadcaeaaee4c18fe4e7cc17e62cc978f9c8d30a1bb953dc7fbcb84f73ad768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ce1c001172d158b16e8969c76dae888d2a8e41c86dc128861c1a538d4c06c75f->leave($__internal_ce1c001172d158b16e8969c76dae888d2a8e41c86dc128861c1a538d4c06c75f_prof);

        
        $__internal_8dadcaeaaee4c18fe4e7cc17e62cc978f9c8d30a1bb953dc7fbcb84f73ad768f->leave($__internal_8dadcaeaaee4c18fe4e7cc17e62cc978f9c8d30a1bb953dc7fbcb84f73ad768f_prof);

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
