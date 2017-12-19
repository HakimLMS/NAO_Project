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
        $__internal_4628ab7b9878ded9cb8e58fa43df6eff33e36d2b5c4872ce8105df1617c5e047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4628ab7b9878ded9cb8e58fa43df6eff33e36d2b5c4872ce8105df1617c5e047->enter($__internal_4628ab7b9878ded9cb8e58fa43df6eff33e36d2b5c4872ce8105df1617c5e047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_aa66d6c072902357bcfddc8198d95a2e2746fbfeedcec00346900c215daef311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa66d6c072902357bcfddc8198d95a2e2746fbfeedcec00346900c215daef311->enter($__internal_aa66d6c072902357bcfddc8198d95a2e2746fbfeedcec00346900c215daef311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4628ab7b9878ded9cb8e58fa43df6eff33e36d2b5c4872ce8105df1617c5e047->leave($__internal_4628ab7b9878ded9cb8e58fa43df6eff33e36d2b5c4872ce8105df1617c5e047_prof);

        
        $__internal_aa66d6c072902357bcfddc8198d95a2e2746fbfeedcec00346900c215daef311->leave($__internal_aa66d6c072902357bcfddc8198d95a2e2746fbfeedcec00346900c215daef311_prof);

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
