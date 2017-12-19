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
        $__internal_64c7bf5d9ae1940e16de7e3bafcc0da3c791e6087bbf7805eb5e94deb0ddb78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c7bf5d9ae1940e16de7e3bafcc0da3c791e6087bbf7805eb5e94deb0ddb78d->enter($__internal_64c7bf5d9ae1940e16de7e3bafcc0da3c791e6087bbf7805eb5e94deb0ddb78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f0f0686cac68a847fe59f82e0bbf83192a70942bec46581617658693e78d797c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f0686cac68a847fe59f82e0bbf83192a70942bec46581617658693e78d797c->enter($__internal_f0f0686cac68a847fe59f82e0bbf83192a70942bec46581617658693e78d797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_64c7bf5d9ae1940e16de7e3bafcc0da3c791e6087bbf7805eb5e94deb0ddb78d->leave($__internal_64c7bf5d9ae1940e16de7e3bafcc0da3c791e6087bbf7805eb5e94deb0ddb78d_prof);

        
        $__internal_f0f0686cac68a847fe59f82e0bbf83192a70942bec46581617658693e78d797c->leave($__internal_f0f0686cac68a847fe59f82e0bbf83192a70942bec46581617658693e78d797c_prof);

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
