<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_afa1a892f2097b2e148133ea89cdc2c0f6a677118a66aa8ddd6234a06ac03516 extends Twig_Template
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
        $__internal_c99e6e08b2a463ffd77d18669d76896f189f04fa3d895b6330e8a43ceac68d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99e6e08b2a463ffd77d18669d76896f189f04fa3d895b6330e8a43ceac68d58->enter($__internal_c99e6e08b2a463ffd77d18669d76896f189f04fa3d895b6330e8a43ceac68d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_140a01d93d596b6ed63dc5467e46873168099944394a51502f0aeb1bb203c44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140a01d93d596b6ed63dc5467e46873168099944394a51502f0aeb1bb203c44d->enter($__internal_140a01d93d596b6ed63dc5467e46873168099944394a51502f0aeb1bb203c44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c99e6e08b2a463ffd77d18669d76896f189f04fa3d895b6330e8a43ceac68d58->leave($__internal_c99e6e08b2a463ffd77d18669d76896f189f04fa3d895b6330e8a43ceac68d58_prof);

        
        $__internal_140a01d93d596b6ed63dc5467e46873168099944394a51502f0aeb1bb203c44d->leave($__internal_140a01d93d596b6ed63dc5467e46873168099944394a51502f0aeb1bb203c44d_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
