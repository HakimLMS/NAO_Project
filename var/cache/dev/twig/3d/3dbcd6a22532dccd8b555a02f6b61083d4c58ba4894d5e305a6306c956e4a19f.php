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
        $__internal_56d1ed6343d9612f6017858c3b4d777856221589fbf597d1fa438c4329c58c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d1ed6343d9612f6017858c3b4d777856221589fbf597d1fa438c4329c58c94->enter($__internal_56d1ed6343d9612f6017858c3b4d777856221589fbf597d1fa438c4329c58c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4097fe4b81a08b5507c8e5fd7e1f4e8df8b0ae340db32bee767c9557c0d3fd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4097fe4b81a08b5507c8e5fd7e1f4e8df8b0ae340db32bee767c9557c0d3fd0d->enter($__internal_4097fe4b81a08b5507c8e5fd7e1f4e8df8b0ae340db32bee767c9557c0d3fd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_56d1ed6343d9612f6017858c3b4d777856221589fbf597d1fa438c4329c58c94->leave($__internal_56d1ed6343d9612f6017858c3b4d777856221589fbf597d1fa438c4329c58c94_prof);

        
        $__internal_4097fe4b81a08b5507c8e5fd7e1f4e8df8b0ae340db32bee767c9557c0d3fd0d->leave($__internal_4097fe4b81a08b5507c8e5fd7e1f4e8df8b0ae340db32bee767c9557c0d3fd0d_prof);

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
