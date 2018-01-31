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
        $__internal_3b3eef434a4fb2cfd3fa60f0fe7c634a3f961ff7ad685a9a97b1dd6dd9ae45a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3eef434a4fb2cfd3fa60f0fe7c634a3f961ff7ad685a9a97b1dd6dd9ae45a7->enter($__internal_3b3eef434a4fb2cfd3fa60f0fe7c634a3f961ff7ad685a9a97b1dd6dd9ae45a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9c35f309c86959ed95257d77cb5b85aa820729ab01e4c79b48196207f3d55d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c35f309c86959ed95257d77cb5b85aa820729ab01e4c79b48196207f3d55d1c->enter($__internal_9c35f309c86959ed95257d77cb5b85aa820729ab01e4c79b48196207f3d55d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3b3eef434a4fb2cfd3fa60f0fe7c634a3f961ff7ad685a9a97b1dd6dd9ae45a7->leave($__internal_3b3eef434a4fb2cfd3fa60f0fe7c634a3f961ff7ad685a9a97b1dd6dd9ae45a7_prof);

        
        $__internal_9c35f309c86959ed95257d77cb5b85aa820729ab01e4c79b48196207f3d55d1c->leave($__internal_9c35f309c86959ed95257d77cb5b85aa820729ab01e4c79b48196207f3d55d1c_prof);

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
