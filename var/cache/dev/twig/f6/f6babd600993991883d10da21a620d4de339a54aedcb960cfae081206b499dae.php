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
        $__internal_6ae501d8eab6351242f4009a88439912d2bfcfef1a149d2f9d8a8c82bfb061c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae501d8eab6351242f4009a88439912d2bfcfef1a149d2f9d8a8c82bfb061c9->enter($__internal_6ae501d8eab6351242f4009a88439912d2bfcfef1a149d2f9d8a8c82bfb061c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_eed6b110ed05688a03bf33981d9ad5806332842f0000c2e1179956167ac9be13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed6b110ed05688a03bf33981d9ad5806332842f0000c2e1179956167ac9be13->enter($__internal_eed6b110ed05688a03bf33981d9ad5806332842f0000c2e1179956167ac9be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6ae501d8eab6351242f4009a88439912d2bfcfef1a149d2f9d8a8c82bfb061c9->leave($__internal_6ae501d8eab6351242f4009a88439912d2bfcfef1a149d2f9d8a8c82bfb061c9_prof);

        
        $__internal_eed6b110ed05688a03bf33981d9ad5806332842f0000c2e1179956167ac9be13->leave($__internal_eed6b110ed05688a03bf33981d9ad5806332842f0000c2e1179956167ac9be13_prof);

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
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
