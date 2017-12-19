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
        $__internal_cf2f1747699205656c1d0e4adb4452e2e3b4dfd15adfc3358955e340c3a47118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2f1747699205656c1d0e4adb4452e2e3b4dfd15adfc3358955e340c3a47118->enter($__internal_cf2f1747699205656c1d0e4adb4452e2e3b4dfd15adfc3358955e340c3a47118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bdf2e34b342edd9aedf713bbe78447ff70319f1e98644062c943b9d88264044c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf2e34b342edd9aedf713bbe78447ff70319f1e98644062c943b9d88264044c->enter($__internal_bdf2e34b342edd9aedf713bbe78447ff70319f1e98644062c943b9d88264044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_cf2f1747699205656c1d0e4adb4452e2e3b4dfd15adfc3358955e340c3a47118->leave($__internal_cf2f1747699205656c1d0e4adb4452e2e3b4dfd15adfc3358955e340c3a47118_prof);

        
        $__internal_bdf2e34b342edd9aedf713bbe78447ff70319f1e98644062c943b9d88264044c->leave($__internal_bdf2e34b342edd9aedf713bbe78447ff70319f1e98644062c943b9d88264044c_prof);

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
