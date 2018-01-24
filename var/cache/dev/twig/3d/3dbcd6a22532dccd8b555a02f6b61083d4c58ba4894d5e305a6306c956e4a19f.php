<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_892acbedf91af7dd113482758559f9ddb842a9e76352593ee56c7734830ba08a extends Twig_Template
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
        $__internal_d98833723d18a3411e8d4048b649128ff31d36ace3690a3a79c89d544ae96b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98833723d18a3411e8d4048b649128ff31d36ace3690a3a79c89d544ae96b08->enter($__internal_d98833723d18a3411e8d4048b649128ff31d36ace3690a3a79c89d544ae96b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_04d8fb35f63d678def0bad7f082a49b8e98cec0256ee460811de2b301b20999d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d8fb35f63d678def0bad7f082a49b8e98cec0256ee460811de2b301b20999d->enter($__internal_04d8fb35f63d678def0bad7f082a49b8e98cec0256ee460811de2b301b20999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d98833723d18a3411e8d4048b649128ff31d36ace3690a3a79c89d544ae96b08->leave($__internal_d98833723d18a3411e8d4048b649128ff31d36ace3690a3a79c89d544ae96b08_prof);

        
        $__internal_04d8fb35f63d678def0bad7f082a49b8e98cec0256ee460811de2b301b20999d->leave($__internal_04d8fb35f63d678def0bad7f082a49b8e98cec0256ee460811de2b301b20999d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
