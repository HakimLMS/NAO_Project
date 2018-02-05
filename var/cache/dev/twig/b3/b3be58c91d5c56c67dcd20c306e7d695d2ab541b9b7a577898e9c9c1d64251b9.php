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
        $__internal_53fff3d7a3e17a169c2174a8a8e24b1ae774253468a47e4213a099d7e56a525e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fff3d7a3e17a169c2174a8a8e24b1ae774253468a47e4213a099d7e56a525e->enter($__internal_53fff3d7a3e17a169c2174a8a8e24b1ae774253468a47e4213a099d7e56a525e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b7f892e8eb07ca493d060c50da1da79a35fea39f0609c15522d9da0569d6f773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f892e8eb07ca493d060c50da1da79a35fea39f0609c15522d9da0569d6f773->enter($__internal_b7f892e8eb07ca493d060c50da1da79a35fea39f0609c15522d9da0569d6f773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_53fff3d7a3e17a169c2174a8a8e24b1ae774253468a47e4213a099d7e56a525e->leave($__internal_53fff3d7a3e17a169c2174a8a8e24b1ae774253468a47e4213a099d7e56a525e_prof);

        
        $__internal_b7f892e8eb07ca493d060c50da1da79a35fea39f0609c15522d9da0569d6f773->leave($__internal_b7f892e8eb07ca493d060c50da1da79a35fea39f0609c15522d9da0569d6f773_prof);

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
", "@Framework/FormTable/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
