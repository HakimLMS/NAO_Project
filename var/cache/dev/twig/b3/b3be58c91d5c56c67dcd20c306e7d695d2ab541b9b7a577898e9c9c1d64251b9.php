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
        $__internal_66246b663379b9d312ca31cd33cddfa4fa68a87deaffa892dfae83a85a52a84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66246b663379b9d312ca31cd33cddfa4fa68a87deaffa892dfae83a85a52a84c->enter($__internal_66246b663379b9d312ca31cd33cddfa4fa68a87deaffa892dfae83a85a52a84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8d60e386b08211a843eb4ba2fbebbc2528787d2db45be5b87e40dd99e20d7415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d60e386b08211a843eb4ba2fbebbc2528787d2db45be5b87e40dd99e20d7415->enter($__internal_8d60e386b08211a843eb4ba2fbebbc2528787d2db45be5b87e40dd99e20d7415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_66246b663379b9d312ca31cd33cddfa4fa68a87deaffa892dfae83a85a52a84c->leave($__internal_66246b663379b9d312ca31cd33cddfa4fa68a87deaffa892dfae83a85a52a84c_prof);

        
        $__internal_8d60e386b08211a843eb4ba2fbebbc2528787d2db45be5b87e40dd99e20d7415->leave($__internal_8d60e386b08211a843eb4ba2fbebbc2528787d2db45be5b87e40dd99e20d7415_prof);

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
