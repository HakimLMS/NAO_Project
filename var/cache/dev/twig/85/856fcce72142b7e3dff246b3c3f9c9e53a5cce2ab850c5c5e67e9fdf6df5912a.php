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
        $__internal_22568b39e976d68e29f416c57c07f1d1697a7c9126987110e9c2a66023bbd33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22568b39e976d68e29f416c57c07f1d1697a7c9126987110e9c2a66023bbd33c->enter($__internal_22568b39e976d68e29f416c57c07f1d1697a7c9126987110e9c2a66023bbd33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d672f68399e0a7685388584bbd188203e0cbf9dc020ccaf6ca07231d0a67ffc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d672f68399e0a7685388584bbd188203e0cbf9dc020ccaf6ca07231d0a67ffc5->enter($__internal_d672f68399e0a7685388584bbd188203e0cbf9dc020ccaf6ca07231d0a67ffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_22568b39e976d68e29f416c57c07f1d1697a7c9126987110e9c2a66023bbd33c->leave($__internal_22568b39e976d68e29f416c57c07f1d1697a7c9126987110e9c2a66023bbd33c_prof);

        
        $__internal_d672f68399e0a7685388584bbd188203e0cbf9dc020ccaf6ca07231d0a67ffc5->leave($__internal_d672f68399e0a7685388584bbd188203e0cbf9dc020ccaf6ca07231d0a67ffc5_prof);

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
