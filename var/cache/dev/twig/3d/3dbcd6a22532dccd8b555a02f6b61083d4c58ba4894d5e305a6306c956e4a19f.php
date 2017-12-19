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
        $__internal_09210645c2ebe1561ada43fc85b0588db26e4bcfa8e67bd9c6f66449f7cdf2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09210645c2ebe1561ada43fc85b0588db26e4bcfa8e67bd9c6f66449f7cdf2c4->enter($__internal_09210645c2ebe1561ada43fc85b0588db26e4bcfa8e67bd9c6f66449f7cdf2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2ba54eef82827a5403149b4b957932c84130eb067f4c4955a46d890292f0175c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba54eef82827a5403149b4b957932c84130eb067f4c4955a46d890292f0175c->enter($__internal_2ba54eef82827a5403149b4b957932c84130eb067f4c4955a46d890292f0175c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_09210645c2ebe1561ada43fc85b0588db26e4bcfa8e67bd9c6f66449f7cdf2c4->leave($__internal_09210645c2ebe1561ada43fc85b0588db26e4bcfa8e67bd9c6f66449f7cdf2c4_prof);

        
        $__internal_2ba54eef82827a5403149b4b957932c84130eb067f4c4955a46d890292f0175c->leave($__internal_2ba54eef82827a5403149b4b957932c84130eb067f4c4955a46d890292f0175c_prof);

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
