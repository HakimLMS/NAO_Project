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
        $__internal_6552f6be40b90bc1d68f04b0b7c263e2ca681ab100cb1bf65f154d4bcc061e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6552f6be40b90bc1d68f04b0b7c263e2ca681ab100cb1bf65f154d4bcc061e8e->enter($__internal_6552f6be40b90bc1d68f04b0b7c263e2ca681ab100cb1bf65f154d4bcc061e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9bd02619a26b3920917d2ff2a59d092f3219a2959e2e0c481e6eb0dc83c77d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd02619a26b3920917d2ff2a59d092f3219a2959e2e0c481e6eb0dc83c77d16->enter($__internal_9bd02619a26b3920917d2ff2a59d092f3219a2959e2e0c481e6eb0dc83c77d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6552f6be40b90bc1d68f04b0b7c263e2ca681ab100cb1bf65f154d4bcc061e8e->leave($__internal_6552f6be40b90bc1d68f04b0b7c263e2ca681ab100cb1bf65f154d4bcc061e8e_prof);

        
        $__internal_9bd02619a26b3920917d2ff2a59d092f3219a2959e2e0c481e6eb0dc83c77d16->leave($__internal_9bd02619a26b3920917d2ff2a59d092f3219a2959e2e0c481e6eb0dc83c77d16_prof);

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
