<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_dbe79814f0282b0cea6499199ded1c21b38f8f73b364318b51a811a12b060609 extends Twig_Template
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
        $__internal_3491bfe83e64ebefc59ef35882a7ec772223a73a397d9d68ba47c1881565b3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3491bfe83e64ebefc59ef35882a7ec772223a73a397d9d68ba47c1881565b3c4->enter($__internal_3491bfe83e64ebefc59ef35882a7ec772223a73a397d9d68ba47c1881565b3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_85538500a63d077e27ac81f44c0fd517d58a1204f1f5d33b0538ac4feca310af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85538500a63d077e27ac81f44c0fd517d58a1204f1f5d33b0538ac4feca310af->enter($__internal_85538500a63d077e27ac81f44c0fd517d58a1204f1f5d33b0538ac4feca310af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3491bfe83e64ebefc59ef35882a7ec772223a73a397d9d68ba47c1881565b3c4->leave($__internal_3491bfe83e64ebefc59ef35882a7ec772223a73a397d9d68ba47c1881565b3c4_prof);

        
        $__internal_85538500a63d077e27ac81f44c0fd517d58a1204f1f5d33b0538ac4feca310af->leave($__internal_85538500a63d077e27ac81f44c0fd517d58a1204f1f5d33b0538ac4feca310af_prof);

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
