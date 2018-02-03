<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3bc09884a31fe565789c1d15cdc2d91a86bfe1b1acb7d7fcdb0f52722cb85fd5 extends Twig_Template
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
        $__internal_37cefa79a4edfb8a41355cb4edc4ec480c6beba8f0d264a62f0fe9996b55ea0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37cefa79a4edfb8a41355cb4edc4ec480c6beba8f0d264a62f0fe9996b55ea0b->enter($__internal_37cefa79a4edfb8a41355cb4edc4ec480c6beba8f0d264a62f0fe9996b55ea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_05b346c88c793a551d8d0db07530f987dc7346ca5b7d3f6be7d3e683b4a95268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b346c88c793a551d8d0db07530f987dc7346ca5b7d3f6be7d3e683b4a95268->enter($__internal_05b346c88c793a551d8d0db07530f987dc7346ca5b7d3f6be7d3e683b4a95268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_37cefa79a4edfb8a41355cb4edc4ec480c6beba8f0d264a62f0fe9996b55ea0b->leave($__internal_37cefa79a4edfb8a41355cb4edc4ec480c6beba8f0d264a62f0fe9996b55ea0b_prof);

        
        $__internal_05b346c88c793a551d8d0db07530f987dc7346ca5b7d3f6be7d3e683b4a95268->leave($__internal_05b346c88c793a551d8d0db07530f987dc7346ca5b7d3f6be7d3e683b4a95268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
