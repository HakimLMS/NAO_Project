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
        $__internal_13e9d7236317ab25a5e146805471805e9b294d79d5739378f3df9b6233cc38f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e9d7236317ab25a5e146805471805e9b294d79d5739378f3df9b6233cc38f0->enter($__internal_13e9d7236317ab25a5e146805471805e9b294d79d5739378f3df9b6233cc38f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_732e8e7ed8e530af67b76961a69dbd063121d01cbee718bbe08be9a041c078d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732e8e7ed8e530af67b76961a69dbd063121d01cbee718bbe08be9a041c078d5->enter($__internal_732e8e7ed8e530af67b76961a69dbd063121d01cbee718bbe08be9a041c078d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_13e9d7236317ab25a5e146805471805e9b294d79d5739378f3df9b6233cc38f0->leave($__internal_13e9d7236317ab25a5e146805471805e9b294d79d5739378f3df9b6233cc38f0_prof);

        
        $__internal_732e8e7ed8e530af67b76961a69dbd063121d01cbee718bbe08be9a041c078d5->leave($__internal_732e8e7ed8e530af67b76961a69dbd063121d01cbee718bbe08be9a041c078d5_prof);

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
