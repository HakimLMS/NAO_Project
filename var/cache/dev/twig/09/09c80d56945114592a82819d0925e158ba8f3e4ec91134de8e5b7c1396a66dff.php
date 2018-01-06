<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea82829497568c692d3504e62b7d3a21ce773202c79e898f0d826c70f2df997a extends Twig_Template
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
        $__internal_a36ebd224aed5522d5b0fd316b25d8ccc0af8dd01a9ed22af46ced2355a13838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36ebd224aed5522d5b0fd316b25d8ccc0af8dd01a9ed22af46ced2355a13838->enter($__internal_a36ebd224aed5522d5b0fd316b25d8ccc0af8dd01a9ed22af46ced2355a13838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ff8e517b3828671f5b0b3f103c36cefe7b18d1d0cc0c1be67fa9296817c9af0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8e517b3828671f5b0b3f103c36cefe7b18d1d0cc0c1be67fa9296817c9af0e->enter($__internal_ff8e517b3828671f5b0b3f103c36cefe7b18d1d0cc0c1be67fa9296817c9af0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a36ebd224aed5522d5b0fd316b25d8ccc0af8dd01a9ed22af46ced2355a13838->leave($__internal_a36ebd224aed5522d5b0fd316b25d8ccc0af8dd01a9ed22af46ced2355a13838_prof);

        
        $__internal_ff8e517b3828671f5b0b3f103c36cefe7b18d1d0cc0c1be67fa9296817c9af0e->leave($__internal_ff8e517b3828671f5b0b3f103c36cefe7b18d1d0cc0c1be67fa9296817c9af0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
