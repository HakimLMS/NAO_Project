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
        $__internal_b0e9f35178527226e59fde958e5119f3d319cbd100e977c02751d0a81117f8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e9f35178527226e59fde958e5119f3d319cbd100e977c02751d0a81117f8bd->enter($__internal_b0e9f35178527226e59fde958e5119f3d319cbd100e977c02751d0a81117f8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a8936ba2e3ea15631d22f6db721bf28c976339fbebc63ce8436bd95b3581d77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8936ba2e3ea15631d22f6db721bf28c976339fbebc63ce8436bd95b3581d77c->enter($__internal_a8936ba2e3ea15631d22f6db721bf28c976339fbebc63ce8436bd95b3581d77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b0e9f35178527226e59fde958e5119f3d319cbd100e977c02751d0a81117f8bd->leave($__internal_b0e9f35178527226e59fde958e5119f3d319cbd100e977c02751d0a81117f8bd_prof);

        
        $__internal_a8936ba2e3ea15631d22f6db721bf28c976339fbebc63ce8436bd95b3581d77c->leave($__internal_a8936ba2e3ea15631d22f6db721bf28c976339fbebc63ce8436bd95b3581d77c_prof);

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
